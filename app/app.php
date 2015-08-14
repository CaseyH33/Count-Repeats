<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(),
        array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use ($app) {
        $message="";
        return $app['twig']->render('input_form.html.twig', array('message' => $message));
    });

    $app->get("/results", function() use ($app) {
        $new_RepeatCounter = new RepeatCounter;
        $input_word = $_GET['input_word'];
        $input_string = $_GET['input_string'];
        //This if statement will render an error message if either input form is left blank
        if($new_RepeatCounter->checkNullInputs($input_word, $input_string)){
            $message = "Please fill in both forms";
            return $app['twig']->render('input_form.html.twig', array('message' => $message));
        }
        //This if statement will render an error message if the user inputs two words to search for
        elseif($new_RepeatCounter->checkInputWord($input_word)) {
            $message = "Please use only one word to search for";
            return $app['twig']->render('input_form.html.twig', array('message' => $message));
        }
        //This will render a results page to display the word count
        else {
            $count = $new_RepeatCounter->countRepeats($input_word, $input_string);
            return $app['twig']->render('results.html.twig', array('count' => $count, 'input_word' => $input_word, 'input_string' => $input_string));
        }
    });

    return $app;
?>
