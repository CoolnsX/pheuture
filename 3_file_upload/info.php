<?php
    if(isset($_POST["register"])) {
        echo '<b>Entered data >></b><br><br>';
        foreach($_POST as $key => $value){
            echo "<b>$key</b> : <b>$value</b><br>";
        }
        $name = ($_POST["name"]) ? $_POST["name"] : "NULL" ;
        $files = (isset($_POST["files"])) ? $_POST["files"] : "No file uploaded" ;
        $password = ($_POST["password"]) ? $_POST["password"] : "NULL" ;
        $age = ($_POST["age"]) ? $_POST["age"] : "NULL" ;
        $email = ($_POST["email"]) ? $_POST["email"] : "NULL" ;
        $gender = (isset($_POST["gender"]) && $_POST["gender"]) ? $_POST["gender"] : "NULL" ;
        $country = ($_POST["country"]) ? $_POST["country"] : "NULL" ;
        
        session_start();
        
        $_SESSION["username"] = "$name";
        $_SESSION["age"] = "$age";
        $_SESSION["email"] = "$email";
        $_SESSION["password"] = "$password";
        $_SESSION["gender"] = "$gender";
        $_SESSION["country"] = "$country";
        if($_FILES){
        $target_dir= "uploads/";
        $main_file_name = $_FILES["files"]["name"];
        $main_file_name_size = $_FILES["files"]["size"];
        $target_file = $target_dir . basename($main_file_name);
        $ext = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $temp_file_name = $_FILES["files"]["tmp_name"];
        $target_temp_file = $target_dir . basename($temp_file_name);
      
        $finalpath = $target_dir.$main_file_name;
        if(file_exists($finalpath)){
            $file1_name = $name."_".time().".".$ext;
            $finalpath = $target_dir.$file1_name;
        }
        echo (move_uploaded_file($temp_file_name,$finalpath)) ? "file successfully uploaded" : "unable to upload file";
        $_SESSION["file_path"]=$finalpath;
        $_SESSION["file_name"]=$main_file_name;
        }
        echo '<br><br><b>Redirecting to display.php in 3 seconds>></b><br><br>';
        
        header( "refresh:3;url=display.php" );
    }
    else{
        echo "Why are you here??!!<br>Redirecting back to form page in <b>3 seconds</b>";
        
        header( "refresh:3;url=index.html" );
     }
?>