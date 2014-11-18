<?php
/**
*array_combine -- 创建一个数组，用一个数组的值作为其键名，另一个数组的值作为其值 
*date:20141114
*/

$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
print_r($c);

$s = u_array_combine($a, $b);
print_r($s);

function u_array_combine(array $key, array $value) {
	//做数组验证
	$res = array();
	$len = count($key);
	for($i=0; $i<$len; $i++) {
		$res[$key[$i]]=$value[$i];
	}
	return $res;
}