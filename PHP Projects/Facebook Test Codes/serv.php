<?php
if (!session_id()) {
    session_start();
}
require_once("loadin.php");

try{
    $accessToken = $handler->getAccessToken();
}catch(\Facebook\Exception\FacebookResponseException $e){
    echo "Response Exception: "  . $e ->getMessage();
}catch(\Facebook\Exception\FacebookSDKException $e){
    echo "SDK Exception: " . $e ->getMessage();
    exit();
}

if(!$accessToken){
    header('Location: login.php');
    exit();
}

$oAuth2Client = $Fobj ->getOAuth2Client();
if(!$accessToken->isLongLived())
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
    $response = $Fobj->get("/me?fields=id, first_name, last_name, email, picture.type(large)", $accessToken);
    $uData = $response->getGraphNode()->asArray();
    $_SESSION['uData']=$uData;
    $_SESSION['aToken']=(string)$accessToken;
    
    $wfirst=$_SESSION['uData']['first_name'];
    $wlast=$_SESSION['uData']['last_name'];
    $wemail=$_SESSION['uData']['email'];

    $servername = "localhost";
    $username = "Angelo";
    $password = "Angelo";
    $dbname = "fbacc";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users where email='$wemail'";
    $result = $conn->query($sql);
    if(!($result->num_rows > 0))
    {
        $sql = "INSERT INTO users (first, last, email, date) VALUES ('$wfirst', '$wlast', '$wemail', CURDATE())";
        $result = $conn->query($sql);
        if ($conn->query($sql) === TRUE) {
            echo "New";
          } else {
            echo "Error";
          }
    }

    $conn->close();


    header('Location: hi.php');
    exit();
?>