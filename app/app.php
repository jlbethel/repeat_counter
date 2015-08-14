<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    // Silex and Twig framworks for organization
    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    //Set path to homepage
    $app->get("/", function() use ($app) {
        return $app['twig']->render('counter_form.html.twig');
    });

    return $app;
?>
