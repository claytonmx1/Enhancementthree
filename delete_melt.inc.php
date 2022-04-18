<?php 
//checking if the user is logged in.
session_start();
	if (!isset($_SESSION['u_id'])) {
		header("location:login.php");
	}
	//checking the name of the wax melt that is carried over from the other page and posted here 
if(isset($_POST['melt_name'])){
	
	// deleting the wax melt from the database, finding it by name. then sending te user back to the product page.
	include_once 'dbh.inc.php';
	$wax_melt = $_POST['melt_name'];
			$sql6 = "DELETE from product_melts WHERE name='$wax_melt' ";
			mysqli_query($conn, $sql6);
				header("Location: generic.php");
				exit();
}
	?>