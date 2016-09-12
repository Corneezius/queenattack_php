<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/queen.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use ($app){
      $position = $_GET('position');
      $target = $_GET('target');
        return $app['twig']->render('queen.html.twig');
    });

    $app->get("/position", function() use ($app){
        return $app['twig']->render('position.html.twig');
    });

    return $app;
?>
