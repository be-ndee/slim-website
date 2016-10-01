<?php

namespace BN\API;

use \Slim;

/**
 * @author Andreas Bissinger
 */
abstract class AbstractAPI implements APIInterface
{
    public function __construct(Slim\App $app)
    {
        $this->register($app);
    }
}
