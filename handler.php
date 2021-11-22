<?php 

/*
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('database.db');
    }
}

$db = new MyDB();

//$db->exec('CREATE TABLE foo (bar STRING)');
$db->exec("INSERT INTO data ('category','en_title','en_option1','en_option2','en_option3','en_option4','en_correct','bn_title','bn_option1','bn_option2','bn_option3','bn_option4','bn_correct','answered','correctly_answered') 
    VALUES ('This','This','This','This','This','This','This','This','This','This','This','This','This',0,0)");

$result = $db->query('SELECT* FROM data');
var_dump($result->fetchArray());
*/


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

class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('database.db');
    }
}

$db = new MyDB();

//$db->exec('CREATE TABLE foo (bar STRING)');
$db->exec("INSERT INTO data ('category','en_title','en_option1','en_option2','en_option3','en_option4','en_correct','bn_title','bn_option1','bn_option2','bn_option3','bn_option4','bn_correct','answered','correctly_answered') 
    VALUES ('$category','$en_title','$en_option1','$en_option2','$en_option3','$en_option4','$en_correct','$bn_title','$bn_option1','$bn_option2','$bn_option3','$bn_option4','$bn_correct',0,0)");

//$result = $db->query('SELECT* FROM data');
//var_dump($result->fetchArray());

//$db->close();
echo "Record inserted successfully!";
$db->close();
unset($db);






?>

<html>
<head>
</head>

<body>
<div id="center_button">
    <button onclick="location.href='input.html'">Add New Record</button>
</div>
</body>
</html>
