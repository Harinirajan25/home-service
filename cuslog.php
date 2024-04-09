<?php 
session_start(); 
include "scripts/DB.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: customer_log.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: customer_log.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        //$pass = md5($pass);
        

        		
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "servicesss";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);
        
		$sql = "SELECT * FROM clients WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username'] = $uname;
            	$_SESSION['name'] = $row['name'];
               // echo $row['username'];
            	//$_SESSION['id'] = $row['id'];
            	//
                
               echo "<pre>";
print_r($_SESSION); header("Location: home.php");
            echo $uname,$pass;
		        exit();
            }else{
				header("Location: customer_log.php?error=Incorect User name or password");
                echo "Incorect User name or password";
		        exit();
			}
		}else{
			header("Location: customer_log.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: logind.php");
	exit();
}