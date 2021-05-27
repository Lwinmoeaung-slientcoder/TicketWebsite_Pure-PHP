<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "tepdb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname) or die("Connect failed: %s\n". $conn -> error);
if ($conn==true) {
//  echo "<script>alert('Connection Successful')</script>";
}
else {
  // code...
  echo "<script>alert('Connection Fail')</script>";
}
?>
