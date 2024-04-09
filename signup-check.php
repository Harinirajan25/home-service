<?php 
session_start(); 
include "scripts/DB.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$email=validate($_POST['email']);
	$gender=validate($_POST['gender']);
	$address=validate($_POST['address']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;
	


	if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
       // $pass = md5($pass);
		
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "servicess";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);


	    $sql = "SELECT * FROM clients WHERE username='$uname' ";
		$result = mysqli_query($conn, $sql);
       
		if (mysqli_num_rows($result) ) {
			header("Location: signup.php?error=The username is already used!&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO clients (username, password, name, gender, address, email) VALUES('$uname', '$pass', '$name','$gender','$address','$email')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
			
    
    	 header("Location: signup.php?success=Your account has been created successfully!");
		   echo 'Your account has been created successfully';
			 
    

			 
			 
       
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}