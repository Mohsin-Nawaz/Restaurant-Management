<?php
	$con = mysqli_connect('localhost','root','','user_details');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Check Customers</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   


    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
	<link rel="stylesheet" href="css/style.css">    
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
	<style>
		body{
			color : black;
			text:center;

		}
		.for{
			border:center;
			margin-left:300px;
		}
		h3{
			font-weight:bold;
			font-size:24px;
		}
		p{
			font-size: 18px;
		}
		


	</style>
</head>
<body >




    <!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="checkcustomer.php">
					<img src="images/logo.png" height="60px" width="200px" alt="image "></a>

				<div class="collapse navbar-collapse justify-content-center" id="navbar-wd">
					<ul class="navbar-nav">
						<li class="nav-item "><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item "><a class="nav-link" onMouseOver="this.style.backgroundColor='#66c2ff'"
								onMouseOut="this.style.backgroundColor='#fbfafe'" href="gallery.html">Gallery</a></li>

								<li class="nav-item "><a class="nav-link" onMouseOver="this.style.backgroundColor='#66c2ff'"
								onMouseOut="this.style.backgroundColor='#fbfafe'"    href="display.php">Check Order Details</a></li>
						
						<li class="nav-item"><a class="nav-link" onMouseOver="this.style.backgroundColor='#66c2ff'"
								onMouseOut="this.style.backgroundColor='#fbfafe'" href="reservation.php">Booking Rooms</a></li>
						<li class="nav-item active"><a class="nav-link" onMouseOver="this.style.backgroundColor='#66c2ff'"
								 href="checkcustomer.phautocomplete="off"p">Check Customer details</a></li>
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

	
	<div class="container"><br><br><br><br>
	
		<h3 class="display-4 text-center text-white m-4 bg-warning">Customer Details Forum</h3>
		<div class="row">
			<div class="col-md-12">
				<div>
					<form class="for" action="checkcustomer.php" method="post" class="text-center">
						<input type="text" name="c_name" autocomplete="off">
						<input type="submit" style="center"  class="btn btn-primary" name="search" value="search">
					</form>

					<table class="table table-hover w-100 mt-3" border="2" align="center">
					<?php 

						if (isset($_POST['search'])) 
						{
							$search_name = $_POST['c_name'];
							$select_customers = "select * from bookroom where name='$search_name'";
							$run_customer = mysqli_query($con,$select_customers);

							$row_customer=mysqli_fetch_array($run_customer);
								$check_name = $row_customer['name'];
								$email = $row_customer['email'];
								$address = $row_customer['address'];
								$number = $row_customer['number'];
								$persons = $row_customer['persons'];
								$date = $row_customer['date']; 


					 ?>
						<tr class="bg-secondary text-white">
							<th>Name</th>
							<th>email</th>
							<th>Address</th>
							<th>Contact No</th>
							<th>Total Persons</th>
							<th>Date & Time</th>
						</tr>
						<tr  class="bg-success text-white">
							<td>
								<?php echo $check_name; ?>
							</td>
							<td>
								<?php echo $email; ?>
							</td>
							<td>
								<?php echo $address; ?>
							</td>
							<td>
								<?php echo $number; ?>
							</td>
							<td>
								<?php echo $persons; ?>
							</td>
							<td>
								<?php echo $date; ?>
							</td>
						</tr>
					<?php } ?>
					</table>

				</div>
			</div>
		</div>
	</div>




	<!-- Start Contact info -->
	
	<br><br><br><br><br><hr>
	 <!-- Start Contact info -->
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
					<h4 class="text-primary"  style="font-size: 22px; font-weight: bold; "   >Opening hours</h4>
					
					<p><span class="text-color">Tuesday-Wednesday:</span> 9:00Am - 10:00PM</p>
					<p><span class="text-color">Thursday-Friday :</span> 7:00Am - 09:00PM</p>
					<p><span class="text-color">Saturday-Sunday :</span> 6:00Am - 11:00PM</p>
					<p><span class="text-color" > Monday : </span>Closed</p>
				</div>
				<div class="col-lg-4 col-md-6">
					<h3 class="text-primary">Contact information</h3>
					<p class="lead">Sarafa Bazar Rd,  Raja Bazar Rawalpindi, Punjab 46000,- Pakistan</p>
					<p class="lead"><b><a>051-3594500</a></b></p>
					<p><a> royalrestaurant@gmail.com</a></p>
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
