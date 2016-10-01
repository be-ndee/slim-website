<?php

namespace BN\Components;

use \Slim;

/**
 * @author Andreas Bissinger
 */
abstract class AbstractComponent implements ComponentInterface
{
    public function __construct(Slim\App $app)
    {
        $this->register($app);
    }
}
