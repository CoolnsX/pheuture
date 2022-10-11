<?php
        echo "<hr>";
        echo "<br><h2> Data from info.php</h2><br>";
        $name = ($_POST["name"]) ? $_POST["name"] : "NULL" ;
        $files = (isset($_POST["files"])) ? $_POST["files"] : "No file uploaded" ;
        $password = ($_POST["password"]) ? $_POST["password"] : "NULL" ;
        $age = ($_POST["age"]) ? $_POST["age"] : "NULL" ;
        $email = ($_POST["email"]) ? $_POST["email"] : "NULL" ;
        $gender = (isset($_POST["gender"]) && $_POST["gender"]) ? $_POST["gender"] : "NULL" ;
        $country = ($_POST["country"]) ? $_POST["country"] : "NULL" ;
        include("./table.php");
?>