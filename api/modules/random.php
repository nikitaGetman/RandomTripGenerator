<?
/*
	Method: getConfig
*/
function get(){
	global $parameters;

	$country = '';
	$cost = '';
	$travel_type = '';
	
	$params = array();

	$country 	 = validate_form($_POST['param_country']);
	$cost 	 	 = validate_form($_POST['max_cost']);
	$travel_type = validate_form($_POST['travel_type']);

	if($country){
		if(in_array($country, $parameters['country'])) $params['country'] = $country;
	}
	if($cost){

	}
	if($travel_type){

	}


		// Get amount
	$all = pdo_query('SELECT_COUNT', 'cities', '*', $params);
	$all = $all[0]['COUNT(*)'];	
	print_r($all);

	$city_id = rand(1, $all);

	$res = pdo_query('SELECT', 'cities', '*', array('id'=>$city_id));
	$res = $res[0];

	// if 

	//print_r($res);

	return array('result' => $res);
}
	
?>