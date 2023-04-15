<?php
$host="localhost";
$username="root";
$password="";
$db="employees";
$conn=mysqli_connect("localhost","root","","employees");

$name=$_POST['name'];
$department=$_POST['department'];
$task=$_POST['task'];
$payment=$_POST['payment'];
$sql="insert into lists(name,department,task,payment)values('$name','$department','$task','$payment')";
//$sql="UPDATE lists SET id='7',name='cedrick',department='developer',task='3d animation',payment='60000' WHERE id=7"
if($res=mysqli_query($conn,$sql))
{
    echo"<script> alert('data successfully inserted');window.location='bonjour.php';</script>";  
}
else{
    echo "<script> alert('data not yet inserted');window.location='bonjour.php';</script>";
}
    
?>