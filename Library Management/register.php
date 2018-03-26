<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style>
       body{
		 background-image : url('https://images.unsplash.com/photo-1481627834876-b7833e8f5570?auto=format&fit=crop&w=841&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D');
		 background-repeat : no-repeat;
		 background-size : cover;
	   }
	   h2{
		 text-align: center;
		 color : blue;
		}	
		.main-box {
            background-color: #f2f2f2;
            padding: 20px;
            padding-top: 60px;
            padding-bottom: 30px;
         }
         .display{
         	display: block;
         	margin-left: 500px;
         	margin-right: 500px;
         }
		 .user-box {
            background-color: white;
            padding:  15px;
			width : 100%;
         }
        .password-box {
           background-color: white;
           padding: 15px;
           width : 100%;
         }
		 .repassword-box {
           background-color: white;
           padding: 15px;
           width : 100%;
         }
</style>
<body>
    <header>
	   <h2>Welcome to Registration Page</h2>
	</header>
	<br><br><br><br>
	<div class="box main-box display">
	    		
	 <form action="valid.php" method="post">
<!-- 		<label for = "uname">Name:</label>
		<input type = "text" name="Name"><br> -->
		<!--<label for = "username">Username</label>-->
		<input  size="20" type = "text" id="username" name="Username" placeholder="Username" style="padding: 10px;" class="box user-box " required><br><br>
		<!--<label for = "password">Password</label>-->
		<input size="20" type = "PASSWORD" name="Password" placeholder="Password" style="padding: 10px;" class="box password-box "><br><br>
		<!--<label for = "confirm password">Re-enter Password</label>-->
		<input size="20" type = "PASSWORD" name="ConfirmPassword" placeholder="Re-enter Password" style="padding: 10px;" class="box repassword-box "><br><br>
		<button class="btn btn-success btn-block">Register</button>
		<!--<input type="submit" value="Register" name="Valid">-->
	</form>
	</div>
</body>
</html>