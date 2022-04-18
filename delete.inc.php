<?php 
//checking to see if the user is logged in
session_start();
	if (!isset($_SESSION['u_id'])) {
		header("location:login.php");
	}
	// getting the name of the candle from the other page through post
if(isset($_POST['candle_name'])){
	
	//connecting to the database and then setting the posted name to a variable
	//then we are deleting the candle from the database by the name we have as the variable
	//we are then sending the user back to the product page.
	include_once 'dbh.inc.php';
	$candle = $_POST['candle_name'];
			$sql6 = "DELETE from product_candles WHERE name='$candle' ";
			mysqli_query($conn, $sql6);
				header("Location: generic.php");
				exit();
}
	?>