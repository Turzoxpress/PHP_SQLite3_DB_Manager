<?php

header('Content-Type: application/json');
//--

if (isset($_GET["p"])) {

	if ($_GET["p"] == "random") {

		random();

	} else if ($_GET["p"] == "custom") {

		custom();
	} else if ($_GET["p"] == "getQuestionDetails") {

		getQuestionDetails();
	} 
	else if ($_GET["p"] == "checkServer") {

		checkServer();
	} 
	


} else {

	echo "Not Found";

}


//-------------



function random(){

	require_once("config.php");
	$position = $_GET["n"];

	$query = "select * from data where id=".$position;
	$result = mysqli_query($conn, $query);

	$count = 0;
	if (mysqli_num_rows($result) > 0) {


		while ($row = mysqli_fetch_array($result)) {

           //echo $row['en_title'];

			$output = array("code" => 200,
				"id" => (int)$row['id'],
				"category" => $row['category'],
				"en_title" => $row['en_title'],
				"en_option1" => $row['en_option1'],
				"en_option2" => $row['en_option2'],
				"en_option3" => $row['en_option3'],
				"en_option4" => $row['en_option4'],
				"en_correct" => $row['en_correct'],
				"bn_title" => $row['bn_title'],
				"bn_option1" => $row['bn_option1'],
				"bn_option2" => $row['bn_option2'],
				"bn_option3" => $row['bn_option3'],
				"bn_option4" => $row['bn_option4'],
				"bn_correct" => $row['bn_correct'],
				"answered" => $row['answered'],
				"correctly_answered" => $row['correctly_answered']

			);

			echo json_encode($output, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);


		}
	}else{

		$output = array("code" => "201", "msg" => $conn->error);
		echo json_encode($output, JSON_PRETTY_PRINT);
	}

   // echo $position;
}


function custom(){

	require_once("config.php");
	$position = $_GET["n"];
	$category = $_GET["c"];

	$query = "select * from data where id > ".$position." AND category='$category'";
	$result = mysqli_query($conn, $query);

	$count = 0;
	if (mysqli_num_rows($result) > 0) {


		while ($row = mysqli_fetch_array($result)) {

           //echo $row['en_title'];

			$output = array("code" => 200,
				"id" => (int)$row['id'],
				"category" => $row['category'],
				"en_title" => $row['en_title'],
				"en_option1" => $row['en_option1'],
				"en_option2" => $row['en_option2'],
				"en_option3" => $row['en_option3'],
				"en_option4" => $row['en_option4'],
				"en_correct" => $row['en_correct'],
				"bn_title" => convertText($row['bn_title']),
				"bn_option1" => convertText($row['bn_option1']),
				"bn_option2" => convertText($row['bn_option2']),
				"bn_option3" => convertText($row['bn_option3']),
				"bn_option4" => convertText($row['bn_option4']),
				"bn_correct" => convertText($row['bn_correct']),
				"answered" => $row['answered'],
				"correctly_answered" => $row['correctly_answered']

			);

			echo json_encode($output, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);

			break;


		}
	}else{

		$output = array("code" => 201, "msg" => $conn->error);
		echo json_encode($output, JSON_PRETTY_PRINT);
	}

   // echo $position;
}

function getQuestionDetails(){

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
		echo json_encode($output, JSON_PRETTY_PRINT);

	


}

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

function checkServer(){

	$output = array("code" => 200, 
			"msg" => "Server is working perfectly!"
		);
		echo json_encode($output, JSON_PRETTY_PRINT);
	}


function convertText($original){

require_once("Unicode2Bijoy.php");
$temp = mirazmac\Unicode2Bijoy::convert($original);
return $temp;

}

?>