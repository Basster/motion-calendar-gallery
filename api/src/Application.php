<?php

namespace Basster\MotionGallery;

use Silex\Application as Silex;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\TwigServiceProvider;

class Application extends Silex
{
    public function __construct(array $values = array())
    {
        parent::__construct($values);

        $app = $this;

        $this->register(new ServiceControllerServiceProvider());
        $this->register(new TwigServiceProvider(), [
            'twig.path' => $this['base_path'] . '/src/views',
        ]);

        $this->get('/', function () use ($app) {
            return $app['twig']->render('index.html.twig', []);
        });
    }
}