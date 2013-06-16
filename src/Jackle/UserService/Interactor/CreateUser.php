<?php

namespace Jackle\UserService\Interactor;

class CreateUser implements \Jackle\Interactor
{
    /**
     * @var EmailService\Boundary\Client
     */
    private $emailServiceClient;

    public function __construct(\Jackle\Boundary\EmailServiceClient $emailServiceClient)
    {
        $this->emailServiceClient = $emailServiceClient;
    }
    
    public function run($params)
    {
        $username = $params['username'];
        $email = $params['email'];

        // do some user creation stuff
        $message = "hello " . $username;
        $this->emailServiceClient->sendMail($message);
    }
}
