<?php
	session_start();
	// if($_SESSION['login_user']==null){
	// 	header('location:home_page.php');
	// }
?>
<html>
	<head>
		<title>
			Welcome Customer
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 127px
			}
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
			select {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 6.5px 75.5px;
			}
			h1{
				font-family: sans-serif;
				font-style: bold;
				font-size: 50pt;
				color: blue;
			}
			#title{
				display: inline;
			}
			.logo{
				float: left;
				object-fit: cover;
				height: 60px;
				padding: 5px;
			}
			.float_form{
				float: left;
			}
			.center_form{
				float: center;
			}
			body{
				/*background: url(C:/xampp/htdocs/shutterstock_1.jpg);*/
				/*background-repeat: no-repeat;*/
				/*background-size: 80px 60px;*/
				background: white;
				color: #030337;
				font-family: sans-serif;
				margin: 0px;
			}
			ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: #030337;
			}
			li{
				display: inline;
				float: left;
			}

			li a {
				display: block;
				color: white;
				text-align: center;
				padding: 14px 36px;
				text-decoration: none;
			}

			li a:hover {
				background-color: #E7E7F6;
				color: #030337;
			}

			a {
				color: #030337;
				text-decoration: none;
				padding-left: 20px;
			}
			a:hover{
				background-color: white;
				color: #030337;
			}
			h2{
				padding-left: 10px;
				font-size: 25pt;
				font-style: bold;
			}
			.heading{
				font-size:30pt;
				text-align: center;
			}
			.fix_table{
				width: 300px;
			}
			.fix_table_short{
				width: 225px;
			}
			.welcome_text{
				font-family: sans-serif;
				font-size: 30pt;
				color: orange;
				position: absolute;
			}
			.admin_func:hover{
				color: #030337;
				font-style: italic;
				text-decoration: underline
			}
			.center_submit{
				text-align: center;
			}
			h3{
				padding-left: 30px;
				font-size: 15pt;
			}
			.login_form{
				float: left;
			}
		</style>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/logo.png"/> 
		<h1 id="title">
			Indian Airways
		</h1>
		<div>
			<ul>
				<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
<li><a href="pnr.php"><i class="fa fa-desktop" aria-hidden="true"></i> Print Ticket</a></li>
				<li><a href="about.html"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="about.html"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<?php
			echo "<h2>Welcome ".$_SESSION['login_user']."</h2>";
			require_once('Database Connection file/mysqli_connect.php');
			$query = "SELECT COUNT(*), MAX(frequent_flier_no) as frequent_flier_no, SUM(mileage) as mileage 
          FROM Frequent_Flier_Details 
          WHERE customer_id=?";
		$stmt = mysqli_prepare($dbc, $query);
		mysqli_stmt_bind_param($stmt, "s", $_SESSION['login_user']);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $cnt, $frequent_flier_no, $mileage);
		mysqli_stmt_fetch($stmt);

if ($cnt == 1) {
    echo "<h4 style='padding-left: 20px;'>Frequent Flier No.: " . $frequent_flier_no . "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Mileage: " . $mileage . " points</h4><br>";
}

mysqli_stmt_close($stmt);
mysqli_close($dbc);
		?>
		<table cellpadding="5">
			<tr>
				<td class="admin_func"><a href="book_tickets.php"><i class="fa fa-plane" aria-hidden="true"></i> Book Flight Tickets</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="view_booked_tickets.php"><i class="fa fa-plane" aria-hidden="true"></i> View Booked Flight Tickets</a>
				</td>
			</tr>
<tr>
				<td class="admin_func"><a href="pnr.php"><i class="fa fa-plane" aria-hidden="true"></i> Print Booked Ticket</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="cancel_booked_tickets.php"><i class="fa fa-plane" aria-hidden="true"></i> Cancel Booked Flight Tickets</a>
				</td>
			</tr>
		</table>
		
	</body>
</html>