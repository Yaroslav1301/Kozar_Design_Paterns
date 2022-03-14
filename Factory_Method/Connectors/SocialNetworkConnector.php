<?php

namespace Factory_Method\Connectors;

/**
 * Product interface declares behaviour of various types of products
 */
interface SocialNetworkConnector
{
    /**
     * Login user into the system
     *
     * @return void
     */
    public function logIn(): void;

    /**
     * Log out user from the system
     *
     * @return void
     */
    public function logOut(): void;

    /**
     * Adds ability to post some text
     *
     * @param $content
     * @return void
     */
    public function createPost($content): void;
}