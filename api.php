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

			$output = array("code" => "200",
				"id" => $row['en_title'],
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

	$query = "select * from data where id=".$position." AND category='$category'";
	$result = mysqli_query($conn, $query);

	$count = 0;
	if (mysqli_num_rows($result) > 0) {


		while ($row = mysqli_fetch_array($result)) {

           //echo $row['en_title'];

			$output = array("code" => "200",
				"id" => $row['en_title'],
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

function getQuestionDetails(){

	require_once("config.php");


	$query = "select * from data";
	$result = mysqli_query($conn, $query);

    //--
	$history_first_id = 0;
	$history_total_questions = 0;
	//-----------------

	    //--
	$geography_first_id = 0;
	$geography_total_questions = 0;
	//-----------------

	    //--
	$science_first_id = 0;
	$science_total_questions = 0;
	//-----------------

	    //--
	$physics_first_id = 0;
	$physics_total_questions = 0;
	//-----------------

	    //--
	$math_first_id = 0;
	$math_total_questions = 0;
	//-----------------

	    //--
	$sports_first_id = 0;
	$sports_total_questions = 0;
	//-----------------

	    //--
	$economics_first_id = 0;
	$economics_total_questions = 0;
	//-----------------

	    //--
	$gk_first_id = 0;
	$gk_total_questions = 0;
	//-----------------

	    //--
	$aptitude_first_id = 0;
	$aptitude_total_questions = 0;
	//-----------------

	    //--
	$computer_first_id = 0;
	$computer_total_questions = 0;
	//-----------------

	$count = 0;
	if (mysqli_num_rows($result) > 0) {


       //---
		while ($row = mysqli_fetch_array($result)) {

			if($row['category'] == "history"){

				$history_first_id = $row['id'];
				break;
			}

		}
		//-----------------

		//---
		while ($row = mysqli_fetch_array($result)) {

			if($row['category'] == "geography"){

				$geography_first_id = $row['id'];
				break;
			}

		}
		//-----------------

		//---
		while ($row = mysqli_fetch_array($result)) {

			if($row['category'] == "science"){

				$science_first_id = $row['id'];
				break;
			}

		}
		//-----------------

		//---
		while ($row = mysqli_fetch_array($result)) {

			if($row['category'] == "physics"){

				$physics_first_id = $row['id'];
				break;
			}

		}
		//-----------------

		//---
		while ($row = mysqli_fetch_array($result)) {

			if($row['category'] == "math"){

				$math_first_id = $row['id'];
				break;
			}

		}
		//-----------------

		//---
		while ($row = mysqli_fetch_array($result)) {

			if($row['category'] == "sports"){

				$sports_first_id = $row['id'];
				break;
			}

		}
		//-----------------

		//---
		while ($row = mysqli_fetch_array($result)) {

			if($row['category'] == "economics"){

				$economics_first_id = $row['id'];
				break;
			}

		}
		//-----------------

		//---
		while ($row = mysqli_fetch_array($result)) {

			if($row['category'] == "gk"){

				$gk_first_id = $row['id'];
				break;
			}

		}
		//-----------------

		//---
		while ($row = mysqli_fetch_array($result)) {

			if($row['category'] == "aptitude"){

				$aptitude_first_id = $row['id'];
				break;
			}

		}
		//-----------------
				//---
		while ($row = mysqli_fetch_array($result)) {

			if($row['category'] == "computer"){

				$computer_first_id = $row['id'];
				break;
			}

		}
		//-----------------

		//-----------------------------------------------------------------------
		while ($row = mysqli_fetch_array($result)) {

			if($row['category'] == "history"){

				$history_total_questions++;
				
			}
			/*
			else if($row['category'] == "geography"){

				$geography_total_questions++;
				
			}
			else if($row['category'] == "science"){

				$science_total_questions++;
				
			}
			else if($row['category'] == "physics"){

				$physics_total_questions++;
				
			}
			else if($row['category'] == "math"){

				$math_total_questions++;
				
			}
			else if($row['category'] == "sports"){

				$sports_total_questions++;
				
			}
			else if($row['category'] == "economics"){

				$economics_total_questions++;
				
			}
			else if($row['category'] == "gk"){

				$gk_total_questions++;
				
			}
			else if($row['category'] == "aptitude"){

				$aptitude_total_questions++;
				
			}
			else if($row['category'] == "computer"){

				$computer_total_questions++;
				
			}
			*/

		}

		//-----------------



		$output = array("code" => "200", 
			"history_first_id" => $history_first_id, "history_total_questions" => $history_total_questions);
		echo json_encode($output, JSON_PRETTY_PRINT);


	}else{
		$output = array("code" => "201", "msg" => $conn->error);
		echo json_encode($output, JSON_PRETTY_PRINT);
	}
}

?>