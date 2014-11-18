<?php
/**
 *array_chunk  - 将一个数组分割成多个
 *
 */

$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array, 3));
print_r(array_chunk($input_array, 2, true));
$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(u_array_chunk($input_array, 2,true));

/*
 bool $preserve_keys
*/
function u_array_chunk($input_array, $size, $preserve=false) {
	$res = array();
	
	//数组取得长度
	$len = count($input_array); 	//计算长度
	$len = number_format($len,1);	//格式化为1.0格式计算
	$size = number_format($size,1);
	$k = ceil($len/$size);			//进一 
	for($j=0,$s=0; $j<$k;$j++) {
		for ($i=0;$i<$size;$i++) {
			$key = $i+$size*$j;		//计算原始数组
				$kk = $preserve ? $key : $i;
				if($key<$len) {
					$res[$j][$kk] = $input_array[$key];
				}
							
		}
	}
	return $res;
}

  
