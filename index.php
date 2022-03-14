<?php
//entry point of the application

use Study\FactoryMethod\SocialNetworkPoster;
use Study\FactoryMethod\FacebookPoster;
use Study\FactoryMethod\LinkedInPoster;

function clientCode(SocialNetworkPoster $creator)
{
    $creator->post("Test content 1");
    $creator->post("Test content 2");
}

echo "Testing FacebookCreator:\n";
$fb = new FacebookPoster("kozar", "kozar");
clientCode(new FacebookPoster('yaroslav', '123456789'));
echo "\n\n";

echo "Testing FacebookCreator:\n";
clientCode(new \Study\FactoryMethod\LinkedInPoster('ivan', '123456789'));
echo "\n\n";