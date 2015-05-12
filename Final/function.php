<?php

function register($username,$password) {
	$content = file_get_contents('database.txt');
	$users = json_decode($content,true);

	if (is_array($users)) {
		foreach ($users as $key => $value) {
			if ($value['username'] == $username) {
				return 'duplicate';
			}
		}
	}
	
	$temp = array();
	$temp['username'] = $username;
	$temp['password'] = $password;
	
	$users[] = $temp;
	file_put_contents('database.txt',json_encode($users));
	return 'ok';
}



function login($username,$password) {
	$content = file_get_contents('database.txt');
	$users = json_decode($content,true);
	
	if (is_array($users)) {
		foreach ($users as $key => $value) {
			if ($value['username'] == $username && $value['password'] == $password) {
				return 'ok';
			}
		}
	}
	
	return 'no';
}

?>