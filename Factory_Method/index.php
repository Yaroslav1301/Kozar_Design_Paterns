<?php
include '../autoload.php';

use Factory_Method\Posters\FacebookPoster;
use Factory_Method\Posters\LinkedInPoster;
use Factory_Method\Posters\SocialNetworkPoster;

/**
 * The client code can work with any subclass of SocialNetworkPoster since it
 * doesn't depend on concrete classes.
 */
function clientCode(SocialNetworkPoster $creator, $content)
{
    $creator->post($content);
}

/**
 * During the initialization phase, the app can decide which social network it
 * wants to work with, create an object of the proper subclass, and pass it to
 * the client code.
 */
echo "Testing ConcreteCreator1(FACEBOOK):\n";
clientCode(new FacebookPoster("john_smith", "******"), "This is a content for FB");
echo "<br><br>";

echo "Testing ConcreteCreator2(LINKEDIN):\n";
clientCode(new LinkedInPoster("john_smith@example.com", "******"), "This a content for Linkedin");