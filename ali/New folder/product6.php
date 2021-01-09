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
					<a class="nav-link" href="product.html">Products</a>
				</li>
				<li class="nav-item pl-3">
					<a class="nav-link" href="contact.html">Contact Us</a>
				</li>
				<li class="nav-item pl-3">
					<a class="nav-link" href="loginpage.php">login</a>
				</li>
			</ul>
		</nav>


<style>
.ferrari{
    height:100px;
left:300px;
}

.our1{

height:200px;
weight:100%;
}
.our2{
 
  position: absolute;
  top:200px;
  left:600px;
  font-size: 60px;
  COLOR:black;
  font-weight:bold;
  }
  .bold
  {
  font-weight:bold;
  }
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

</style>




<div class="container">
<div class="row mt-5">
<div class="col-md-12 mt-4">
<img src="our1.png" class="our1">
</div>
</div>

<div class="our2">ADD <br>PRODUCTS</div>

 
  <form method="post" enctype="multipart/form-data" class="bold">
   <div class="form-group">
      <label >PRODUCT ID</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter id" name="id">
    </div>
    
    <div class="form-group">
      <label >PRODUCT NAME</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter name" name="name">
    </div>
<div class="form-group">
      <label >PRODUCT PRICE</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter price" name="price">
    </div>
<div class="form-group">
      <label >PRODUCT CODE</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter code" name="code">
    </div>
<div class="form-group">
      <label>PRODUCT INSTOCK</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter instock" name="instock">
    </div>
<div class="form-group">
      <label >PRODUCT DISCOUNT</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter discount" name="discount">
    </div>
<div class="form-group">
      <label >PRODUCT SIZE</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter size" name="size">
    </div>


  Select image to upload:
  <input type="file" name="file" id="fileToUpload">
  <br>
  
  <input type="submit" value="Add product" name="submit"><br>
  <table>
  <div>
			<tr> 
				<td></td>
				<a  href="display.php"> </a>
				<td><input type="submit" name="Submit" value="display data"></td>
			</tr>
			</div>
			</table>
    </form>

    
    
  
</div>
<?php

if(isset($_POST['submit']))
{
	 $userid=$_POST['id'];
	$name=$_POST['name'];
	$price=$_POST['price'];
	$code=$_POST['code'];
	$status=$_POST['instock'];
	$dis=$_POST['discount'];
	$size=$_POST['size'];
	
	$file=$_FILES['file'];
	$filename=$file['name'];
	$filepath=$file['tmp_name'];
	
	$dest='upload/'.$filename;
	move_uploaded_file($filepath,$dest);
	$databaseHost = 'localhost';
$databaseName = 'ali';
$databaseUsername = 'root';
$databasePassword = '';

$con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
	$query="INSERT INTO tblproducts VALUES ('$userid','$name','$price','$code','$status','$dis','$size','$dest')";
	$res=mysqli_query($con,$query);
	if($res)
{
echo "Data is successfully registered";
header('Location: display.php');
}
else{
echo "Data is not registered";
}
}
?>
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
					<li class="list-inline-item pl-4"><a href="loginpage.php" class="text-white" >login</a></li>
				</ul>
			</center>
			</div>
			<div class="col-md-4 col-sm-4 mt-4 text-right text-white">
				
				<img src="ferrari.png" class="f_logo" alt="footer-logo">
			</div>
		</div> 
		</footer>

</body>
</html>
