<?php
// This is the functions file 





// This function is a quick-use wrapper for the tweet capability. 
// Make sure you setup twitter-settings.php!

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