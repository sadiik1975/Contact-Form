<?php

session_start();

require_once 'libs/phpmailer/PHPMailerAutoload.php';

$errors = [];

if(isset($_POST['name'], $_POST['email'], $_POST['message'])) {
   
     $fields = [
	    'name' => $_POST['name'],
		'email' => $_POST['email'],
		'message' => $_POST['message']
	 ];
	 
	 foreach($fields as $field  => $data) {
		 if(empty($data)) {
		     $errors[] = 'The'.$field. ' field is required.';
	 }
	
}

echo '<pre>', print_r($errors), '</pre>';
die();
	
}else {
 $errors[] = 'Something went wrong.';
	}
  
  