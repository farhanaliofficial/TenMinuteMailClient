<?php
// Coded by Farhan Ali
// i.farhanali.dev@gmail.com
// simple http get function
function http_get($url){
	$opts = [
		"http" => [
			"method" => "GET",
			"header" => "Accept: application/json, text/javascript, */*; q=0.01\r\n".
						"X-Requested-With: XMLHttpRequestXMLHttpRequest\r\n"
		]
	];
	$ctx = stream_context_create($opts);
	return file_get_contents($url, false, $ctx);
}

// generate random string as session id
function generate_session_id(){
	$id = "";

	/*
	generate number between 0, 1
	if get 0 => then generate random number between 97, 122 (a, z)
	if get 1 => then generate random number between 48, 57 (0, 9)

	then convert it into char using chr() and append it to variable
	
	*/
	for($i=0; $i<26; $i++)
		$id .= mt_rand(0, 1) ? chr(mt_rand(97, 122)) : chr(mt_rand(48, 57));
	
	return $id;
}

// generate a timestamp
function generate_timestamp(){
	return round(microtime(true) * 1000);
}
