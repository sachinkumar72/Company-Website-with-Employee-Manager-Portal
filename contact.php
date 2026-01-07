  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>contact</title>

    <meta charset="utf-8">
<meta name ="viewport" content= "width=device-width, initial-scale=1">
<link rel ="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
}

/* Add a hover effect if you want */
.fa:hover {
  opacity: 0.7;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
  background: #3B5998;
  color: white;
}

/* Twitter */
.fa-twitter {
  background: #55ACEE;
  color: white;
}
















</style>
</head>
  </head>
  <body>
  <?php include 'navbar.php';?>






 <section class= "my-5">
  <div class="py-5">
       <h1 style="color:#cfa251;"class="text-center">Contact With US </h1>
</div>
<div class="w-50 m-auto">
<form action="userinfo.php" method="post">
  <div class="form-group">
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
</form>

</div>

</section>

<section class="my-5">

<div class="py-5">
  <div class="text-center">
   <h2 style="color:#cfa251;">Other Ways To Reach Us:</h2>
   <p>Phone: +91 885-3388-886</p>
   <p>Email: blazesrvcs@gmail.com</p>
   <P>	Command Office Address: 088, BN Road, Kaiser Bagh Officer's Colony, Qaisar Bagh, Lucknow, Uttar Pradesh 226020
</P>
   <P>	Head Qua (E) Office Address : 145-A, Uruwa Bazar, Gorakhpur, Uttar Pradesh 273407.
</P>
   <P>Office Head Qua (w): C-878, Sikandar, Agra, Uttar Pradesh. 282007.
</P>
 </div>
</div>
 <div >
  <div class="text-center">
   <h2 style="color:#cfa251;"class="text-center">Follow Us On Social Media:</h2>
   <a href="https://www.facebook.com/profile.php?id=61551069267086&mibextid=snXT6QWNt6Bj1tWr" class="fa fa-facebook"></a>
   <!-- <a href="#" class="fa fa-twitter"></a> -->
   <!-- <a href="#" class="fa fa-google"></a> -->
  <a href="https://www.linkedin.com/in/blaze-services-220244273?trk=contact-info" class="fa fa-linkedin"></a>
   <a href="https://www.youtube.com/channel/UCi2Gx_O7svMOLFOBN4Ua1NQ" class="fa fa-youtube"></a>
   <a href="https://api.whatsapp.com/send/?phone=918853388886&text&type=phone_number&app_absent=0" class="fa fa-whatsapp"></a>
 </div>



 <footer>
  <p style="color:#cfa251;"class="p-3 bg-dark text-center">Blaze Services</p>
</footer>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/und/popper.min.js">

</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
  </body>
  </html>