<?php
date_default_timezone_set('America/Los_Angeles');

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/FindAndReplace.php';

$app = new Silex\Application();
$app->register(new Silex\Provider\TwigServiceProvider(), [
  'twig.path' => __DIR__ . '/../views/'
]);

$app->get('/', function() use ($app) {
  return $app['twig']->render('home.html.twig');
});

$app->post('/find', function() use ($app) {
  $input = $_POST['sample'];
  $find = $_POST['search'];
  $replace = $_POST['replacement'];

  $replacement_engine = new FindAndReplace;
  $result = $replacement_engine->execute($input, $find, $replace);

  return $app['twig']->render('result.html.twig', [
    'message' => $result
  ]);
});

return $app;
?>
