<?php
$handle = fopen("php://stdin", "r");

$arr = array();

for ($i = 0; $i < 6; $i++) {

	fscanf($handle, "%[^\n]", $arr_temp);
	$arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

}//for

$sum = array();
$h=0;
for ($i = 0; $i < 4; $i++) {
	for ($j = 0; $j < 4; $j++) {

		$sum[$h] = $arr[$i][$j] + $arr[$i][$j+1] + $arr[$i][$j+2]
				+ $arr[$i+1][$j+1] 
			+ $arr[$i+2][$j] + $arr[$i+2][$j+1]	+ $arr[$i+2][$j+2];
		$h++;
	}

}//for


sort($sum);
echo $sum[15];


?>