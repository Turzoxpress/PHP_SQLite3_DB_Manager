<?php 

require_once("config.php");

$db = new SQLite3('database.db');



$results = $db->query('SELECT * FROM data');
while ($row = $results->fetchArray()) {
   
   //echo $row['id'];

   $category = $row['category'];
   $en_title = $row['en_title'];
   $en_option1 = $row['en_option1'];
   $en_option2 = $row['en_option2'];
   $en_option3 = $row['en_option3'];
   $en_option4 = $row['en_option4'];
   $en_correct = $row['en_correct'];
   $bn_title = $row['bn_title'];
   $bn_option1 = $row['bn_option1'];
   $bn_option2 = $row['bn_option2'];
   $bn_option3 = $row['bn_option3'];
   $bn_option4 = $row['bn_option4'];
   $bn_correct = $row['bn_correct'];
   $answered = $row['answered'];
   $correctly_answered = $row['correctly_answered'];

   $query1 = "insert into data (category,en_title,en_option1,en_option2,en_option3,en_option4,en_correct,bn_title,bn_option1,bn_option2,bn_option3,bn_option4,bn_correct,answered,correctly_answered) values 
   ('$category','$en_title','$en_option1','$en_option2','$en_option3','$en_option4','$en_correct','$bn_title','$bn_option1','$bn_option2','$bn_option3','$bn_option4','$bn_correct','$answered','$correctly_answered')";

    $result1 = mysqli_query($conn, $query1);
        if ($result1) {

            echo "Successfully inserted record with title ". $en_title."\n";
        }

}





?>