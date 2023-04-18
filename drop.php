
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
$sql="DELETE FROM employee_lists WHERE id=8";
if($res=mysqli_query($conn,$sql))
{
    echo"<script> alert('data deleted');window.location='response.php';</script>";  
}
else{
    echo "<script> alert('data not yet deleted');window.location='response.php';</script>";
}
    
?>