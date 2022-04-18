<!DOCTYPE HTML>

<?php
	session_start();
?>
<?php
	if (!isset($_SESSION['u_id'])) {
		header("location: login.php");
	}
	?>
<html>
	<head>
		<title>Cale's Candles</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
                <style>
		body {
  			background-color: #e5fffd;
			}
</style>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.html" class="logo">
									<span class="symbol"><img src="images/cales_candle.jpg" alt="" /></span><span class="title">Cale's Candles</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="generic.php">Product List</a></li>
                            <li><a href="purchase.html">Purchase</a></li>
                            <li><a href="admin_remove.php">Remove Product</a></li>
                            <li><a href="admin.php">Add Candle/Wax Melts</a></li>
							<li><a href="admin_edit.php">Edit Candle/Melts</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
						</div>
                        <section>
									<h2>Remove Candle Product</h2>	
                                    <?php
			$conn = mysqli_connect("","","","");
			// Check connection
			if (mysqli_connect_errno())
			{
			echo "Failed to connect to Database" . mysqli_connect_error();
			}
			
			$result = mysqli_query($conn,"SELECT id, name, stock FROM product_candles");
			
			echo "<table border='1' id='tableID'>
			<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Stock</th>
			<th>Delete</th>
			</tr>";

			while($row = mysqli_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>" . $row['id'] . "</td>";
			echo "<td>" . $row['name'] . "</td>";
			echo "<td>" . $row['stock'] . "</td>";
			echo "<td><form action='delete.inc.php' method='POST'><button type='submit' name='candle_name' value='". $row['name'] ."'>Delete</button></form></td>";
			echo "</tr>";
			}
			echo "</table>";
			
			
			mysqli_close($conn);
			?>
            
            									<h2>Remove Wax Melt Product</h2>	
                                    <?php
			$conn = mysqli_connect("","","","");
			// Check connection
			if (mysqli_connect_errno())
			{
			echo "Failed to connect to Database" . mysqli_connect_error();
			}
			
			$result = mysqli_query($conn,"SELECT id, name, stock FROM product_melts");
			
			echo "<table border='1' id='tableID'>
			<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Stock</th>
			<th>Delete</th>
			</tr>";

			while($row = mysqli_fetch_array($result))
			{
			echo "<tr>";
			echo "<td>" . $row['id'] . "</td>";
			echo "<td>" . $row['name'] . "</td>";
			echo "<td>" . $row['stock'] . "</td>";
			echo "<td><form action='delete_melt.inc.php' method='POST'><button type='submit' name='melt_name' value='". $row['name'] ."'>Delete</button></form></td>";
			echo "</tr>";
			}
			echo "</table>";
			
			
			mysqli_close($conn);
			?>				

									</div>
								</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="https://www.facebook.com/groups/665359960530673/" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Cale's Candles. All rights reserved</li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>