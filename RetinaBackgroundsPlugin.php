<?php
namespace Craft;

class RetinaBackgroundsPlugin extends BasePlugin {

    function getName() {
        return Craft::t('Retina Backgrounds');
    }

    function getVersion() {

        return '0.0.0';
    }

    function getDeveloper() {

        return 'Craig Wann';
    }

    function getDeveloperUrl() {
        return 'http://www.craigwann.com/';
    }

    /**
     * Adds the Twig extension.
     *
     * @return \Twig_Extension
     */
    public function addTwigExtension()
    {
        Craft::import('plugins.retinabackgrounds.twigextensions.RetinaBackgroundsTwigExtension');

        return new RetinaBackgroundsTwigExtension();
    }

}
