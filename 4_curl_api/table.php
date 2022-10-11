<html>
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
                <tr>
                <th scope="row">1</th>
                <td><?php echo $name ?></td>
                <td><?php echo $age ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $password ?></td>
                <td><?php echo $gender ?></td>
                <td><?php echo $country ?></td>
                </tr>
            </tr>
         </tbody>
      </table>
   </body>
</html>