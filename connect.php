<?php
$email=$_['email'];
$password=$_['password'];

//connection
$conn = new mysqli('localhost','root','','volunteer');
if ($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration email,password)values(?,?)");
}
$stmt->bind_param("s",$email,$password);
$stmt->execute();
echo "registration successful...";
$stmt->close();
$conn->close();
?>
