<!doctype html>
<html>

<head>

<meta charset="utf-8">


<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title> Restaurant Management System</title>


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="css/style.css">

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
		
		
    </style>
</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">




    	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="display.php">
					<img src="images/logo.png" height="60px" width="200px" alt="image "></a>



				<div class="collapse navbar-collapse justify-content-center" id="navbar-wd">
					<ul class="navbar-nav">
						<li class="nav-item "><a class="nav-link"  onMouseOver="this.style.backgroundColor='#66c2ff'"
                        onMouseOut="this.style.backgroundColor='#fbfafe'"   href="index.php">Home</a></li>
						<li class="nav-item "><a class="nav-link" onMouseOver="this.style.backgroundColor='#66c2ff'"
								onMouseOut="this.style.backgroundColor='#fbfafe'" href="gallery.html">Gallery</a></li>

								<li class="nav-item active "><a class="nav-link" onMouseOver="this.style.backgroundColor='#66c2ff'"
								    href="display.php">Check Order Details</a></li>
						
						<li class="nav-item"><a class="nav-link" onMouseOver="this.style.backgroundColor='#66c2ff'"
								onMouseOut="this.style.backgroundColor='#fbfafe'" href="reservation.php">Booking Rooms</a></li>
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
    <br>
    <!-- End header -->
    <div class="container">
	
    <h3 class="display-4 text-center text-white m-4 bg-primary">Customer's Order Details</h3>


        
</body>
</html>

<?php


$servername='localhost';
$username='root';
$password='';
$dbname='user_details';
$conn=mysqli_connect($servername,$username,$password,$dbname);
//$date='7/5/2020';
if(!$conn)
echo 'error';

else 
{
    $query="select * from users ";

    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)<0)
    echo 'error';
    while($row=mysqli_fetch_assoc($result))
    {?>
        
        <table class="table table-hover w-100 mt-3" border="2" align="center">
            <tr class="bg-secondary text-white">
                 <th>First Name</th>
                 <th>Last Name</th>
                 <th>Email</th>
                 <th>Address</th>
                 <th>Mobile Number</th>
                 <th>Date Of Order</th>
            </tr>
             
            <tr class="bg-success text-white">
                     <td><?php echo $row['fname']?></td>
                     <td><?php echo $row['lname']?></td>
                     <td><?php echo $row['email']?></td>
                     <td><?php echo $row['address']?></td>
                     <td><?php echo $row['mobile']?></td>
                     <td><?php echo $row['date_of_order']?></td>
            </tr>
            
        </table>
        
    <?php
    }
}
?>