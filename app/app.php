<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
      'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) { 
      return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_game", function() use($app) { 
      $my_RockPaperScissors = new RockPaperScissors;
      $player1 = $_GET['player1'] ;
      $player2 = $_GET['player2'] ;
      $winner = $my_RockPaperScissors->play($player1, $player2);
      return $app['twig']->render('form.html.twig', array('player1' => $player1, 'player2' => $player2, 'winner' => $winner));
    });

    return $app;
?>