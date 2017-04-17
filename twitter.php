<?php


// this file is for starting the connection the the twitter API


// there should be a quick config in here






require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

include "twitter-settings.php";





$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");

?>