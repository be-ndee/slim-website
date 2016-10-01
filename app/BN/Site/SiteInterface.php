<?php

namespace BN\Site;

use \Slim;

/**
 * @author Andreas Bissinger
 */
interface SiteInterface
{
    public function register(Slim\App $app);
}
