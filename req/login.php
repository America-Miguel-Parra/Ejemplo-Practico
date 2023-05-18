<?php 
session_start();

if (isset($_POST['uname']) &&
    isset($_POST['pass']) &&
    isset($_POST['role'])) {

	include "../DB_Connection.php";
	
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	$role = $_POST['role'];

	if (empty($uname)) {
		$em  = "Numero de control obligatorio";
		header("Location: ../index.php?error=$em");
		exit;
	}else if (empty($pass)) {
		$em  = "NIP obligatorio";
		header("Location: ../index.php?error=$em");
		exit;
	}else if (empty($role)) {
		$em  = "Ha ocurrido un error";
		header("Location: ../index.php?error=$em");
		exit;
	}else {
        
        if($role == '1'){
        	$sql = "SELECT * FROM administrador 
        	        WHERE username = ?";
        	$role = "administrador";
        }else if($role == '2'){
        	$sql = "SELECT * FROM docentes 
        	        WHERE username = ?";
        	$role = "docentes";
        }else {
        	$sql = "SELECT * FROM estudiantes 
        	        WHERE username = ?";
        	$role = "estudiantes";
        }

        $stmt = $conn->prepare($sql);
        $stmt->execute([$uname]);

        if ($stmt->rowCount() == 1) {
        	$user = $stmt->fetch();
        	$No_Control = $user['username'];
        	$NIP = $user['password'];
            if ($username === $uname) {
            	if (password_verify($pass, $password)) {
            		$_SESSION['id'] = $id;
            		$_SESSION['fname'] = $fname;
            		$_SESSION['role'] = $role;
            		
				    header("Location: ../home.php");
				    exit;
            	}else {
                    $em  = "Ha ocurrido un error";
                    header("Location: ../index.php?error=$em");
                    exit;
		        }
            }else {
                $em  = "Ha ocurrido un error";
                header("Location: ../index.php?error=$em");
                exit;
	        }
        }else {
            $em  = "Ha ocurrido un error";
            header("Location: ../index.php?error=$em");
            exit;
        }
	}


}else{
	header("Location: ../login.php");
	exit;
}