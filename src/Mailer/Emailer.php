<?php
namespace App\Mailer;

use Psr\Log\LoggerInterface;

class  Emailer
{
    public function __construct(string $myParam, LoggerInterface $logger)
    {
        $logger->alert('Bla!');
        $logger->alert($myParam);
        dump($myParam);
    }

    public function create():\Swift_Mailer
    {

    }
}