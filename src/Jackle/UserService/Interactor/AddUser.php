<?php

namespace Jackle\UserService\Interactor;

class AddUser implements Jackle\UserService\Boundary\Interactor
{
    /**
     * @var Jackle\EmailService\Boundary\Client
     */
    private $emailServiceClient;

    public function __construct(Jackle\EmailService\Boundary\Client $emailServiceClient)
    {
        $this->emailServiceClient = $emailServiceClient;
    }
    public function execute($params)
    {
        $username = $params['username'];
        $email = $params['email'];

        // do some user creation stuff

        $this->emailServiceClient->sendMail();
    }
}