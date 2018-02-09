<?php
  $server  = "151.80.78.251"; /* Aseta palvelimesi IP tähän, esim 151.80.119.162 */
  $port   = "25565"; /* Aseta palvelimesi portti tähän, esimerkiksi 25565 */
  $timeout = "10";
 
  if ($server and $port and $timeout) {
    $verbinding =  @fsockopen("$server", $port, $errno, $errstr, $timeout);
  }
  if($verbinding) {
    echo '<span style="color: green;"><strong>ONLINE</strong></span>';
  }
  else {
    echo '<span style="color: red;"><strong>OFFLINE</strong></span>';
  }
?>
