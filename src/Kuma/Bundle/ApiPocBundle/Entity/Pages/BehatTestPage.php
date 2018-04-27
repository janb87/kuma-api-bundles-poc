<?php

namespace Kuma\Bundle\ApiPocBundle\Entity\Pages;

use Doctrine\ORM\Mapping as ORM;

use Kunstmaan\NodeBundle\Entity\AbstractPage;
use Kunstmaan\PagePartBundle\Helper\HasPageTemplateInterface;
use Symfony\Component\Form\AbstractType;
use Kuma\Bundle\ApiPocBundle\Form\Pages\BehatTestPageAdminType;

/**
 * BehatTestPage
 *
 * @ORM\Entity()
 * @ORM\Table(name="kuma_bundle_apipocbundle_behat_test_pages")
 */
class BehatTestPage extends AbstractPage implements HasPageTemplateInterface
{

    /**
     * {@inheritdoc}
     */
    public function getDefaultAdminType()
    {
        return BehatTestPageAdminType::class;
    }

    /**
     * @return array
     */
    public function getPossibleChildTypes()
    {
        return array(
            array(
                'name'  => 'HomePage',
                'class' => 'Kuma\Bundle\ApiPocBundle\Entity\Pages\HomePage'
            ),
            array(
                'name'  => 'ContentPage',
                'class' => 'Kuma\Bundle\ApiPocBundle\Entity\Pages\ContentPage'
            ),
        );
    }

    /**
     * @return string[]
     */
    public function getPagePartAdminConfigurations()
    {
        return array();
    }

    /**
     * {@inheritdoc}
     */
    public function getPageTemplates()
    {
        return array('KumaApiPocBundle:behat-test-page');
    }

    /**
     * @return string
     */
    public function getDefaultView()
    {
        return '';
    }
}
