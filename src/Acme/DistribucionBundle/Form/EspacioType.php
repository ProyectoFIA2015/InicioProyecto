<?php

namespace Acme\DistribucionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EspacioType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('area')
            ->add('codigo')
            ->add('descripcion')
            ->add('tipoproducto')
            ->add('costosugerido')
            ->add('estado')
            ->add('costoreal')
            ->add('idSeccion')
            ->add('idCliente')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\DistribucionBundle\Entity\Espacio'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acme_distribucionbundle_espacio';
    }
}
