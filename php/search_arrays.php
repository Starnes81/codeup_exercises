<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$query = ['Tina', 'Bob'];




function testName($nameSearch, $temphay){
	$result = array_search($nameSearch, $temphay);
	if (is_numeric($result)) {
		return "TRUE\n";
	} else {
		return "FALSE\n";
	}

}

$answer1 = testName('Tina', $names);
$answer2 = testName('Bob', $names);

echo $answer1;
echo $answer2;

// function searchName($result, $array) {
// 	$result = array_search($query, $names);
// if ($result = false) {
//     return FALSE;

// 	}
// 	return TRUE;
// }

//  function searchCompare($arrayNames, $arrayCompare) {
//  	$searchCompare = 0;
//  	foreach ($array1 as key => $value) {
//  		$compareArray = searchName($result, $array);
//  		if ($compare) {
//  			$searchCompare++;
//  		} 
//  	}
//  	return $searchCompare;
//  }

//  $compareArray2 = searchCompare($names, $compare);
//  return "These arrays $compareArray2 names in common.\n";

