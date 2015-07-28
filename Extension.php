<?php

namespace Bolt\Extension\CaseyAMcL\TOC;

use Bolt\BaseExtension;

class Extension extends BaseExtension
{

    public function initialize()
    {
        // Load the libraries
        require_once('phar://' . __DIR__ . '/toc.phar/vendor/autoload.php');

        // Register the Twig Extension
        $this->app['twig']->addExtension(new \TOC\TocTwigExtension());
    }

    public function getName()
    {
        return "bolt_toc";
    }

}






