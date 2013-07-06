<?php

namespace FiveMinTo\BurgerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use FiveMinTo\BurgerBundle\Entity\Burger;
use FiveMinTo\BurgerBundle\Form\BurgerType;

/**
 * Burger controller.
 *
 * @Route("/burger")
 */
class BurgerController extends Controller
{
    /**
     * Lists all Burger entities.
     *
     * @Route("/", name="burger")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FiveMinToBurgerBundle:Burger')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Burger entity.
     *
     * @Route("/", name="burger_create")
     * @Method("POST")
     * @Template("FiveMinToBurgerBundle:Burger:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Burger();
        $form = $this->createForm(new BurgerType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('burger_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Burger entity.
     *
     * @Route("/new", name="burger_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Burger();
        $form   = $this->createForm(new BurgerType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Burger entity.
     *
     * @Route("/{id}", name="burger_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FiveMinToBurgerBundle:Burger')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Burger entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Burger entity.
     *
     * @Route("/{id}/edit", name="burger_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FiveMinToBurgerBundle:Burger')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Burger entity.');
        }

        $editForm = $this->createForm(new BurgerType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Burger entity.
     *
     * @Route("/{id}", name="burger_update")
     * @Method("PUT")
     * @Template("FiveMinToBurgerBundle:Burger:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FiveMinToBurgerBundle:Burger')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Burger entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new BurgerType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('burger_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Burger entity.
     *
     * @Route("/{id}", name="burger_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FiveMinToBurgerBundle:Burger')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Burger entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('burger'));
    }

    /**
     * Creates a form to delete a Burger entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
