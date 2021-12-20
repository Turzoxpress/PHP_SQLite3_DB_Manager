<?php

 

  require_once("config.php");


  //$query = "select * from data";
  //$result = mysqli_query($conn, $query);

  /*
  $output = array("code" => "200", 
      "history_first_id" => $history_first_id, "history_total_questions" => $history_total_questions);
    echo json_encode($output, JSON_PRETTY_PRINT);
    */

    //--
  $history_first_id = getFirstID($conn, "history");
  $history_total_questions = getTotalCount($conn, "history");
  //-----------------

  //--
  $geography_first_id = getFirstID($conn, "geography");
  $geography_total_questions = getTotalCount($conn, "geography");
  //-----------------

  //--
  $science_first_id = getFirstID($conn, "science");
  $science_total_questions = getTotalCount($conn, "science");
  //-----------------

  //--
  $physics_first_id = getFirstID($conn, "physics");
  $physics_total_questions = getTotalCount($conn, "physics");
  //-----------------

  //--
  $math_first_id = getFirstID($conn, "math");
  $math_total_questions = getTotalCount($conn, "math");
  //-----------------

  //--
  $sports_first_id = getFirstID($conn, "sports");
  $sports_total_questions = getTotalCount($conn, "sports");
  //-----------------

  //--
  $economics_first_id = getFirstID($conn, "economics");;
  $economics_total_questions = getTotalCount($conn, "economics");
  //-----------------

  //--
  $gk_first_id = getFirstID($conn, "gk");
  $gk_total_questions = getTotalCount($conn, "gk");
  //-----------------

  //--
  $aptitude_first_id = getFirstID($conn, "aptitude");
  $aptitude_total_questions = getTotalCount($conn, "aptitude");
  //-----------------

  //--
  $computer_first_id = getFirstID($conn, "computer");
  $computer_total_questions = getTotalCount($conn, "computer");
  //-----------------

  $output = array("code" => 200, 
      "history_first_id" => $history_first_id, "history_total_questions" => $history_total_questions,
      "geography_first_id" => $geography_first_id, "geography_total_questions" => $geography_total_questions,
      "science_first_id" => $science_first_id, "science_total_questions" => $science_total_questions,
      "physics_first_id" => $physics_first_id, "physics_total_questions" => $physics_total_questions,
      "math_first_id" => $math_first_id, "math_total_questions" => $math_total_questions,
      "sports_first_id" => $sports_first_id, "sports_total_questions" => $sports_total_questions,
      "sports_first_id" => $sports_first_id, "sports_total_questions" => $sports_total_questions,
      "economics_first_id" => $economics_first_id, "economics_total_questions" => $economics_total_questions,
      "gk_first_id" => $gk_first_id, "gk_total_questions" => $gk_total_questions,
      "aptitude_first_id" => $aptitude_first_id, "aptitude_total_questions" => $aptitude_total_questions,
      "computer_first_id" => $computer_first_id, "computer_total_questions" => $computer_total_questions,
    );
   // echo json_encode($output, JSON_PRETTY_PRINT);


  $total_questions = $history_total_questions + $geography_total_questions + $science_total_questions + $physics_total_questions + $math_total_questions + $sports_total_questions + $economics_total_questions + $gk_total_questions + $aptitude_total_questions + $computer_total_questions;


  // closing connection
   mysqli_close($conn);

  
function getFirstID($conn, $subj){

  $query = "select * from data where category='$subj'";
  $result = mysqli_query($conn, $query);
  $id = -1;
    if (mysqli_num_rows($result) > 0) {


       //---
    while ($row = mysqli_fetch_array($result)) {

               $id = $row['id'];
               break; 
    }
  }

  return (int)$id;

}

function getTotalCount($conn, $subj){

  $query = "select * from data where category='$subj'";
  $result = mysqli_query($conn, $query);
  $count = 0;
    if (mysqli_num_rows($result) > 0) {


       //---
    while ($row = mysqli_fetch_array($result)) {

      $count++;
    }
  }

  return $count;

}


?>

