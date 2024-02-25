<?php 
// mlgn api key 
require '../vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = Mailgun::create('04c6c9d65e366ba4cffc4d111ce1bb2d-8c8e5529-7c6242ae', 'https://api.mailgun.net');
$domain = "sandbox5494545acd6342b3b2c0b61fd7910f75.mailgun.org";
$params = array(
  'from'    => 'mailgun@sandbox5494545acd6342b3b2c0b61fd7910f75.mailgun.org',
  'to'      => 'onuralp618@gmail.com',
  'subject' => 'Hello',
  'text'    => 'Testing some Mailgun awesomness!'
);

# Make the call to the client.
$mgClient->messages()->send($domain, $params);