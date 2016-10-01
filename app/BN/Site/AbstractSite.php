<?php

namespace BN\Site;

use \Slim;

/**
 * @author Andreas Bissinger
 */
abstract class AbstractSite implements SiteInterface
{
    public function __construct(Slim\App $app)
    {
        $this->register($app);
    }
}
