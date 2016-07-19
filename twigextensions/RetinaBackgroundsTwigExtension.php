<?php
namespace Craft;

use Twig_Extension;

class RetinaBackgroundsTwigExtension extends \Twig_Extension
{
    public function getName() {
        return 'RetinaBackgrounds';
    }

    public function getFilters()
    {
        return array(
            'background' => new \Twig_Filter_Method($this, 'background'),
        );
    }

    public function background($asset, $transformHandle = null)
    {
        return craft()->retinaBackgrounds_image->retinaService($asset, $transformHandle);
    }
}