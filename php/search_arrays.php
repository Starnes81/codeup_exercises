<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$query = ['Tina', 'Bob'];

foreach ($query as $temp) {
	$result = array_search($temp, $names);
	if (is_numeric($result) == FALSE) {
		echo "TRUE" . PHP_EOL;
	} else {
		echo "FALSE" . PHP_EOL;
	}

}


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

