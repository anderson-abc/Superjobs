<?php
// src/Acme/DemoBundle/Form/Extension/ImageTypeExtension.php
namespace Superjobs\HomeBundle\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;

class ImageTypeExtension extends AbstractTypeExtension
{
    /**
     * Retourne le nom du type de champ qui est étendu
     *
     * @return string Le nom du type qui est étendu
     */
    public function getExtendedType()
    {
        return 'file';
    }
}