<?php
// config.php

// only for debugging
//error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
//ini_set('display_errors', 1);


// set local timezone
date_default_timezone_set('America/New_York');

// General
$projectName="STANLEY";
$projectEmail="stanley@ideo.com";
$projectPhoneNumber="YOUR PHONE NUMBER";


// Twilio API credentials
$accountSid = "AC8084fcf2779953e82c5b67b4e7425fae";
$authToken = "8f77ebccddcba91474d313133e7ef775"; //
$twilioPhoneNumber = "16463790081";
$siteURL= "dondon3000.herokuapp.com";


// Slack Webhook integration
$slackWebHookURL="YOUR SLACK PRIVATE CHANNEL WEB HOOK";
$slackRoom = "THE NAME OF YOUR SLACK ROOM";
$slackBotName = "Stanley"; //THE NAME OF YOUR BOT
$slackBotIcon = ":robot_face:"; // THE PROFILE IMAGE OF YOUR BOT example :money_mouth_face: or :shit:


// Database Stuff
$dbHost = "us-cdbr-iron-east-04.cleardb.net";
$dbName = "heroku_fb0a34f4747712b";
$dbUserName = "Tb3ba5d5bd07a2b";
$dbPassword = "7272bb04";
$dbTable = "dondontable";

$dbConnection = mysqli_connect($dbHost, $dbUserName, $dbPassword,$dbName);
mysqli_error($dbConnection);


// Responses setup (when you need an automated response to users - i.e. when the team is away or the session is over)
$automatedResponseOver="n"; // options: y | n 
$automatedResponseTeamSleeping ="n"; // options: y | n 
$automatedResponseTimeStart = "Today 9pm";
$automatedResponseTimeEnd = "Tomorrow 10am";



// Create a API client instance
$http = new Services_Twilio_TinyHttp(
    'https://api.twilio.com',
    array('curlopts' => array(
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_SSL_VERIFYHOST => 2
    )));

$client = new Services_Twilio($accountSid, $authToken, "2010-04-01", $http);

?>
