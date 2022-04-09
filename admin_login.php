<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<style>
		.card{
			width:400px;
			margin-left:auto;
			margin-right:auto;
			margin-top:100px;
			text-align:center;
			padding:30px;	
			border:4px #a517ba solid;
			border-radius:5px;	
		}
	</style>
	<body>
<header id="nav-bar">
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href=index.html  style="color: white; font-weight: 600; margin-top: 15px;">GO VOTE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="color: white;"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto animate__animated animate__bounceInDown" style="padding-right: 50px;">
        <li class="nav-item" >
          <a class="nav-link" href="index.html" style="color:white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Home</a>
        </li>
      </ul>
    </div>
  </nav>
</header>
		<section class="sec">
			<div class="card">
				<div class="row">
					<div class="col-md-12">
						<h3>Admin Login</h3>
	<?php session_start();
		if(isset($_SESSION['error'])){
			echo $_SESSION['error'];
			unset($_SESSION['error']);
			}
	?>
					<form action="process.php" method="post">
						<div class="form-group">
							<input required type="text" class="form-control" name="username" placeholder="Your Email *" value="" />
						</div>
						<div class="form-group">
							<input required type="password" class="form-control" name="password" placeholder="Your Password *" value="" />
						</div>
						<div class="form-group">
							<input required type="submit" class="btnSubmit" value="Login"/>
						</div>	
					</form>
				</div>
			</div>
		</div>
	</section>
	<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>    
		<script src="js/bootstrap.min.js"></script> 
	</body>
	</html>

