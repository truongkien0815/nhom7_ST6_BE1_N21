


	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign Up</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
			<form action="dangky.php" method="post">
				
			<label for="">ID</label>
						<input type="number" name="id" id="">
					
					<br>
					<label for="">Name</label>
						<input type="text" name="name1" id="">
						
					<br>
				<label for="">Password</label>
						<input type="password" name="pass" id="">
					
				
				<br>
				<label for="">role_ID</label>
						<input type="number" name="role" id="">
					
				
					
					<div class="form-group">
					<input type="submit" name="submit" value="Sign Up">
					
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
				
				</div>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>