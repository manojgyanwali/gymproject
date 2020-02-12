<?php 
include('../dbcon.php');

?>



<!DOCTYPE html>
<html Lang="ën">
<head>
     <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width,initial-scale=1.0">
	 <meta http-equiv="X-UA-Compatible" content="ie=edge">
	 <link rel="stylesheet" href="css/bootstrap.min.css">
	 <link rel="stylesheet" href="style.css">
	  <link rel="stylesheet" href="fontawesome/all.min.css">
	 
	 <title>ROYAL GYM</title>
</head>
<body style="background-color:#b5b71c;" >
		<div class="wrapper">
		
			<header class="backimage" id="home" style="height:100vh;">
				<nav class="navbar navbar-expand-sm  navbar-dark ">
					
					
					<a href="index.html" class="navbar-brand">ROYAL IRONS GYM</a>
				
					<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#icons">
					<span class="navbar-toggler-icon"></span>
					</button>
					
					<div class=" collapse navbar-collapse nav " id="icons" >
						<ul class="  navbar-nav ml-auto">
						
							<li class="nav-item"><a href="#home" class="nav-link">HOME</a></li>
							<li class="nav-item"><a href="#features" class="nav-link">FEATURES</a></li>
							<li class="nav-item"><a href="#gallery" class="nav-link">GALLERY</a></li>
							<li class="nav-item"><a href="#footer" class="nav-link">ABOUT US</a></li>
							<li class="nav-item"><a href="#footer" class="nav-link">admin</a></li>
							
					
						</ul>
				
					</div>
				

				
				</nav>
				<div id="slides" class="carousel slide" data-ride="carousel">
					
						
						<a class="carousel-control-next" style="margin-top:300px; margin-right:200px;" href="#slides" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
						
					 <div class="carousel-inner">
						<div class="carousel-item active">
							<h1>ROYAL IRONS GYM</h1>
						</div>
						<div class="carousel-item ">
							<h1>Fitness For Health Resolution</h1>
						</div>
						<div class="carousel-item">
							<h1 >Fitness For Health Resolution</h1>
						</div>
					</div>
				</div>
										
				
				
				
				
				
			</header >
	


			
			

			<section class=" container-fluid jumbotron "  id="features" style="min-height:100vh">
			<h2 style="text-align:center;">features</h2>
				
				<div class="conainer  " >
					<div class="row bg-primary  ">
						<div class="col-lg-5 col-md-6">
						
								<h3 class="ml-5 our_features">OUR FEATURES :</h3>
								<div class=" features mt-4 ml-5">
									<p >Strength training</p>
									<p>Cardio vascular training</p>
									<p>Personal training</p>
									<p>Diet plans</p>
									<p>Friendly staffs</p>
									<p>Fat loss programs</p>
									<p>Several payment packages</p>
								</div>
							
						</div>
						
						<div class="col-lg-2">
							
						</div>
						
						<div class="col-lg-5 mt-3 text-center">
							
								<h3 class="package_heading" >PACKAGES ARE</h3>
								<div class="package mb-5" style="background-color:#c78712bd; margin-right:10px; text-align:center; border:white 2px solid; color:white;">
								
									<p>MONTHLY PACKAGE</p>
									<P style="line-height:5px;">Rs. 1800/-</p><hr>
									<p>Quaterly PACKAGE</p>
									<p style="line-height:5px;">Rs. 4500/-</p><hr>
									<p>Semi-Annual PACKAGE</p>
									<P style="line-height:5px;">Rs. 8500/-</p><hr>
									<p>Annual PACKAGE</p>
									<P style="line-height:5px;">Rs. 15000/-</p>
									
								</div>
							
						</div>
						
						
					</div>
				</div>
			
			
			</section>
			
			<section>
			<?php
		$res=mysqli_query($con,"select *from `students`");
		while($row=mysqli_fetch_assoc($res))
		{
	?>
				
				<div class="container " id="gallery" style="text-align:center; min-height:100vh">
					<h2 style=" margin-top:100px ;display:block; ">gallery</h2>
					<div class="row ml-1">
						<div class="col-lg-4 col-md-6 mb-2">				
									<img src="./dataimage/<?php echo $row["image"] ?>" alt="image" class="img-fluid"/>
						</div>
						<div class="col-lg-4 col-md-6 mb-2">
									<img src="./dataimage/<?php echo $row["image"] ?>" alt="image" class="img-fluid"/>
						</div>
						<div class="col-lg-4 col-md-6 mb-2">
									<img src="./dataimage/<?php echo $row["image"] ?>" alt="image" class="img-fluid"/>
						</div>
						<div class="col-lg-4 col-md-6 mb-2">
									<img src="./dataimage/<?php echo $row["image"] ?>" alt="image" class="img-fluid"/>
						</div>
						<div class="col-lg-4 col-md-6 mb-2">
								<img src="./dataimage/<?php echo $row["image"] ?>" alt="image" class="img-fluid"/>
						</div>
						<div class="col-lg-4 col-md-6 mb-2">
							<img src="./dataimage/<?php echo $row["image"] ?>" alt="image" class="img-fluid"/>						
						</div>
						
					</div>
					
				</div>
				
				<?php
		}
		
		?>
				
				
			</section>
			
			<div class="footer" id="footer">
				<div class="container " style="min-height:100vh; ">
					<h3 class="text-center mt-5" >ABOUT US</h3>
					<div class="row mt-3 bg-primary pb-5 ml-1  mb-3"  style="color:white;">
						<div class="col-md-6 " >
							<div class="contact ml-5 " >
								<h3 class="mb-5 mt-4">CONTACT US</h3>
									<ul>
										<li><i class="fas fa-phone-alt fa-2x"></i>+9779800760907</li><br>
										<li><i class="fas fa-envelope fa-2x"></i>amitpangeni4@gmail.com/royalirons</h5></li><br>
										<li><i class="fab fa-facebook fa-2x"></i>www.facebook.com/royalirons</li><br>
										<li><i class="fab fa-instagram fa-2x"></i>www.instagram.com/royalirons</li><br>
										<li><i class="fab fa-google fa-2x"></i>www.royalirons.com</li>
										
									</ul>
								</div>
							</div>
							
							<div class="col-md-6 ">
								<div class="location" >
									<i class="fas fa-map-marker-alt fa-2x "> </i>
									<h5 >ADDRESS</h5>
									<h5>Tillottma-07,Bhalwari</h5>
									<h5>Rupandehi,Nepal</h5>
								</div>
							</div>
							
					</div>
				</div>
			</div>






		</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>

</html>