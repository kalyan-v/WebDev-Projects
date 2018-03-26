
<!DOCTYPE html>
<html>
<head>
	<title>Database Project </title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
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
         #login{
         	text-align: center;
         }
         button{
         	margin: 0 auto;
         }
         p{
         	font-size: 15px;
         	text-align: center;
            
         }
		 body{
			 background-image : url('https://images.unsplash.com/photo-1481627834876-b7833e8f5570?auto=format&fit=crop&w=841&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D');
			 background-repeat : no-repeat;
			 background-size : cover;
		 }
	</style>
</head>
<body>
    <header>
    	<h2>Welcome to Library Management System</h2>
    </header>
    <br><br><br><br>
    <div class="box main-box display">
        <form method="post" action="login.php">
             <input type="text" id="username" name="Username" placeholder="Username" class="box user-box "  required><br><br>
             <input type="password" id="password" name="Password" placeholder="Password" class="box password-box " required><br><br>
             <div id="login">
                 <button class="btn btn-success btn-block">Login</button>
             </div> 
			 <p style="font-size:10px;">Invalid Username or Password</p>
             <br>
        </form>
		<form method="post" action="register.php">
		    <div id="login">
                 <button class="btn btn-danger btn-block">Register</button>
			</div>
		</form>
    </div>
</body>
</html>