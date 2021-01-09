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
 table{
  
   background: rgba(76, 175, 80, 0.6);
  padding:30%;
  width:95%;
  border:4px solid;
  border-color: hsl(89,43%,51%);
  margin-top:30%;
  margin-bottom:5%;
  margin-left:25%;
}  
td,th{
color:black;
padding:20px;
font-weight:bold;
}
.form1{
position: absolute;
  top: 150px;
  left: 360px;

}
.f_logo{

    height:70px;
    margin-right:15px;
}

</style>
<div><img  class="" src="plug.jpg" style="width:100%;height:70%;"> </img></div>
<form action="#" method="post" name="form1" class="form1">
		<table align="center" width="25%" border="0">
			<tr> 
				<td>Username</td>
				<td><input type="text" name="user" placeholder="Enter Username Here"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="password" name="pass" placeholder="Enter Password Here"></td>
			</tr>
			<tr>
				<td></td>
				<td class="tdmargin"><input type="submit" name="submits" value="Login" class="btn btn-success"></td>
			</tr>
		</table>
	</form>


<?php
	$con = mysqli_connect('localhost','root','','ali');
	
	if(isset($_POST['submits']))
	{
		$uname = $_POST['user'];
		$upass = $_POST['pass'];
	
		$query = "select * from tblusers where username = '$uname' AND userpassword = '$upass'";
		
		$result = mysqli_query($con, $query);	
		
		$row = mysqli_num_rows($result);
		
		if($row > 0)
		{
			session_start();
			$_SESSION['username'] = $uname;
			$_SESSION['userpassword'] = $upass;
			
			header('Location:product6.php');
		}
			else{
				?>
				<div style="color:black">
			<?php
			echo "Username OR Password is incorrect";
			?>
			</div>
<?php
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








