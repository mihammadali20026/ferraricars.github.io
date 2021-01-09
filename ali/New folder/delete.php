<?php

$con = mysqli_connect('localhost','root','','ali');

$id=$_GET['id'];
$query="delete from tblproducts where id=$id";
mysqli_query($con,$query);

header('Location:display.php');


?>