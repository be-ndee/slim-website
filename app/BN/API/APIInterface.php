<?php

namespace BN\API;

use \Slim;

/**
 * @author Andreas Bissinger
 */
interface APIInterface
{
    public function register(Slim\App $app);
}
