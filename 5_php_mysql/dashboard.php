<?php
    $cons = new mysqli("localhost","root","","dummy") or die("unable to connect to database");
    if($_POST){
        $name = ($_POST["name"]) ? $_POST["name"] : "NULL" ;
        $password = ($_POST["password"]) ? $_POST["password"] : "NULL" ;
        $age = ($_POST["age"]) ? $_POST["age"] : "NULL" ;
        $email = ($_POST["email"]) ? $_POST["email"] : "NULL" ;
        $gender = (isset($_POST["gender"]) && $_POST["gender"]) ? $_POST["gender"] : "NULL" ;
        $country = ($_POST["country"]) ? $_POST["country"] : "NULL" ;
        $cons->query("Insert into data(name,age,email,gender,country,pass) values('$name',$age,'$email','$gender','$country','$password')");
    }else{
        echo "Why are you here??!!<br>Redirecting back to form page in <b>3 seconds</b>";
        header( "refresh:3;url=index.html" );
    }
?>
<html>
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <style>
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}</style>
    </head>
   <body>
        <table class="table">
            <thead class="table-dark">
                <tr>
                <th scope="col">#</th>
                <td>Name</td>
                <td>Age</td>
                <td>Email</td>
                <td>Password</td>
                <td>Gender</td>
                <td>Country</td>
                </tr>
            </thead>
            <tbody class="table-group-divider">
<?php
    $results = $cons -> query("select * from data");
    if($results){
        while($row=$results->fetch_object()){
            echo "<tr>
                <th scope='row'>$row->id</th>
                <td>$row->name</td>
                <td>$row->age</td>
                <td>$row->email</td>
                <td>$row->pass</td>
                <td>$row->gender</td>
                <td>$row->country</td>
                </tr>";
        }
    }

?>
            </tbody>
        </table>
        <br><br>
        <div style="text-align:center;"><a href="index.html">Add more</a></div>
   </body>
</html>