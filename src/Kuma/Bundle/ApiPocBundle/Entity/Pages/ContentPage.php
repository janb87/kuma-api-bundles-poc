<?php

namespace Kuma\Bundle\ApiPocBundle\Entity\Pages;

use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\NodeBundle\Entity\AbstractPage;
use Kunstmaan\NodeSearchBundle\Helper\SearchTypeInterface;
use Kunstmaan\PagePartBundle\Helper\HasPageTemplateInterface;
use Symfony\Component\Form\AbstractType;
use Kuma\Bundle\ApiPocBundle\Form\Pages\ContentPageAdminType;

/**
 * ContentPage
 *
 * @ORM\Entity()
 * @ORM\Table(name="kuma_bundle_apipocbundle_content_pages")
 */
class ContentPage extends AbstractPage implements HasPageTemplateInterface, SearchTypeInterface
{
    /**
     * Returns the default backend form type for this page
     *
     * @return string
     */
    public function getDefaultAdminType()
    {
        return ContentPageAdminType::class;
    }

    /**
     * @return array
     */
    public function getPossibleChildTypes()
    {
        return array (
            array(
                'name'  => 'ContentPage',
                'class' => 'Kuma\Bundle\ApiPocBundle\Entity\Pages\ContentPage'
            ),
        );
    }


    /**
     * {@inheritdoc}
     */
    public function getSearchType()
    {
        return 'Page';
    }

    /**
     * @return string[]
     */
    public function getPagePartAdminConfigurations()
    {
        return array('KumaApiPocBundle:main');
    }

    /**
     * {@inheritdoc}
     */
    public function getPageTemplates()
    {
        return array('KumaApiPocBundle:contentpage');
    }

    /**
     * @return string
     */
    public function getDefaultView()
    {
        return 'KumaApiPocBundle:Pages\ContentPage:view.html.twig';
    }
}
