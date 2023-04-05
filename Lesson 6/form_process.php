
<?php

if(isset($_POST["submit"])) {
$username = $_POST["username"];
$password = $_POST["password"];

$names = ["Rene", "Peter", "Cezar", "Maria"];
$minimum = 5;
$maximum = 10;


if(strlen($username) < $minimum) {
    echo "Username has to be longer than five characters";
}

if(strlen($username) > $maximum) {
    echo "Username has to be shorter than 10 characters";
}

if(!in_array($username, $names)) {
    echo "Sorry you are not allowed to login";
}

}
?>