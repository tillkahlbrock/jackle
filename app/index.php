<?php

require_once "../bin/bootstrap.php";


$app = new \Slim\Slim();
$app->get('/', function () use($app) {
    $app->render('form.php');
});

$app->post('/user', function () use($app, $entityManager) {
    $item = new \Jackle\Item('Banane');
    $entityManager->persist($item);
    $app->render('userlist.php', array('username' => $item->getName()));
});

$app->run();

?>
