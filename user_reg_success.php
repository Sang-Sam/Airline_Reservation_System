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
				float: left;
            }
		</style>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/logo.png" height="60px"/> 
		<h1 id="title">
			Indian Airways
		</h1>
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
		<h3>New user successfully registered! Login into your account to book tickets.</h3>
	</body>
</html>