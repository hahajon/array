<?php
/**
 *array_change_key_case
 *
 */
$input_array = array("FirSt" => 1, "SecOnd" => 4);
print_r(array_change_key_case($input_array, CASE_UPPER));
print_r(u_array_change_key_case($input_array, CASE_UPPER));

function u_array_change_key_case(array $input, $case= CASE_UPPER) {
	if(is_array($input)) {
		trigger_error('input is not array!', E_USER_ERROR);
		exit;
	}
	

	switch ($case) {
	case CASE_UPPER:
		foreach($input as $k=>$v) {
			$K = strtoupper($k);
			$input[$K] = $input[$k];
			unset($input[$k]);
		}
		return $input;
		break;
	case CASE_LOWER:
		foreach($input as $k=>$v) {
			$K = strtolower($k);
			$input[$K] = $input[$k];
			unset($input[$k]);
		}
		return $input;
		break;
	default:
	trigger_error('Case is not valid, CASE_LOWER or CASE_UPPER only', E_USER_ERROR);
	
	return false;
		
	}

}



