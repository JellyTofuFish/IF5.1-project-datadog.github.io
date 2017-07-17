<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Categories;
use AppBundle\Entity\Teams;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Category controller.
 *
 * @Route("home/project")
 */
class CategoriesController extends Controller
{
    /**
     * Lists all category entities.
     *
     * @Route("/{id}/categories", name="categories_index")
     * @Method("GET")
     */
    public function indexAction(Teams $teams)
    {
        $categories = $teams->getTeamcategories();

        return $this->render('categories/index.html.twig', array(
            'categories' => $categories,
            'team' => $teams
        ));
    }

    /**
     * Creates a new category entity.
     *
     * @Route("/{id}/categories/newcategory", name="categories_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, Teams $teams)
    {
        $category = new Categories();
        $category->setTeam($teams);

        $form = $this->createForm('AppBundle\Form\CategoriesType', $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            $this->addFlash('success', 'Successfully created a new category!');

            return $this->redirectToRoute('categories_index', array('id' => $teams->getId()));
        }

        return $this->render('categories/new.html.twig', array(
            'category' => $category,
            'form' => $form->createView(),
            'team' => $teams
        ));
    }

    /**
     * Finds and displays a category entity.
     *
     * @Route("{ida}/categories/{id}/showcategory", name="category_show")
     * @ParamConverter("teams", class="AppBundle:Teams", options={"id" = "ida"})
     * @Method("GET")
     */
    public function showAction(Categories $category, Teams $teams)
    {
        $deleteForm = $this->createDeleteForm($category);
        $tasks = $category->getCategorytasks();

        return $this->render('categories/show.html.twig', array(
            'category' => $category,
            'tasks'=>$tasks,
            'team'=>$teams,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing category entity.
     *
     * @Route("/{id}/categories/edit", name="categories_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Categories $category)
    {
        $deleteForm = $this->createDeleteForm($category);
        $editForm = $this->createForm('AppBundle\Form\CategoriesType', $category);
        $editForm->handleRequest($request);
        $team=$category->getTeam();

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('categories_edit', array('id' => $category->getId()));
        }

        return $this->render('categories/edit.html.twig', array(
            'category' => $category,
            'edit_form' => $editForm->createView(),
            'team' => $team,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a category entity.
     *
     * @Route("/{id}", name="categories_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Categories $category)
    {
        $tasks = $category->getCategorytasks();
        foreach ($tasks as $key => $value)
        {
           $category->removeCategorytask($value);
        }

        $team=$category->getTeam();

        $form = $this->createDeleteForm($category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($category);
            $em->flush();
        }

        return $this->redirectToRoute('categories_index', [ 'id'=> $team->getId() ]);
    }

    /**
     * Creates a form to delete a category entity.
     *
     * @param Categories $category The category entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Categories $category)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categories_delete', array('id' => $category->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
