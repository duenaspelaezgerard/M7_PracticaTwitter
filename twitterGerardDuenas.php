<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');
require_once('database_connection.php');
require_once('class.datos.php');

$settings = array(
    'oauth_access_token' => "",
    'oauth_access_token_secret' => "",
    'consumer_key' => "",
    'consumer_secret' => ""
);

// $url = 'https://publish.twitter.com/oembed';
// $requestMethod = 'POST';

// $postfields = array(
//     'screen_name' => 'usernameToBlock', 
//     'skip_status' => '1'
// );

// $twitter = new TwitterAPIExchange($settings);
// echo $twitter->buildOauth($url, $requestMethod)
//              ->setPostfields($postfields)
//              ->performRequest();

echo '<br><br>';
$url = 'https://publish.twitter.com/oembed';
$getfield = '?url=https://twitter.com/Interior/status/507185938620219395';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
$respuesta = $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();

$data = json_decode($respuesta, true);
$url = $data['url'];
$author_name = $data['author_name'];
$author_url = $data['author_url'];
$type = $data['type'];

$objDatos = new Datos($connect);
$objDatos -> setURL($url);
$objDatos -> setAuthorName($author_name);
$objDatos -> setAuthorUrl($author_url);
$objDatos -> setPhoto($type);
$objDatos -> save();

echo "URL: $url <br>";
echo "Author Name: $author_name <br>";
echo "Author URL: $author_url <br>";
echo "HTML: $type <br>";
