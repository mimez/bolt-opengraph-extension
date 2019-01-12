<?php

namespace Bolt\Extension\Mimez\OpenGraph;

use Bolt\Extension\SimpleExtension;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class OpenGraphExtension extends SimpleExtension
{
    public function boot(Application $app)
    {
        // get config
        $config = $this->getConfig();

        die('foo');
    }
}
