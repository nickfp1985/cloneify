<?php
  // turn on output buffering -- wait until we have all data before sending to the server.
  ob_start();

  $timezone = date_default_timezone_set("America/Los_Angeles");

  $con = mysqli_connect("localhost:8889", "root", "root", "cloneify");
  if(mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
  }

?>