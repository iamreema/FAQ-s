<?php
$array = [10,80,34,20,90,-13,43,-91,43,-12];
echo 'Unsorted array: '.implode(',', $array);
echo '<br>';
$temp = 0;
function findThirdLargest($array) {
	$swapped = false;
	for($i = 0; $i<=count($array)-1; $i++) {
		if(array_key_exists($i+1, $array)) {			
			if($array[$i] > $array[$i+1]) {
				$temp = $array[$i];
				$array[$i] = $array[$i+1];
				$array[$i+1] = $temp;
				$swapped = true;
			}
		}
	}
	if($swapped == true) {
		return findThirdLargest($array);
	} else {
		echo 'Sorted';
		return $array;
	}
}

$newArray = findThirdLargest($array);
echo 'Sorted array: '.implode(',', $newArray);
echo '<br>';
echo 'Third largest number is '.$newArray[2];
echo '<br>';
?>