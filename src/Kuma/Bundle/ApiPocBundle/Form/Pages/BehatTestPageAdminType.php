<?php

namespace Kuma\Bundle\ApiPocBundle\Form\Pages;

use Kunstmaan\NodeBundle\Form\PageAdminType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * The admin type for behat test pages
 */
class BehatTestPageAdminType extends PageAdminType
{
    /**
     * Sets the default options for this type.
     *
     * @param OptionsResolver $resolver The resolver for the options.
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Kuma\Bundle\ApiPocBundle\Entity\Pages\BehatTestPage'
        ));
    }

    /**
     * @assert () == 'behat_test_page'
     *
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'behat_test_page';
    }
}
