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
</style>

<head>
	<title>Display Products</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<div class="container-fluid">
			<div class="row mt-5">
				<div class="col-md-12">
					<h5> <strong>LATEST PRODUCTS</strong></h5>
				</div>
			</div>
			</div>
<?php
$con = mysqli_connect('localhost','root','','ali');

 $query="select * from tblproducts";
 $res=mysqli_query($con,$query);
 ?>
 
<div class="container">
<div class="row">

 
 <?php
 
while($row=mysqli_fetch_array($res))
{
	$var=$row['instock'];
	if($var=='y')
	{
 ?>



<tr>
<div class="col-md-4 col-sm-12">

<a href="productsinfo.php?id=<?php echo $row['id'];?>" target="_blank"><img   src="<?php echo $row['image'];?>" height="250" width="250"></a>
	<br>
		
				
<br>
</div>
</tr>





<?php
	}
}

?>
</div>
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

		