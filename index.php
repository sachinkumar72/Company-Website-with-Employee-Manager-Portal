<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>

    <meta charset="utf-8">
<meta name= "viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/mystyle.css">


<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://kit.fontawesome.com/d0741017d5.js" crossorigin="anonymous"></script>


</head>
<body>

<?php include 'navbar.php';?>
<!-- carousel -->
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="5"></li>
    <li data-target="#demo" data-slide-to="6"></li>
    <li data-target="#demo" data-slide-to="7"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/carousel2.jpg" alt="Blaze Workshp" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/blazeinfo2.jpg" alt="Training" width="1100" height="500">
    </div>
        <div class="carousel-item">
   <img src="images/QRIMAGE.png" alt="Data analysis" width="1100" height="500">
 </div>
    <div class="carousel-item">
   <img src="images/carousel1.jpg" alt="Data analysis" width="1100" height="500">
 </div>
 <div class="carousel-item">
   <img src="images/blazeinfo01.jpg" alt="Data analysis" width="1100" height="500">
 </div>
 <div class="carousel-item">
   <img src="images/carousel3.jpg" alt="Data analysis" width="1100" height="500">
 </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class= "my-5 color ">
<div class="py-5">
<h1 style="color:#cfa251;" class="text-center">About Us</h1>
</div>
<div class="container-fluid">
  <div class="row">
    <div class= "col-lg-6 col-md-6 col-12">
     <img src= "images/aboutimage.jpg" class= "img-fluid" aboutimg width= "130%" >
   </div>
   <div class= "col-lg-6 col-md-6 col-12">
     <h2 style="color:#cfa251;" class="display-4">Blaze Services</h2>
     <p class="py-3">HELLO EVERYONE!!! BLAZE SERVICES, is an organization that provides services for 
serving the best in the industry and offering secure benefits to the clients. We serve 
to the customers the best of our client’s requirements. We bridge the gap between 
need and the needy to support them from all over ends. We support people to sustain 
their liabilities and offer them the best to enjoy their life with the best possibility in 
their lives. Whether you are a working professional or a student it's your time to glow 
with us with the handsome package in the industry based on your honesty and 
capability. For our clients we provide the best support from our end we always try to 
help them in a better manner whether they are looking for any possible requirements.</p>
 <a style="background-color:#cfa251;" href = "about.php" class="btn btn-primary">Click Here to Know More</a>
   </div>
  </div>

  

<section class= "my-5 mt-5">

  <div class="py-5">
       <h1  style="color:#cfa251;"class="text-center">Career With Us </h1>
</div>
    <div class=" container-fluid">
    <div class= "row">
      <div class="col-lg-4 col-md-4 col-12"> 
        <img src="images/cardimg8.png" class="img-fluid pd-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12"> 
   <img src="images/cardimg9.png" class="img-fluid pd-4">
 </div>
 <div class="col-lg-4 col-md-4 col-12"> 
   <img src="images/cardimg1.jpg" class="img-fluid pd-4">
 </div>
 <div class="col-lg-4 col-md-4 col-12"> 
   <img src="images/cardimg3.jpeg" class="img-fluid pd-4">
 </div>
 <div class="col-lg-4 col-md-4 col-12"> 
   <img src="images/cardimg11.jpeg" class="img-fluid pd-4">
 </div>
 <div class="col-lg-4 col-md-4 col-12"> 
   <img src="images/cardimg12.png" class="img-fluid pd-4">
 </div>
    </div>
    </div>
  </section>
<section class= "my-5">
  <div class="py-5">
       <h1 style="color:#cfa251;"class="text-center">Contact With US </h1>
</div>
<div  class="w-50 m-auto">
<form action="userinfo.php" method="post">
  <div  class="form-group">
    <label>Username</label>
    <input type="text" name ="user" autocomplete="off" class="form-control">
  </div>
  <div class="form-group">
  <label>Email Id</label>
  <input type="text" name ="email" autocomplete="off" class="form-control">
</div>
<div class="form-group">
  <label>Number</label>
  <input type="text" name ="number" autocomplete="off" class="form-control">
</div>
<div class="form-group">
  <label>Message</label>
 <textarea class="form-control" name="comment"></textarea>
</div>
<button style="background-color:#cfa251;" type="submit" class="btn btn-primary">Submit</button>
<br>
<button style="background-color:#cfa251;" type="submit" class="btn btn-primary" ><a  style="color:white;"href="tel:917249948997">call now for more information</a></button>

<a href="https:/wa.me/918853388886"  target="_blank" class="whatsapp_float"><i class="fa-brands fa-whatsapp whatsapp-icon"></i></a>

  </div>
</div>
</form>

</div> 
</section>

<?php include 'footer.php';?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/und/popper.min.js">

</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</body>
</html>