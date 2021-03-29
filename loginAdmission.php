<?php 
    session_start();
    if(isset($_SESSION['username']))
    {
      header("location: formAdmission.php");
    }
    else
    {
?> 

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="theme-color" content="#D73C2C">
    <link rel="shortcut icon" href="img/epain12.png" type="image/x-icon">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login Admission | E-Pain</title>
        <link rel="stylesheet" href="css\buttonCustom.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-4.1.3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/fontawesome-free-5.4.2-web/css/all.min.css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="css\loader.css">
        <link rel="stylesheet" href="css\loading.css">
        <link rel="stylesheet" href="css\loading-btn.css">
		
	</head>
	<!-- <body> -->
	<body onload="myFunction()" style="font-family: 'Montserrat', sans-serif; margin:0; background-color: #E0E0E0; background-image: url('img/bg3.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover; " >
	 <div  >
	 
	 
		<div class="container" style="margin-top:8%;">
			<!-- <div id="loader"></div> -->
	     	<div class="animate-bottom">
			<div class="d-flex justify-content-center h-100">
				<div class="card">
					<div class="card-header">
						<center><img src="img/epain12.png" alt=""></center>
						<!-- <center><h3>E-Pain Admission</h3></center> -->
					</div>
					<div class="card-body">
						<form action="cek-login.php" method="post">
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" class="form-control" placeholder="Username" id="username" name="username" required>
							</div>
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
							</div><br>
							<div class="form-group">
                                <!-- <input type="submit" value="Login" class="btn float-right login_btn"> -->
                                <!-- <input type="submit" value="Login" class="btn float-right login_btn"> -->
                                <button type="submit" class="btn btn-primary btn-block button1" name="login">LOGIN</button>
                                <!-- <a href=""><button type="submit" class="tombol">LOGIN</button></a> -->
                                <!-- <a href="index.php"><button class="tombol">KEMBALI</button></a> -->
                                
                            
							</div>
						</form>
					</div>
					<div class="card-footer">
						<div class="d-flex justify-content-center">
							
						</div>
					</div>
				</div>
			</div>
        </div>
        
    </div>
	
    <footer>
        <!-- <button class="btn btn-primary btn-lg" ><a href="index.php">KELUAR</a></button> -->
    </footer>
	<script src="css/sweetalert2.min.js"></script>
	<script>
	var myVar;

	function myFunction() {
	  myVar = setTimeout(showPage, 1000);
	}

	function showPage() {
	  document.getElementById("loader").style.display = "none";
	  document.getElementById("myDiv").style.display = "block";
	}
	</script>
	<script type="text/javascript">
		function swalClick(){
		Swal.fire(
		  'Good job!',
		  'You clicked the button!',
		  'success'
		)}
	</script>
	</body>
</html>
<?php      
    }
?>
