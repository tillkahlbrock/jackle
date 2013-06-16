<?php

class IntegrationTest extends PHPUnit_Framework_TestCase
{
    public function testDaIntegration()
    {
        $params = array(
            'username' => 'till',
            'email' => 'till@example.com'
        );
        
        $interactor = new \Jackle\UserService\Interactor\CreateUser(
            new \Jackle\Boundary\EmailServiceClient(
                new \EmailService\Concrete()
            )
        );

        $interactor->run($params);
    }
}
