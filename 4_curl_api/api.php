<?php
    $resp = file_get_contents("php://input");
    if($resp){
        echo "<b>you did post request with json to api.php, here is the data u send..</b><br><br>" ;
        echo $resp;
    }
    else{
        echo '{"message":"Hello there!!..looks like u did get request"}';
    }
?>