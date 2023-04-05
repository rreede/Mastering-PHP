<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<div class="container">


<div class="col-sm-6">

<form action="login_create.php" method="post">


<div class="form-group">
    <label for="username">Username</label>

<input type="text" name="username" class="form-control">
<label for="username">Username</label>
<input type="password" name="password" class="form-control">


<input type="submit"  name="submit" value="Submit" class="btn btn-primary" >

</div>



</form>

</div>



</div>
    <?php

$connection = mysqli_connect("localhost", "root", "", "loginapp");


if(isset($_POST["submit"])) {
   $username = $_POST["username"];
    $password = $_POST["password"];


$query = "INSERT INTO users(username,password)";
$query .= "VALUES ('$username', '$password')";

$result = mysqli_query($connection, $query);

if(!$result) {
    die("Query Failed!");
}

}


?>
</body>
</html>