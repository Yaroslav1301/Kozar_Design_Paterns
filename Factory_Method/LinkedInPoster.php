<?php

namespace Study\FactoryMethod;

class LinkedInPoster extends SocialNetworkPoster
{
    private $login;

    private $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }
    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->login, $this->password);
    }
}