<?php

namespace Acme\DistribucionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acme\DistribucionBundle\Entity\Instalacion;
use Acme\DistribucionBundle\Form\InstalacionType;

/**
 * Instalacion controller.
 *
 */
class InstalacionController extends Controller
{

    /**
     * Lists all Instalacion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AcmeDistribucionBundle:Instalacion')->findAll();

        return $this->render('AcmeDistribucionBundle:Instalacion:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Instalacion entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Instalacion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('instalacion_show', array('id' => $entity->getId())));
        }

        return $this->render('AcmeDistribucionBundle:Instalacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Instalacion entity.
     *
     * @param Instalacion $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Instalacion $entity)
    {
        $form = $this->createForm(new InstalacionType(), $entity, array(
            'action' => $this->generateUrl('instalacion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new Instalacion entity.
     *
     */
    public function newAction()
    {
        $entity = new Instalacion();
        $form   = $this->createCreateForm($entity);

        return $this->render('AcmeDistribucionBundle:Instalacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Instalacion entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeDistribucionBundle:Instalacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Instalacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeDistribucionBundle:Instalacion:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Instalacion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeDistribucionBundle:Instalacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Instalacion entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeDistribucionBundle:Instalacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Instalacion entity.
    *
    * @param Instalacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Instalacion $entity)
    {
        $form = $this->createForm(new InstalacionType(), $entity, array(
            'action' => $this->generateUrl('instalacion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing Instalacion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeDistribucionBundle:Instalacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Instalacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('instalacion_edit', array('id' => $id)));
        }

        return $this->render('AcmeDistribucionBundle:Instalacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Instalacion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AcmeDistribucionBundle:Instalacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Instalacion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('instalacion'));
    }

    /**
     * Creates a form to delete a Instalacion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('instalacion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar'))
            ->getForm()
        ;
    }
}
