<?php

// Twitter API credentials
$apiKey = '3o98fIKZMLrXMlDxBmC3Bpw3P';
$apiSecretKey = '3q8zUDaWT8JoH578lXntNVnO8UPEdI3CatdWYgNrqfGIru64PW';
$accessToken = '1649064550564503558-h9ZJXf0YBL5M6fpmR1olljiZDGirxC';
$accessTokenSecret = '1vVMrdRNtUzBBkFtavqdZvqU3fd6iwKzwNMqSqGMYYoDe';

// Tweet text to post
$tweetText = 'Hello, Twitter!';
// require_once 'vendor/autoload.php';
// Include TwitterOAuth library
require_once('twitteroauth/autoload.php');
use Abraham\TwitterOAuth\TwitterOAuth as TwitterOAuth;

// Create TwitterOAuth object
$connection = new TwitterOAuth($apiKey, $apiSecretKey, $accessToken, $accessTokenSecret);

// Post a tweet
$status = $connection->post('statuses/update', ['status' => $tweetText]);

// Check if the tweet was posted successfully
if ($connection->getLastHttpCode() == 200) {
    echo "Tweet posted successfully!";
} else {
    echo "Error posting tweet: " . $connection->getLastHttpCode();
}

?>
