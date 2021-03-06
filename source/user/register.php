<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    
    <style>
            body {
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
                background-color: LIGHTGRAY;
            }

            .topnav {
                overflow: hidden;
                background-color: ROYALBLUE;
                border: 3px solid red;
            }

            .topnav a {
                float: left;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
                
            }

            .topnav a:hover {
                background-color: #ddd;
                color: black;
            }

            .topnav a.active {
                background-color: ROYALBLUE;
                color: white;
            }
            footer {
                position: fixed;
                left: 0;
                bottom: 0;
                right: 0;
                background-color: ROYALBLUE;
                color: ROYALBLUE;
                text-align: center;
                border: 3px solid red;

            }
        </style>
</head>
<body>
     <div class="topnav">
            <a class="active" href="#home">E11even</a>
            <a href="../About.html">About</a>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </div>
        
        <div class="mainHeader">
            <h1>E11even</h1>
            <h2>We supply and assit, you build it.</h2>
        </div>
    
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

        <div class="input-group">
			
            <label>First Name</label>
             
            <input type="text" name="firstname" value="<?php if(!empty($firstname)) echo $firstname; ?>">
            
        </div>
        
        <div class="input-group">
			<label>Last Name</label>
			<input type="text" name="lastname" value="<?php if(!empty($lastname)) echo $lastname; ?>">
		</div>
        
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
        
        <div class="input-group">
			<label>Z-Number</label>
			<input type="znumber" name="znumber" value="<?php if(!empty($znumber)) echo $znumber; ?>">
		</div>
        
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
        
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
        
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
    <footer>footer</footer>
</html>



