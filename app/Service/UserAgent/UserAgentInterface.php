<?php


namespace App\Service\UserAgent;


interface UserAgentInterface
{
    public function browser();
    public function os();
    public function parse($ip);

}
