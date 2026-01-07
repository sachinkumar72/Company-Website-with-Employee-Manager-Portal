<?php 

session_start();

include('connection.php');

if(isset($_POST['submit']))
{
	$sql="select * from users where uname='".$_POST['uname']."' AND upwd='".$_POST['upwd']."'";
	
	$result=mysqli_query($conn,$sql);
	$data=mysqli_fetch_array($result);
	
	//print_r($data);
	
	if(!empty($data))
	{
		$_SESSION['user_role']=$data['role'];
		$_SESSION['username']=$data['uname'];
		
		header('location:dashboard.php');
		
	}

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

  <style>

body {
  background-color: #000;
  color: #fff;
  font-family: "Gotham", sans-serif;
}

.login-form {
  margin: 150px auto;
  width: 500px;
  padding: 10px;
  border-radius: 10px;
  background-color: rgba(255, 255, 255, 0.2);
  text-align: center;
}

.login-form h1 {
  font-size: 36px;
  margin-bottom: 50px;
}

.login-form input {
  width: 100%;
  padding: 15px 20px;
  border: none;
  border-radius: 5px;
  background-color: rgba(0, 0, 0, 0.1);
  color: #fff;
  font-size: 16px;
  margin-bottom: 10px;
}

.login-form button {
  background-color: #f00;
  color: #fff;
  padding: 15px 20px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  margin-right:22px;
}

.login-form button:hover {
  opacity: 0.8;
}




  </style>
</head>
<body>

<div  class=" login-form">
  <h1 class="login-form h1 ">Login form</h1>
  <form method="post">
    <div class="mb-3 mt-3">
      <label for="email">Username:</label>
      <input   type="text" class="form-control" id="email" placeholder="Enter username" name="uname">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input   type="password" class="form-control" id="pwd" placeholder="Enter password" name="upwd">
    </div>
   
   
    <button  style= "background-color:#cfa251;"class="login-form button" id="login-form button"type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
