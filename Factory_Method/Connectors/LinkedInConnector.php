<?php

namespace Factory_Method\Connectors;

/**
 * This is a concrete Product implements LinkedIn API
 */
class LinkedInConnector implements SocialNetworkConnector
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
    public function logIn(): void
    {
        echo "<p>" .
            "Send HTTP API request to log in user $this->login with " .
            "password $this->password\n " .
            "</p>";
    }

    /**
     * @inheritDoc
     */
    public function logOut(): void
    {
        echo "<p>" .
            "Send HTTP API request to log out user $this->login\n " .
            "</p>";
    }

    /**
     * @inheritDoc
     */
    public function createPost($content): void
    {
        echo "<p>" .
            "Send HTTP API requests to create a post in LinkedIn with content: <br> " .
            "$content" .
            ".\n " .
            "</p>";
    }
}
