<?php
	$values = Array("diploma", "experience", "gradYear", "skill");
	$reqValues = Array(
		Array("CS", "CP"),
		Array(4),
		Array(2018),
		Array("PHP", "Java")
	);
	function isEligible($data) {
		$output = Array();
		for ($i = 0; $i < count($values); $i ++) {
			$v = $data["{$values[$i]}"];
			if (is_numeric($v) && $v >= $reqValues[$i]) {}
			else if (in_array($v, $reqValues[$i])) {}
			else return false;
		}
		return true;
		//$diploma = Array("CS", "CP");
		//$experience = 4;
		//$gradYear = 2018;
		//$skill = Array("PHP", "Java");	
		//if (in_array($data["diploma"], $diploma))	
	}
	function getInput() {
		$inputs = Array(
			"diploma" => "",
			"experience" => 0,
			"gradYear" => 0,
			"skill" => ""
		);
		for ($i = 0; $i < count($values); $i ++) {
			$inputs[$values[$i]] = readline("Enter your ".$values[$i]);
		}
		//$inputs["diploma"] = readline("Enter your diploma: ");
		//$inputs["experience"] = readline("Enter your years of experience: ");
		//$inputs["gradYear"] = readline("Enter your year of graduation: ");
		//$inputs["skill"] = readline("Enter your programming skill: ");
		return $inputs;
	}	
	
	if (isEligible(getInput())) {
		echo "You are eligible for the job, your interview is in one week!";
	} else echo "We are sorry, we moved on with other candidates";

