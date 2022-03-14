<?php

namespace Factory_Method\Posters;

use Factory_Method\Connectors\SocialNetworkConnector;
use Factory_Method\Connectors\LinkedInConnector;

/**
 * This Concrete Creator supports LinkedIn.
 */
class LinkedInPoster extends SocialNetworkPoster
{
    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;

    /**
     * @param string $login
     * @param string $password
     */
    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * @inheritDoc
     */
    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->login, $this->password);
    }
}