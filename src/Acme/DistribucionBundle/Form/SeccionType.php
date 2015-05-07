<?php

namespace Acme\DistribucionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SeccionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigo')
            ->add('ubicacion')
            ->add('cantidadEspacio')
            ->add('idInstalacion')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\DistribucionBundle\Entity\Seccion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acme_distribucionbundle_seccion';
    }
}
