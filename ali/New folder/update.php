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

</div>


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
<div class="form-group">
      <label >PRODUCT DETAIL</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter detail" name="detail">
    </div>

  Select image to upload:
  <input type="file" name="file" id="fileToUpload">
  <br>
  <input type="submit" value="Add product" name="submit">
    </form>

    
    
  
</div>
<?php
 $databaseHost = 'localhost';
$databaseName = 'ali';
$databaseUsername = 'root';
$databasePassword = '';

$con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
$id=$_GET['id'];



if(isset($_POST['submit']))
{
	 $userid=$_POST['id'];
	$name=$_POST['name'];
	$price=$_POST['price'];
	$code=$_POST['code'];
	$status=$_POST['instock'];
	$dis=$_POST['discount'];
	$size=$_POST['size'];
	$discep=$_POST['detail'];
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
	$query="update tblproducts set  id=$userid,name='$name',price=$price,code='$code',instock=$status,discount=$dis,size='$size',detail='$discep',image='$dest' where id=$id";
	$res=mysqli_query($con,$query);
	
	
	if($res)
	{
		header('location:product6.php');
	}
	else
	{
		echo "data not inserted";
	}
}
?>
</body>
</html>