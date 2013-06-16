<?php

namespace Jackle\Boundary;

class EmailServiceClient
{
    /**
     * @var Common\EmailService
     */
    private $emailService;
    
    public function __construct(\Common\EmailService $emailService) 
    {
        $this->emailService = $emailService;
    }
    
    public function sendMail($message) 
    {
        $message = $this->transformMessage($message);
        
        $this->emailService->sendMail($message);
    }
    
    private function transformMessage($message)
    {
        //TODO: Transformation
        return $message;
    }
}
