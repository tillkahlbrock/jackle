<?php

require_once "../bin/bootstrap.php";

use Jackle\Entity\User;

$app = new \Slim\Slim();

$app->get('/', function () use($app) {
    $app->render('form.php');
});

$app->post('/user', function () use($app, $entityManager) {
    $username = $app->request()->params('Username');
    $item = new \Jackle\Entity\User($username);
    $entityManager->persist($item);
    $entityManager->flush();
});

$app->get(
    '/user',
    function() use ($app, $entityManager) {
        $query = $entityManager->createQuery('SELECT u FROM Jackle\Entity\User u');
        $users = $query->getResult();
        $app->render('userlist.php', array('users' => $users));
    }
);

$app->run();

?>
