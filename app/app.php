<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    // Silex and Twig framworks for organization.
    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    //Set path to homepage.
    $app->get("/", function() use ($app) {
        return $app['twig']->render('counter_form.html.twig');
    });

    //Set path to results page. Push users input through countRepeats method and return results.
    $app->get("/results", function() use ($app) {
        $counter = new RepeatCounter;
        $counter_result = $counter->countRepeats($_GET['word'], $_GET['phrase']);
        return $app['twig']->render('counter_results.html.twig', array('result' => $counter_result));
    });

    return $app;
?>
