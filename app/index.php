<?php

require_once "../bin/bootstrap.php";

use Jackle\Entity\User;

$app = new \Slim\Slim();

$app->get('/', function () use($app) {
    $app->render('start.php');
});

$app->get('/form', function () use($app) {
    $app->render('form.php');
});

$app->post('/user', function () use($app, $entityManager) {
    $params = $app->request()->params();
    addUser($params);
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

function addUser($params)
{
    /** @var Jackle\UserService\Boundary\Interactor $interactor */
    $interactor = null; // dispatching to correct interactor

    $interactor->execute($params);
}

?>
