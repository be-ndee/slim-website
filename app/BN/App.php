<?php

namespace BN;

use \Slim;

use BN\API\Contact;
use BN\Components\Twig;
use BN\Site\Home;

/**
 * @author Andreas Bissinger
 */
class App
{
    /* @var Slim\App */
    private $slimApp;

    public function __construct()
    {
        $this->slimApp = new Slim\App();

        $this->registerComponents();
        $this->registerSites();
        $this->registerAPI();
    }

    public function run()
    {
        $this->slimApp->run();
    }

    public function registerComponents()
    {
        $twig = new Twig($this->slimApp);
    }

    public function registerSites()
    {
        $home = new Home($this->slimApp);
        // imprint
    }

    public function registerAPI()
    {
        $contact = new Contact($this->slimApp);
    }
}
