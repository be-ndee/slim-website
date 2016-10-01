<?php

namespace BN\Components;

use \Slim;

/**
 * @author Andreas Bissinger
 */
class Twig extends AbstractComponent
{
    public function register(Slim\App $app)
    {
        $container = $app->getContainer();
        $container["view"] = function ($container) {
            $view = new Slim\Views\Twig("../app/templates", [
                "cache" => "../app/cache"
            ]);

            $view->addExtension(new Slim\Views\TwigExtension(
                $container["router"],
                $container["request"]->getUri()
            ));

            return $view;
        };
    }
}
