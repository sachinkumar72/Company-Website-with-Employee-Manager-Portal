<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}else{
 echo "No connection";
}
mysqli_select_db($con,'blazeuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$number =$_POST['number'];
$comment = $_POST['comment'];

$query = "insert into userinfodata(user,email,number,comment) values ('$user','$email','$number','$comment')";
// echo "$query"

mysqli_query($con,$query);
     header('location:index.php');
     exit;
?>