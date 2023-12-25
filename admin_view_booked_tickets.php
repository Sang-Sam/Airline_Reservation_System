		<?php
			session_start();
		?>
		<html>
			<head>
				<title>
					View Booked Tickets
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
						margin: 0% 15.8%
					}
					input[type=date] {
						border: 1.5px solid #030337;
						border-radius: 4px;
						padding: 5.5px 44.5px;
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
				<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<form action="admin_view_booked_tickets_form_handler.php" method="post">
			<h2>VIEW LIST OF BOOKED TICKETS FOR A FLIGHT</h2>
			<div>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Flight No.</td>
					<td class="fix_table">Enter the Departure Date</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="flight_no" required></td>
					<td class="fix_table"><input type="date" name="departure_date" required></td>
				</tr>
			</table>
			<br>
			<br>
			<input type="submit" value="Submit" name="Submit">
			</div>
		</form>
	</body>
</html>