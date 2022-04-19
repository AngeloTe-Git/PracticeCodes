<?php
session_start();
require_once('Facebook/autoload.php');

$Fobj = new \Facebook\Facebook([
    'app_id' => '782286742460206',
    'app_secret' => '44311bff714955e203a7da88f326f6a2',
    'default_graph_version' => 'v2.10'
]);

$handler = $Fobj -> getRedirectLoginHelper();


?>