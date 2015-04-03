<?php

namespace Acme\DistribucionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acme\DistribucionBundle\Entity\Seccion;
use Acme\DistribucionBundle\Form\SeccionType;

/**
 * Seccion controller.
 *
 */
class SeccionController extends Controller
{

    /**
     * Lists all Seccion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AcmeDistribucionBundle:Seccion')->findAll();

        return $this->render('AcmeDistribucionBundle:Seccion:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Seccion entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Seccion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('seccion_show', array('id' => $entity->getId())));
        }

        return $this->render('AcmeDistribucionBundle:Seccion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Seccion entity.
     *
     * @param Seccion $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Seccion $entity)
    {
        $form = $this->createForm(new SeccionType(), $entity, array(
            'action' => $this->generateUrl('seccion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Seccion entity.
     *
     */
    public function newAction()
    {
        $entity = new Seccion();
        $form   = $this->createCreateForm($entity);

        return $this->render('AcmeDistribucionBundle:Seccion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Seccion entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeDistribucionBundle:Seccion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Seccion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeDistribucionBundle:Seccion:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Seccion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeDistribucionBundle:Seccion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Seccion entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeDistribucionBundle:Seccion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Seccion entity.
    *
    * @param Seccion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Seccion $entity)
    {
        $form = $this->createForm(new SeccionType(), $entity, array(
            'action' => $this->generateUrl('seccion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Seccion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeDistribucionBundle:Seccion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Seccion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('seccion_edit', array('id' => $id)));
        }

        return $this->render('AcmeDistribucionBundle:Seccion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Seccion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AcmeDistribucionBundle:Seccion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Seccion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('seccion'));
    }

    /**
     * Creates a form to delete a Seccion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('seccion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
