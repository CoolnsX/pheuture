<?php
    $curl = curl_init();
    
    echo "<hr>";
    //task-1
    curl_setopt($curl, CURLOPT_URL, "http://localhost/training/4_curl_api/api.php");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($curl);
    echo $response;
    
    echo "<br>";
    echo "<br>";

    echo "<hr>";
    //task-2
    curl_setopt($curl, CURLOPT_URL, "http://localhost/training/4_curl_api/api.php");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($curl);
    echo $response;
    
    echo "<br>";
    echo "<br>";

    echo "<hr>";
    //task-3
    $newarr = json_decode($response, true);
    print_r($newarr);

    echo "<br>";
    echo "<br>";
    
    echo "<hr>";
    //task-4
    $file = array("name"=>"Tanveer", "age"=>"21", "Email"=>"my_name@gmail.com","password"=>"12345","Gender"=>"male","Country"=>"india");
    $json = json_encode($file);
    curl_setopt($curl, CURLOPT_URL, "http://localhost/training/4_curl_api/api.php");
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
    curl_setopt($curl, CURLOPT_HEADER, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    $result1 = curl_exec($curl);
    echo $result1;

    echo "<br>";
    echo "<br>";

    echo "<hr>";
    //task-5
    $curl1 = curl_init();
    curl_setopt($curl1, CURLOPT_URL, "http://localhost/training/4_curl_api/info.php");
    curl_setopt($curl1, CURLOPT_POST, 1);
    curl_setopt($curl1, CURLOPT_RETURNTRANSFER, 1); //to remove success status
    curl_setopt($curl1, CURLOPT_POSTFIELDS, http_build_query($_POST));//make our data into http query
    $response = curl_exec($curl1);
    echo $response;

?>