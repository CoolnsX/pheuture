<?php
    
      session_start();
      $name = $_SESSION["username"];
      $age = $_SESSION["age"];
      $email = $_SESSION["email"];
      $password = $_SESSION["password"];
      $gender = $_SESSION["gender"];
      $country = $_SESSION["country"];
      $filename = $_SESSION["file_name"];
      $filepath = $_SESSION["file_path"];
    echo "<h2 style='text-align:center;'>Uses of sessions in php</h2>";
    include_once("./table.php");
    session_destroy();

?>