<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Teams;
use AppBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
/**
 * Member controller.
 *
 * @Route("/home/members")
 */
class MembersController extends Controller
{
    /**
     * Finds and displays a member entity.
     *
     * @Route("/{id}", name="members_show")
     * @Method("GET")
     */
    public function showAction(Users $member)
    {
        $tasks = $member->getUsertasks();
        return $this->render('members/show.html.twig', array(
            'member' => $member,
            'tasks' => $tasks,
        ));
    }

    /**
     * Displays a form to edit an existing member entity.
     *
     * @Route("/{id}/edit", name="members_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Users $member)
    {

        $editForm = $this->createForm('AppBundle\Form\MembersType', $member);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('homepage', array('id' => $member->getId()));
        }
        return $this->render('members/edit.html.twig', array(
            'member' => $member,
            'edit_form' => $editForm->createView(),

        ));
    }
}