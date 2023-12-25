<html>
	<head>
		<title>
			Create New User Account
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
    			margin: 0px 135px
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
				display: flex;
				align-items: center;
			}
			.p {
				border: black solid 2px;
				border-radius: 20px;
			}
			th, td {
            padding: 10px;
			}
			
		</style>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/logo.png" height="60px"/> 
		<h1 id="title">
			Indian Airways		</h1>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i> Book Tickets</a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
			</ul>
		</div>
		<br>
		<center><table class="p">
					<thead>
						<tr>
							<th colspan="2"><u>CREATE NEW USER ACCOUNT</u></th>
						</tr>
						<br>
					</thead>
					<tbody>
						<tr>
							<td colspan="2">
								<form action="new_user_form_handler.php" method="POST" id="new_user_form">
									<table cellpadding='10'>
										<thead>
											<br>
											<tr>
												<th colspan="2">ENTER LOGIN DETAILS</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Enter a valid username</td>
												<td><input type="text" name="username" required></td>
											</tr>
											<tr>
												<td>Enter your desired password</td>
												<td><input type="password" name="password" required></td>
											</tr>
											<tr>
												<td>Enter your email ID</td>
												<td><input type="text" name="email" required></td>
											</tr>
										</tbody>
									</table>
									<table cellpadding='10'>
										<thead>
											<br>
											<tr>
												<th colspan="2">ENTER CUSTOMER'S PERSONAL DETAILS</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Enter your name</td>
												<td><input type="text" name="name" required></td>
											</tr>
											<tr>
												<td>Enter your phone no.</td>
												<td><input type="text" name="phone_no" required></td>
											</tr>
											<tr>
												<td>Enter your address</td>
												<td><input type="text" name="address" required></td>
											</tr>
										</tbody>
									</table>
									<input type="submit" value="Submit" name="Submit">
								</form>
							</td>
						</tr>
					</tbody>
				</table>
				</center>
	</body>
</html>