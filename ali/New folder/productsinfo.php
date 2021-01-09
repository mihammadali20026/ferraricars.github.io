<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	
</head>
<body>

<div class="overflow-hidden">
		<div class="row no-gutters">
			<div class="col-md-6 col-sm-4">
				<img src="ferrari.png" class="ferrari" alt="not found" >
			</div>
			<div class="col-md-6 col-sm-8">
				<ul class="list-unstyled list-inline  mt-5 mr-3 float-right ">
					<li class="list-inline-item"><a href="/" class="list-logo"><i class="fa fa-facebook fa-lg"></i></a></li>
					<li class="list-inline-item pl-4"><a href="/" class="list-logo"><i class="fa fa-twitter fa-lg"></i></a></li>
					<li class="list-inline-item pl-4"><a href="/" class="list-logo"><i class="fa fa-instagram fa-lg"></i></a></li>
					<li class="list-inline-item pl-4"><a href="/" class="list-logo"><i class="fa fa-linkedin fa-lg"></i></a></li>
				</ul>
			</div>
		</div>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="home.html">Home</a>
				</li>
				<li class="nav-item pl-3">
					<a class="nav-link" href="about.html">About Us</a>
				</li>
				<li class="nav-item pl-3">
					<a class="nav-link" href="productimages.php">Products</a>
				</li>
				<li class="nav-item pl-3">
					<a class="nav-link" href="contact.html">Contact Us</a>
				</li>
				<li class="nav-item pl-3">
					<a class="nav-link" href="#">login</a>
				</li>
			</ul>
		</nav>
		
<style>
.ferrari{
    height:100px;
	left:300px;
}
.f_logo{

    height:70px;
    margin-right:15px;
}
.wid
{
	 position: absolute;
left:960;
top:260;	
}
.wid1
{
	 position: absolute;
left:460;
top:260;	
}
</style>





<?php

$con = mysqli_connect('localhost','root','','ali');

$id=$_GET['id'];
$query="select * from tblproducts where id=$id";
$res=mysqli_query($con,$query);

$row=mysqli_fetch_array($res);

	?>
	<div class="container-fluid">
			<div class="row mt-5">
				<div class="col-md-12">
					<h5> <strong>OUR PRODUCT</strong></h5>
				</div>
			</div>
			</div>
<div class="col-lg-6">
<tr>

<td><img src="<?php echo $row['image'];?>" height="400" width="400"> </td> </div>
<div class="wid1">
<h2><td> Product ID is: <?php echo $row['id']; ?></td></h2> <br>
<td><h2> Product Name:<?php echo $row['name'];?> </td></h2> <br>
<td><h2> Product Price is:<?php echo $row['price'];?> </td></h2> <br>
<td><h2> Product Code is:<?php echo $row['code'];?> </td><h2> <br>
</div>
<div class="wid">
<td><h2> Product Instock is:<?php echo $row['instock'];?> </td></h2> <br>
<td><h2> Product Discount is:<?php echo $row['discount'];?> </td> </h2><br>
<td><h2> Product Size is:<?php echo $row['size'];?> </td></h2> <br>
<td><h2> Product Detail is:<?php echo $row['detail'];?> </td> </h2><br>
</div>
<footer>
			 <div class="row no-gutters bg-dark mt-0">
			<div class=" col-md-4  col-sm-4 text-white">
				<ul class="list-unstyled  mt-4 ">
					<li class="list-item pl-4 "><i class="fa fa-facebook  fa-lg"></i></li>
					<li class="list-item pl-4 pt-2"><i class="fa fa-twitter fa-lg"></i></li>
					<li class="list-item pl-4 pt-2"><i class="fa fa-instagram fa-lg"></i></li>
					<li class="list-item pl-4 pt-2"><i class="fa fa-linkedin fa-lg"></i></li>
				</ul>
			</div>
			<div class="col-md-4 col-sm-4 mt-4 text-white">
				<center><p class="mb-0">Defence Road Lahore, Pakistan</p>
					<p class="mb-0">Email: ferrari@gmail.com</p>
					<p>Phone:  042 123 456 78</p>
					
				<ul class="list-unstyled list-inline pt-1">
					<li class="list-inline-item"><a href="home.html" class="text-white" >Home</a></li>
					<li class="list-inline-item pl-4"><a href="about.html" class="text-white" >About Us</a></li>
					<li class="list-inline-item pl-4"><a href="product.html" class="text-white" >Products</a></li>
					<li class="list-inline-item pl-4"><a href="contact.html" class="text-white" >Contact Us</a></li>
					<li class="list-inline-item pl-4"><a href="#" class="text-white" >login</a></li>
				</ul>
			</center>
			</div>
			<div class="col-md-4 col-sm-4 mt-4 text-right text-white">
				
				<img src="ferrari.png" class="f_logo" alt="footer-logo">
			</div>
		</div> 
		</footer>
		</div>

		</body>
		</html>