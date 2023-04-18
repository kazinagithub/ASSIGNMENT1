<?php
$host="localhost";
$username="root";
$password="";
$db="employees";
$conn=mysqli_connect("localhost","root","","employees");
@$department=$_POST['department'];
@$name=$_POST['name'];
@$email=$_POST['email'];
@$age=$_POST['age'];
$sql="UPDATE employee_lists SET id='2',department='developer',name='cedrick',email='ceedro@gmail.com',age='19' WHERE id=6";
if($res=mysqli_query($conn,$sql))
{
    echo"<script> alert('data updated');window.location='response.php';</script>";  
}
else{
    echo "<script> alert('data not yet updated');window.location='response.php';</script>";
}
    
?>