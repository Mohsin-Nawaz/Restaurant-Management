<?php 
	$con = mysqli_connect('localhost','root','','user_details');

 ?>

<!DOCTYPE html>
<html lang="en">
<html>

<head>
 
<meta charset="utf-8">


<!-- Site Metas -->
<title> Restaurant Management System</title>



  <!-- Font awesome link-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- *END* BOOTSTRAP ONLINE LINK/ RESPONSIVE WEBPAGE-->
<style>
   
    

    .submitt {
      width: 100px;
      height: 30px;
      border-radius: 10px;
     
      border: none;
      color: #fff;
      background: blue;
      
      margin-left:30px;
    }


    .display a {
      text-decoration: none;
      color: blue;
    }
    body{
      background-color: rgb(173, 255, 255);
    }
    .text-center{
      text-shadow: beige;
      color: coral;
    }

    .na{
      text-decoration: darkgoldenrod;
      font-weight: bold;

      color: rgb(255, 191, 73);
    }
    

#sign {
  display:grid;
  grid-template-columns: auto;
  max-width:600px;
  /* background-color:blue; */
  margin:auto;
}
.text1 {
  margin-left:50px;
}
.text3 {
  margin-left:55px;
  width:61.5%;
}

.passw{
  margin-left:36px;
  width:61.5%;
}


.mobileno{
  margin-left:14px;
  width:61.5%;
}
#getdate{
      margin-left:14px;
      width:auto;
    }





</style>

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

<!-- Start header -->
<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="signup.php">
					<img src="images/logo.png" height="60px" width="200px" alt="image "></a>



				<div class="collapse navbar-collapse justify-content-center" id="navbar-wd">
					<ul class="navbar-nav">
						<li class="nav-item "><a class="nav-link"  onMouseOver="this.style.backgroundColor='#66c2ff'"
            onMouseOut="this.style.backgroundColor='#fbfafe'"
						   href="index.php">Home</a></li>
						<li class="nav-item "><a class="nav-link" onMouseOver="this.style.backgroundColor='#66c2ff'"
								onMouseOut="this.style.backgroundColor='#fbfafe'" href="gallery.html">Gallery</a></li>

                <li class="nav-item active"><a class="nav-link" onMouseOver="this.style.backgroundColor='#66c2ff'"
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
	<!-- End header -->
  

  <div class="boxeds">

    <div class="py-1"><br><br>

      
      <h3 class="text-center">Fill The Form To Order The Dish </h3>
<hr>
  
      <div id="sign">
      <br>
        <form  class="for" method="POST" action="signup.php" enctype="multipart/form-data">
          <b class="na">Name </b> 
          <input class="text1" name="nam1" placeholder="First Name" type='text' required autocomplete="off">
          <input class="text2" name="nam2" placeholder="Last Name" type='text' required autocomplete="off"><br><br>
          <b class="na">Email</b><input class="text3" name="nam3" placeholder="Email" required autocomplete="off"><br><br>
          <b class="na">Address</b><input class="passw" name="nam4" type="text" placeholder="Address" required autocomplete="off"><br><br>
          <b class="na">Mobile No.</b><input type="number"  class="mobileno"  name="nam5" placeholder="Mobile no." required autocomplete="off"><br><br><br>
          <b class="na"> Order Date  </b><input type="text"  name='nam6' id="getdate"><br><br>

          <b >Click On Submit Button</b>
          <input class="submitt" type="submit" name="submit" value="Submit"><br><br>

        </form>
        

      
        <hr>
      </div>
    </div>
  </div>




  <script>
    function setdate() {
      getdate = document.getElementById('getdate');
      ndate = new Date();
      newdate = ndate.toLocaleDateString();
      //alert(newdate);
      getdate.value = newdate;
    } setdate();
  </script>



</body>


</html>


<?php

if(isset($_POST['submit']))
{
  $fname=$_POST['nam1'];
  $lname=$_POST['nam2'];
  $email=$_POST['nam3'];
  $adress=$_POST['nam4'];
  $mobile=$_POST['nam5'];
  $date=$_POST['nam6'];

$query="insert into users (fname,lname,email,address,mobile,date_of_order) values('$fname','$lname','$email','$adress','$mobile','$date')";

$run_querys = mysqli_query($con,$query);
if($run_querys)
{

// echo " Your Data  is Inserted  into Database. !";
echo "<script>alert('Your Order has been Booked Enjoy Your Delicious Food ! ')</script>";
}

// else
// {
// echo mysqli_error($conn);
// }
}

?>



