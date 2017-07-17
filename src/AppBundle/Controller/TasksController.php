<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Tasks;
use AppBundle\Entity\Teams;
use AppBundle\Entity\Users;
use AppBundle\Form\TasksType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;


/**
 * Task controller.
 *
 * @Route("home/project")
 */
class TasksController extends Controller
{
    /**
     * Finds and displays a teams project
     *
     * @Route("/teams/{id}", name="teams_project")
     * @Method("GET")
     */
    public function showAllAction(Users $userid)
    {
        $id = $userid->getId();
        $connection =$this->get('database_connection');
        $userteams = $connection->fetchAll(
            'SELECT t.teamname, t.id, ut.id as uit
              FROM usersteams as ut, teams as t
              WHERE ut.teams_id = t.id
              AND ut.user_id = ?
              Order BY t.id DESC ', [$id]
        );
        return $this->render('tasks/chooseProject.html.twig', array(
            'userteams' => $userteams
        ));
    }
    /**
     * Greeting
     *
     * @Route("/{id}/greet", name="tasks_greeting")
     * @Method("GET")
     */
    public function greetAction(Teams $teams)
    {
        $teamname = $teams->getTeamname();
        $this->addFlash('info', 'Welcome to "'.$teamname.'" teams project!');

        return $this->redirectToRoute('tasks_index', [ 'id' => $teams->getId()]);
    }

    /**
     * Lists all task entities.
     *
     * @Route("/{id}", name="tasks_index")
     * @Method("GET")
     */
    public function indexAction(Teams $teams)
    {
        $teamname = $teams->getTeamname();

        $connection =$this->get('database_connection');

        $categories= $connection->fetchAll(
            'SELECT categories.categoryname, categories.id
              FROM teams, categories
              WHERE teams.id = categories.team_id AND teams.id = ?
              ORDER BY categories.categoryname ASC ', [$teams->getId()]
        );

        $tasks= $connection->fetchAll(
            'SELECT ta.id, ta.taskname, ta.taskcomment, ta.created, ta.dueto, s.status, u.username, te.teamname, c.categoryname, p.priorities 
              FROM tasks as ta, users as u, teams as te, categories as c, priorities as p, status as s
              WHERE ta.team_id = te.id AND ta.authorUser_id = u.id 
              AND ta.category_id = c.id AND ta.priority_id = p.id AND s.id = ta.status_id
              ORDER BY c.created ASC, ta.priority_id ASC, ta.dueto DESC'
        );
        return $this->render('tasks/index.html.twig', array(
            'tasks' => $tasks,
            'team' => $teams,
            'teamname' => $teamname,
            'categories' =>$categories,
        ));
    }

    /**
     * Creates a new task entity.
     *
     * @Route("/{id}/newtask", name="tasks_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, Teams $teams)
    {
        $task = new Tasks();
        $author = $this->get('security.token_storage')->getToken()->getUser();

        $task->setAuthor($author);
        $task->setTeam($teams);

        $form = $this->createForm('AppBundle\Form\TasksType', $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            $this->addFlash('success', 'Successfully created a new task!');

            return $this->redirectToRoute('tasks_show', array('id' => $task->getId()));
        }

        return $this->render('tasks/new.html.twig', array(
            'task' => $task,
            'author' => $author,
            'team' => $teams,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a task entity.
     *
     * @Route("/{id}/show", name="tasks_show")
     * @Method("GET")
     */
    public function showAction(Tasks $task)
    {
        $deleteForm = $this->createDeleteForm($task);
        $author = $task->getAuthor();
        $category =$task->getCategory();
        $team=$task->getTeam();
        return $this->render('tasks/show.html.twig', array(
            'task' => $task,
            'author'=>$author,
            'category' => $category,
            'team'=>$team,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing task entity.
     *
     * @Route("/{id}/edit", name="tasks_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tasks $task)
    {
        $team=$task->getTeam();
        $deleteForm = $this->createDeleteForm($task);
        $editForm = $this->createForm(TasksType::class, $task);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tasks_show', array('id' => $task->getId()));
        }

        return $this->render('tasks/edit.html.twig', array(
            'task' => $task,
            'team' => $team,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }


    /**
     * Deletes a task entity.
     *
     * @Route("/{id}/delete", name="tasks_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tasks $task)
    {
        $team=$task->getTeam();
        $form = $this->createDeleteForm($task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($task);
            $em->flush();
        }

        return $this->redirectToRoute('tasks_index', [ 'id'=> $team->getId() ]);
    }

    /**
     * Creates a form to delete a task entity.
     *
     * @param Tasks $task The task entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tasks $task)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tasks_delete', array('id' => $task->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
