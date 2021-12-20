<?php 

require_once("config.php");



$category =$_REQUEST['category'];
$en_title =$_REQUEST['en_title'];
$en_option1 =$_REQUEST['en_option1'];
$en_option2 =$_REQUEST['en_option2'];
$en_option3 =$_REQUEST['en_option3'];
$en_option4 =$_REQUEST['en_option4'];
$en_correct =$_REQUEST['en_correct'];
$bn_title = $_REQUEST['bn_title'];
$bn_option1 =$_REQUEST['bn_option1'];
$bn_option2 =$_REQUEST['bn_option2'];
$bn_option3 =$_REQUEST['bn_option3'];
$bn_option4 =$_REQUEST['bn_option4'];
$bn_correct =$_REQUEST['bn_correct'];



$query = "insert into data (category,en_title,en_option1,en_option2,en_option3,en_option4,en_correct,bn_title,bn_option1,bn_option2,bn_option3,bn_option4,bn_correct,answered,correctly_answered) values 
   ('$category','$en_title','$en_option1','$en_option2','$en_option3','$en_option4','$en_correct','$bn_title','$bn_option1','$bn_option2','$bn_option3','$bn_option4','$bn_correct',0,0)";

    $result = mysqli_query($conn, $query);
        if ($result) {

            echo "Successfully inserted record with title ". $en_title."\n";
        }







?>

<html>
<head>
</head>

<body>
<div id="center_button">
    <button onclick="location.href='input.php'">Add New Record</button>
</div>
</body>
</html>