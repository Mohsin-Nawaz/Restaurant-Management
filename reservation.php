<?php 

	$con = mysqli_connect('localhost','root','','user_details');

 ?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
	<meta charset="utf-8">


	
	<!-- Site Metas -->
	<title> Restaurant Management System</title>




	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Site CSS -->
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
		h3 {
			text-align: center;
			font-size: 22px;
			font-variant: small-caps;
			font-family: Arial;
			font-weight: bold;

		}
		p{
			font-size: 18px;
		}



		table{
			align-items: center;
			justify-content: center;
			font-weight: bold;
			border: 5px solid black;
			border-radius: 8px;
			box-shadow: 5px 7px 10px 6px black;
		}
		td{
			display: block;
			align-items: center;justify-content: center;
			padding: 5px;
		}
		input{
			width: 100%;
			text-align: center;
			padding: 5px;
		}
		label{
			font-weight: bold;
			font-size: 25px;
		}
	</style>




</head>

<body>




	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="reservation.php">
					<img src="images/logo.png" height="60px" width="200px" alt="image "></a>
				
				<div class="collapse navbar-collapse justify-content-center" id="navbar-wd">
					<ul class="navbar-nav">
						<li class="nav-item "><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item "><a class="nav-link" onMouseOver="this.style.backgroundColor='#66c2ff'"
								onMouseOut="this.style.backgroundColor='#fbfafe'" href="gallery.html">Gallery</a></li>

								<li class="nav-item "><a class="nav-link" onMouseOver="this.style.backgroundColor='#66c2ff'"
								onMouseOut="this.style.backgroundColor='#fbfafe'"    href="display.php">Check Order Details</a></li>
						
						<li class="nav-item active"><a class="nav-link" onMouseOver="this.style.backgroundColor='#66c2ff'"
								 href="reservation.php">Booking Rooms</a></li>
						<li class="nav-item"><a class="nav-link" onMouseOver="this.style.backgroundColor='#66c2ff'"
								onMouseOut="this.style.backgroundColor='#fbfafe'" href="checkcustomer.php">Check Customer details</a></li>
								<li class="nav-item"><a class="nav-link" onMouseOver="this.style.backgroundColor='#66c2ff'"
								onMouseOut="this.style.backgroundColor='#fbfafe'" href="blog.html">Blog</a></li>

						<li class="nav-item"><a class="nav-link" onMouseOver="this.style.backgroundColor='#66c2ff'"
								onMouseOut="this.style.backgroundColor='#fbfafe'" href="contact.html">Contact</a></li>
					</ul>
				</div>

			</div>
		</nav>
	</header>
	<!-- End header -->



	<!-- Start Menu -->

	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Rooms Pictures</h2><br>
						<p>Here are some special rooms pictures for the customers from our Royal Luxury Restaurant </p>
					</div>
				</div>
			</div>
			
			<div class="row special-list">
				<div class="col-lg-4 col-md-6  ">
					<div class="gallery-single fix">
						<img src="images/building.jpg" class="img-fluid" alt="Image">
					</div>
				</div>

				<div class="col-lg-4 col-md-6 ">
					<div class="gallery-single fix">
						<img src="images/kitchen.jpg" class="img-fluid" alt="Image">
					</div>
				</div>

				<div class="col-lg-4 col-md-6 ">
					<div class="gallery-single fix">
						<img src="images/recp.jpg" class="img-fluid" alt="Image">
					</div>
				</div>

				<div class="col-lg-4 col-md-6 ">
					<div class="gallery-single fix">
						<img src="images/room1.jpg" class="img-fluid" alt="Image">
					</div>
				</div>

				
				<div class="col-lg-4 col-md-6 ">
					<div class="gallery-single fix">
						<img src="images/room2.jpg" class="img-fluid" alt="Image">
					</div>
				</div>

				
				<div class="col-lg-4 col-md-6 ">
					<div class="gallery-single fix">
						<img src="images/room4.jpg" class="img-fluid" alt="Image" style="height:234px; width:400px;" >
					</div>
				</div>

			</div>
		</div>
	</div>
	<hr>
	<!-- end menu -->
    


	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<form action="reservation.php" method="post" enctype="multipart/form-data">
				<table class="table table-hover w-100 bg-success text-white"  border="2"  align="center">
						<h2 class="text-center display-4">Booking</h2>
						<p class="text-center" style="font-weight:bold; font-size:18px;  " >Here is the form,which customers can fill for room booking.</p>
					<tr>
						<td>
							<label for="Name">Name</label>
							<input type="text" id="name" name="name" required="" autocomplete="off">
						</td>
					</tr>
					<tr>
						<td>
							<label for="Email">Email</label>
							<input type="text" id="email" name="email" required="" autocomplete="off">
						</td>
					</tr>
					<tr>
						<td>
							<label for="Address">Address</label>
							<input type="text"  id="address" name="address" required="" autocomplete="off">
						</td>
					</tr>
					<tr class="form-group">
						<td>
							<label for="Contact Number">Contact Number</label>
							<input type="text" id="number" name="phone" required="" autocomplete="off">
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group">
							<label for="Select Person">Select Person</label>
								<select class="custom-select d-block form-control" id="person" name="persons"  required="">
									<option disabled selected>Select Person*</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									
								</select>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<input class="btn btn-secondary" type="submit" value="submit" name="submit">
						</td>
					</tr>
				</table>
			</form>
			</div>
		</div>
		
	</div><br><br>




	<!-- Start Contact info -->
	<br><br>
	<div class=" contact-imfo-box" class="page-footer font-small blue-grey lighten-5" style="background-color:  #9ED8E3  ;">
		<div class="container">
			<div class="row ">
				<div class="col-md-4">
					
				<img src ="images/i7.png" >
					<div >
						<h4 class="text-danger">Phone</h4>
						<p style="font-size:22px">
							<strong>
							+92 335 6783221
							</strong>
						</p>
					</div>
				</div>
				<div class="col-md-4">
					
					<img src ="images/i6.png" >
					<div >
						<h4 class="text-danger">Email</h4>
						<p style="font-size:22px">
							<strong>
							royal@gmail.com
							</strong>
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<img src ="images/i5.png" >
					<div >
						<h4 class="text-danger">Location</h4>
						<p style="font-size:22px">
							<strong>
							Pakistan
							</strong>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->

	<!-- Start Footer -->
	<footer style="background-color:  #E3CB9E ;">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-4 col-md-6">
					<h3 class="text-primary" >Opening hours</h3>
					
					<p ><b><span class="text-color">Tuesday-Wednesday:</span> 9:00Am - 10:00PM</b></p>
					<p><b><span class="text-color">Thursday-Friday :</span> 7:00Am - 09:00PM</b></p>
					<p><b><span class="text-color">Saturday-Sunday :</span> 6:00Am - 11:00PM</b></p>
					<p><b><span class="text-color" > Monday : </span>Closed</b></p>
				</div>
				<div class="col-lg-4 col-md-6">
					<h3 class="text-primary">Contact information</h3>
					<p class="lead"  style="font-weight:bold;" >Sarafa Bazar Rd,  Raja Bazar Rawalpindi, Punjab 46000,- Pakistan</p>
					<p class="lead"><b><a >051-3594500</a></b></p>
					<p><a > royalrestaurant@gmail.com</a></p>
				</div>
				<div class="col-lg-4 col-md-6">
					<h3 class="text-primary">Subscribe by clicking icons</h3>
					
					<ul class="list-inline f-social" style="text-align: center;" >
						<li class="list-inline-item"><a href="https://www.facebook.com/"><i class="fa fa-facebook"
									aria-hidden="true"></i></a></li>
								
						<li class="list-inline-item"><a href="https://twitter.com/explore"><i class="fa fa-twitter"
									aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"
									aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a
								href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i
									class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<br><hr>
					
						<li class="list-inline-item"><a href="https://www.instagram.com/"><i class="fa fa-instagram"
									aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.youtube.com/"><i class="fa fa-youtube"
									aria-hidden="true"></i></a></li>

						<li class="list-inline-item"><a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp"
									aria-hidden="true"></i></a></li>

						<li class="list-inline-item"><a
								href="https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=13&ct=1593291146&rver=7.1.6819.0&wp=MBI_SSL&wreply=https%3A%2F%2Flw.skype.com%2Flogin%2Foauth%2Fproxy%3Fclient_id%3D572381%26redirect_uri%3Dhttps%253A%252F%252Fweb.skype.com%252FAuth%252FPostHandler%26state%3Dddb9d8a9-51b4-49a3-8833-57ca65bdd680&lc=1033&id=293290&mkt=en-US&psi=skype&lw=1&cobrandid=2befc4b5-19e3-46e8-8347-77317a16a5a5&client_flight=ReservedFlight33%2CReservedFlight67"><i
									class="fa fa-skype" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p  style="text-align:center" class="text-warning">All Rights Reserved. &copy; 2020 
							Design By :
							<a>Royal Restaurant Team</a></p>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- End Footer -->

</body>
	
</html>


<?php
	
	if (isset($_POST['submit'])) 
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$contact = $_POST['phone'];
		$address = $_POST['address'];
		$persons = $_POST['persons'];

		$bookrooms = "insert into bookroom (name,email,number,address,persons,date) values ('$name','$email','$contact','$address','$persons',NOW())";

		$run_bookroom = mysqli_query($con,$bookrooms);

		if($run_bookroom)
		{
			echo "<script>alert('Your Room has been Booked Enjoy Your Stay ! ')</script>";
		}

	}



?>