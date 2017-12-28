<?php

  function OpenCon(){
    $dbhost = "localhost";
    $dbuser = "vins_db";
    $dbpass = "1234";
    $db = "vins";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    return $conn;
  }

  function CloseCon($conn)
  {
    $conn -> close();
  }

?>