<!DOCTYPE html>
<html>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.custom_button{
	  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>
<body>

  <div style="display: inline-flex; width: 100%; text-align: center; color: white; background-color: green;"> 
    <p style="margin-right: 30px;">Total Questions : <strong> <?php echo $total_questions;?></strong> || </p>
  <p style="margin-right: 20px;">History : <strong> <?php echo $history_total_questions;?></strong></p>
   <p style="margin-right: 20px;">Geography : <strong> <?php echo $geography_total_questions;?></strong></p>
   <p style="margin-right: 20px;">Science : <strong> <?php echo $science_total_questions;?></strong></p>
   <p style="margin-right: 20px;">Physics : <strong> <?php echo $physics_total_questions;?></strong></p>
   <p style="margin-right: 20px;">Math : <strong> <?php echo $math_total_questions;?></strong></p>
   <p style="margin-right: 20px;">Sports : <strong> <?php echo $sports_total_questions;?></strong></p>
   <p style="margin-right: 20px;">Economics : <strong> <?php echo $economics_total_questions;?></strong></p>
   <p style="margin-right: 20px;">General knowledge : <strong> <?php echo $gk_total_questions;?></strong></p>
   <p style="margin-right: 20px;">Aptitude Test : <strong> <?php echo $aptitude_total_questions;?></strong></p>
   <p style="margin-right: 20px;">Computer & Information Technology : <strong> <?php echo $computer_total_questions;?></strong></p>
   
  
  


     </div>

<h1>Quiz Game Question Submission Admin Panel</h1>

<div>
  <form id="myForm" action="saveToMySQL.php" autocomplete="off">

    <h2> Category </h2>
  	<label for="category">Select Category</label>
    <select id="category"  name="category">
      <option value="history">History</option>
      <option value="science">Science</option>
      <option value="geography">Geography</option>
       <option value="physics">Physics</option>
      <option value="math">Math</option>
      <option value="sports">Sports</option>
       <option value="economics">Economics</option>
      <option value="gk">General knowledge</option>
      <option value="aptitude">Aptitude Test</option>
       <option value="computer">Computer & Information Technology</option>
    </select>


    <h2> English Part </h2>
    <label for="fname">Question Title</label>
    <input type="text" name="en_title" placeholder="" required>

    <label for="fname">Option 1</label>
    <input type="text" name="en_option1" placeholder="" required>
    <label for="fname">Option 2</label>
    <input type="text" name="en_option2" placeholder="" required>

    <label for="fname">Option 3</label>
    <input type="text" name="en_option3" placeholder="" required>

    <label for="fname">Option 4</label>
    <input type="text" name="en_option4" placeholder="" required>

    <label for="fname">Correct Answer - English</label>
    <input type="text" name="en_correct" placeholder="" required>

     <h2> Bangla ANSI Part </h2>

    <label for="fname">Question Title  - Bangali ANSI</label>
    <input type="text" name="bn_title" placeholder="" required>

    <label for="fname">Option 1  - Bangali ANSI</label>
    <input type="text" name="bn_option1" placeholder="" required>

    <label for="fname">Option 2  - Bangali ANSI</label>
    <input type="text" name="bn_option2" placeholder="" required>

    <label for="fname">Option 3  - Bangali ANSI</label>
    <input type="text" name="bn_option3" placeholder="" required>

    <label for="fname">Option 4  - Bangali ANSI</label>
    <input type="text" name="bn_option4" placeholder="" required>

    <label for="fname">Correct Answer - Bangali ANSI</label>
    <input type="text" name="bn_correct" placeholder="" required>

   

    
  
        <button class="custom_button" onclick="CheckPointBeforeSubmit()">Submit</button>

  </form>
</div>

</body>

<script type="text/javascript">


    LoadData();
	function LoadData(){

		var category = getCookie("category");
		console.log(category);

   
		if(category == null || category == ""){


		}else{

          document.getElementById("category").value = category;
		}
    
	}
	

	function CheckPointBeforeSubmit(){

      var category = document.getElementById("category").value;
      setCookie("category", category, 30);

		if(document.getElementById("en_title").value == "" || document.getElementById("en_option1").value == "" 
			 || document.getElementById("en_option2").value == ""  || document.getElementById("en_option3").value == "" 
			  || document.getElementById("en_option4").value == ""  || document.getElementById("en_correct").value == "" 
			   || document.getElementById("bn_title").value == ""  || document.getElementById("bn_option1").value == "" 
			    || document.getElementById("bn_option2").value == ""  || document.getElementById("bn_option3").value == "" 
			     || document.getElementById("bn_option4").value == "" || document.getElementById("bn_correct").value == "" ){

			alert("Fill all fields firts!");
		}else{

		

		

		document.getElementById("myForm").submit();

		}

		

		
	}


	
	function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
</script>
</html>


