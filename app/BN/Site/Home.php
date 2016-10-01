<?php

namespace BN\Site;

use \Slim;

/**
 * @author Andreas Bissinger
 */
class Home extends AbstractSite
{
    public function register(Slim\App $app)
    {
        $app->get("/", function ($request, $response, $args) {
            return $this->view->render($response, "home.twig", []);
        });
    }
}
