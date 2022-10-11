<?php
   if(isset($_POST["register"])) {
      $name = ($_POST["name"]) ? $_POST["name"] : "Not specified" ;
      $age = ($_POST["age"]) ? $_POST["age"] : "Not specified" ;
      $email = ($_POST["email"]) ? $_POST["email"] : "Not specified" ;
      $gender = (isset($_POST["gender"]) && $_POST["gender"]) ? $_POST["gender"] : "Not specified" ;
      $country = ($_POST["country"]) ? $_POST["country"] : "Not specified" ;
      echo "Your Name is <b>".$name."</b><br><br>";
      echo "You are <b>".$age."</b> years old<br><br>";
      echo "Your Email id is <b>".$email."</b><br><br>";
      echo "You are <b>".$gender."</b><br><br>";
      echo "Your Nationality is <b>".$country."</b><br><br>";
   }
   else{
      echo "Why are you here??!!<br>Redirecting back to form page in <b>3 seconds</b>";
      header( "refresh:3;url=index.html" );
   }
?>
