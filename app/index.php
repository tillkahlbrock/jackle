<?php

require '../vendor/autoload.php';

$app = new \Slim\Slim();
$app->get('/', function () use($app) {
    $app->render('form.php');
});

$app->post('/user', function () use($app) {
    $username = "timmey";
    $app->render('userlist.php', array('username' => $username));
});

$app->run();

?>
