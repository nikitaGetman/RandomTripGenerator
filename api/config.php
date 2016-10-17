<?php

$whitelist = array(
	'cities' => array('id','name','country','coord_x','coord_y','description')
);

$error_list = array(
	0 => "Incorrect method name",
	1 => "Internal error",
	2 => "Incorrect request"
);

$modules_whitelist = array(
	'random' => array('get')
);

$parameters = array(
	'country' => array('Russia', 'France', 'Rome', 'Italy', 'Spain', 'Switzerland', 'Sweden'),
	'travel_type' => array('walking tours', 'shopping tour', )
);


define("DB_HOST", "127.0.0.1:3306");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "hackaton");
define("DB_CHARSET", "utf8");

define('SITE_NAME', "Ideas");
define("MAIN_URL", "http://ideas.com");
define("EMAIL_ADRESS", "ideas.com");

define("SEARCH_LIMIT", 1);

?>