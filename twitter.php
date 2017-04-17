<?php


// this file is for starting the connection the the twitter API


// there should be a quick config in here




function tweet($tweet){

require "vendor/autoload.php";

require "twitter-settings.php";


$url = 'https://api.twitter.com/1.1/statuses/update.json';
$requestMethod = 'POST';

$postfields = array(
    'status' => $tweet, 
);

$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
    ->setPostfields($postfields)
    ->performRequest();

}

?>