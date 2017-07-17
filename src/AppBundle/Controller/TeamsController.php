<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Teams;
use AppBundle\Entity\Users;
use AppBundle\Entity\UsersTeams;
use AppBundle\Form\TeamsType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Team controller.
 *
 * @Route("home/teams")
 */
class TeamsController extends Controller
{
    /**
     * Lists all team entities.
     *
     * @Route("/all", name="teams_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $connection =$this->get('database_connection');
        $newteams= $connection->fetchAll(
            'SELECT teams.teamname, COUNT(usersteams.user_id) as ct, teams.id
              FROM teams LEFT JOIN usersteams ON 
              teams.id = usersteams.teams_id 
              GROUP By teams.teamname
              ORDER BY ct DESC , teams.id DESC '
        );

        return $this->render('teams/index.html.twig', array(
            'newteams' => $newteams,
        ));
    }

    /**
     * Creates a new team entity.
     *
     * @Route("/member/{id}", name="teams_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request,  Users $userid)
    {
        $team = new Teams();
        $teamUser = new UsersTeams();

        $form = $this->createForm(TeamsType::class, $team);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($team);
            $em->flush();


            $repository= $this->getDoctrine()->getRepository('AppBundle:Teams');
            $teamid = $repository->find($team->getId());

            $teamUser->setTeam( $teamid );
            $teamUser->setUser($userid);


            $em = $this->getDoctrine()->getManager();
            $em->persist($teamUser);
            $em->flush();

            $this->addFlash('success', 'Your new team has been created!');

            return $this->redirectToRoute('homepage', array('id' => $team->getId()));
        }

        return $this->render('teams/new.html.twig', array(
            'team' => $team,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a team entity.
     *
     * @Route("/{ida}/relation/{id}/show_one", name="teams_show_one")
     * @Method("GET")
     * @ParamConverter("teams", class="AppBundle:Teams", options={"id" = "ida"})
     * @param UsersTeams $userteamid
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction( UsersTeams $userteamid, Teams $teams)
    {
        $uid = $userteamid->getId();
        $ida = $teams->getId();

        $connection =$this->get('database_connection');
        $team= $connection->fetchArray(
            'SELECT teams.teamname, COUNT(usersteams.user_id) as ct, teams.id
              FROM teams, usersteams
              WHERE teams.id = usersteams.teams_id
              AND usersteams.teams_id = ?', [$ida]
        );

        $users= $connection->fetchAll(
            'SELECT users.username, users.email
              FROM users, usersteams
              WHERE users.id = usersteams.user_id
              AND usersteams.teams_id = ?', [$ida]
        );
        $deleteForm = $this->createDeleteForm($userteamid);

        return $this->render('teams/show.html.twig', array(
            'team' => $team,
            'users' => $users,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a team entity.
     *
     * @Route("/member/{id}/show_all", name="teams_show_all")
     *
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
        return $this->render('teams/showAll.html.twig', array(
            'userteams' => $userteams
        ));
    }
    /**
     * Creates a new team entity.
     *
     * @Route("/{id}/join", name="teams_join")
     * @Method({"GET"})
     */
    public function joinAction(Teams $teamid)
    {
        $teamUser = new UsersTeams();

        $Tid = $teamid->getId();
        $user = $this->getUser();
        $userid = $user->getId();
        $repository = $this->getDoctrine()->getRepository('AppBundle:UsersTeams');
        $getteamUser = $repository->findby([
            'team' =>$Tid, 'user' => $userid
        ]);

        if($getteamUser == null)
        {
            $teamUser->setTeam( $teamid );
            $teamUser->setUser( $user );

            $em = $this->getDoctrine()->getManager();
            $em->persist($teamUser);
            $em->flush();

            $this->addFlash('success', 'You have joined the selected team!');
        }
        else
        {
            $this->addFlash('danger', "You're already a member of that team");
        }

        return $this->redirectToRoute('teams_index', array('id' => $userid));

    }

    /**
     * Displays a form to edit an existing team entity.
     *
     * @Route("/{id}/edit", name="teams_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Teams $team)
    {
        $deleteForm = $this->createDeleteForm($team);
        $editForm = $this->createForm('AppBundle\Form\TeamsType', $team);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('teams_edit', array('id' => $team->getId()));
        }

        return $this->render('teams/edit.html.twig', array(
            'team' => $team,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a task entity.
     *
     * @Route("/{id}", name="tasks_delete")
     * @Method("DELETE")
     * @param Request $request
     * @param UsersTeams $userteam
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Request $request, UsersTeams $userteam)
    {
        $form = $this->createDeleteForm($userteam);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($userteam);
            $em->flush();
        }

        $this->addFlash('warning', 'You have left a team');

        return $this->redirectToRoute('homepage');
    }

    /**
     * Creates a form to delete a userteam entity.
     *
     * @param UsersTeams $userteam
     * @return \Symfony\Component\Form\Form The form
     * @internal param Teams $team The team entity
     *
     */
    private function createDeleteForm(UsersTeams $userteam)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tasks_delete', array('id' => $userteam->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}