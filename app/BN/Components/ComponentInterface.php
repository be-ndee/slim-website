<?php

namespace BN\Components;

use \Slim;

/**
 * @author Andreas Bissinger
 */
interface ComponentInterface
{
    public function register(Slim\App $app);
}
