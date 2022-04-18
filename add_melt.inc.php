<?php
session_start();
//check if they are even staff
		if (!isset($_SESSION['u_id'])) {
		header("location: login.php");
	}
// checking if they actually pressed the submit button instead of maybe coming to this url
	if(isset($_POST['submit'])) {
	$wax_scent = $_POST['scent'];
	$wax_stock = $_POST['stock'];
	
		//connect to the database and then insert the information carried over that the user inputed to the mysql database.
	include('dbh.inc.php');
				$sql2 = "INSERT INTO product_melts (name, stock) VALUES ('$wax_scent', '$wax_stock');";
				mysqli_query($conn, $sql2);
				header("Location: generic.php");
					exit();
	
//if the user isnt logged in and somehow got on this page we need to send them to the login page.
	} else {
		header("location: login.php");
	}
	
?>