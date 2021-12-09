<?php



$servername = "localhost";
$database = "test2";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);


// Change character set to utf8
mysqli_set_charset($conn,"utf8");

//echo "Current character set is: " . mysqli_character_set_name($conn);


// Check connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}else{

   // echo 'database connected!';
}


?>