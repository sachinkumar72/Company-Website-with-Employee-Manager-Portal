<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>

    <meta charset="utf-8">
<meta name ="viewport" content= "width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/mystyle.css">
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
<limk href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">


<style>
/* Style the container with a rounded border, grey background and some padding and margin */
.container {
  border: 2px solid #ccc;
  background-color: #eee;
  border-radius: 5px;
  padding: 16px;
  margin: 16px 0;
}

/* Clear floats after containers */
.container::after {
  content: "";
  clear: both;
  display: table;
}

/* Float images inside the container to the left. Add a right margin, and style the image as a circle */
.container img {
  float: left;
  margin-right: 20px;
  border-radius: 50%;
}

/* Increase the font-size of a span element */
.container span {
  font-size: 20px;
  margin-right: 15px;
}

/* Add media queries for responsiveness. This will center both the text and the image inside the container */
@media (max-width: 500px) {
  .container {
    text-align: center;
  }

  .container img {
    margin: auto;
    float: none;
    display: block;
  }
}


/* customer css */
.clients{
  max-width: 500px;
  margin: auto;
  text-align:center;
}

.section-header h3 {
    font-size: 36px;
    color: #283d50;
    text-align: center;
    font-weight: 500;
    position: relative;
}

.section-header p {
    text-align: center;
    margin: auto;
    font-size: 15px;
    padding-bottom: 60px;
    color: #556877;
    width: 50%;
}

#clients {
    padding: 60px 0;
    
}
#clients .clients-wrap {
    border-top: 1px solid #d6eaff;
    border-left: 1px solid #d6eaff;
    margin-bottom: 30px;
}

#clients .client-logo {
    padding: 64px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-right: 1px solid #d6eaff;
    border-bottom: 1px solid #d6eaff;
    overflow: hidden;
    background: #fff;
    height: 160px;
}

#clients img {
    transition: all 0.4s ease-in-out;
}
 




.text-box {
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 5px;
  background-color: orange;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  font-size: 16px;
  text-align: center;
  background-color:#cfa251;"
}





#map-container {
  width: 100%;
  height: 400px;
  margin: 0 auto;
  border: 1px solid #ddd;
}






.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>

</head>
<body>
  

<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-dark gold  ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/LOGO.jpg" alt="Avatar" style="width:250px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">

          <!-- NAV BAR INFORMATION -->
        <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          



        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="services.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SERVICRS
  </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>





          <!-- <a class="nav-link" href="services.php">SERVICES</a> -->
        <!-- </li> -->
        <li class="nav-item">
          <a class="nav-link" href="about.php">ABOUT</a>
        </li>
        <!-- <li class="nav-item"> -->
          <!-- <a class="nav-link" href="portfolio.php">PORTFOLIO</a> -->
        <!-- <li class="nav-item"> -->
          <a class="nav-link" href="contact.php">CONTACTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login/login.php">LOG IN</a>
        </li>
       
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>





<div class="jumbotron jumbotron-fluid text-center">
  <div>
    <h1><img src="images/LOGO.jpg" alt="Avatar" style="width:400px"></h1>
  </div>
  <section class= "my-5">
<div class="py-5">
<h2 style= "color:#cfa251;"class="text-center">About Us</h2>
</div>
<div class="container-fluid">
  <div class="row">
    <div class= "col-lg-6 col-md-6 col-12">
     <img src= "images/aboutimage.jpg" class= "img-fluid" aboutimg width= "130%" >
   </div>
   <div class= "col-lg-6 col-md-6 col-12">
     <h2 style="color:#cfa251;" class="display-4">Blaze Services</h2>
     <p class="py-3">HELLO EVERYONE!!! BLAZE SERVICES, is an organization that provide
serving the best in the industry and offering secure benefits to the clients. We serve
to the customers the best of our client’s requirements. We bridge the gap between 
need and the needy to support them from all over ends. We support people to sustain 
their liabilities and offer them the best to enjoy their life with the best possibilit
their lives. Whether you are a working professional or a student it's your time to glo
with us with the handsome package in the industry based on your honesty and 
capability. For our clients we provide the best support from our end we always try to 
help them in a better manner whether they are looking for any possible requirements.
Blaze Services, started our journey in 2016 as an IT company but now we diversify the 
approach and provide multiple services, we are more than just a web development 
and e-learning platform organization.
We are your one-stop shop for comprehensive solutions that fuel your growth and 
success. From creating websites and online platforms, internship, insurance, and 
education training to delivering engaging learning experiences, our team of experts is
equipped to handle every facet of your digital journey. Whether you're looking to 
establish a powerful online presence, elevate your learning skills, or simply streamli
your operations, we partner with you to understand your unique needs and develop 
customized strategies.</p>
 <a  style= "background-color:#cfa251;"href = "https://vqr.vc/x8jRV0oBE" class="btn btn-primary">Click Here to Know More</a>
   </div>
   
  </div>
</div>
</SECTION>
<section class="d-flex justify-content-center">
<div class="jumbotron jumbotron-fluid text-center ">
  <div>
    <h2 style= "color:#cfa251;">Our Team</h2>
  </div>

<div class="container text-center">
  <img src="images/blaze1.jpg" alt="Avatar" style="width:300px">
  <p><span>MR. PRAKHAR SHRIVASTAVA.</span> COMMANDER-IN-CHIEF.</p>
  <p>He completed his studies at the University of Cambridge England with master's in business 
    administration and started his career in the telecom industry after 2 decades he developed
    rich experience in all monitoring parts of project creation, planning, team handling, research, 
    development, human resources and all kind of administration planning he devote his life to the blaze services
     with the thought of “सफलतां यशः च” means success and fame comes from hard work and pain he performs so many 
     task to make the business successful and secure a connection with n number of national and international client 
     he is one of the most important pillar of the organization and have the responsibility to satisfy the client
      requirement he always believe "more you will work more you will get" and assure all the clients to provide 
      best result to all their clients of blaze services he is also believe in the teamwork and says individual
       employees just a soldier but when all employees will be together as a team then they will be the winners.</p>
</div>

<div class="container">
  <img src="images/blaze2.jpg" alt="Avatar" style="width: 250px">
  <p><span >MRS. KRISHTI KANTH.</span>CHIEF OPERATING OFFICER.</p>
  <p>She completed her B.Tech (bachelor of technology) in mechanical branch and gave her 12+ years’ time  
    to designing drafting and executing all the mechanisms of machines and also doing many research work
     within the country since she is the chief operating officer of the organization now she is taken care 
     the activity of all over the domain and the services and also involves in the new projects and taking 
     care of being all the clients she is very passionate with works and believes in hard work and Always
      deliver  more than expected.</p>
</div>
<div class="container">
  <img src="images/blaze3.jpg" alt="Avatar" style="width:300px">
  <p><span >MR. ROHIT ANAND .</span> BUSINESS HEAD.
</p>
  <p>Rohit Anand Saksena is the business head of Blaze Services he completed his master's 
    from the Indian Institute of Management- Indore (IIM-Indore) he started his career in 
    a small organization he has 10 + years of working experience in business administration
     now he has expertise in business analysis and project management he plays an important
      role in the organisation in the field of chief planning expert business administration,
       client management.</p>

</div>
</section>
<section>
<div class="jumbotron jumbotron-fluid text-center">

   <h2 style= "color:#cfa251;">Awards & Recognition</h2>
   <h5>We are proud to be recognized for our commitment to excellence and dedication to serving our clients.</h5>
   <section class="awards-container">
     <div class="award">
       <img src="images/award1.jpg" alt="Best Technology Award">
       <h3>Best Service Provider Award 2021</h3>
       <p>Lingaya’s University of Bihar</p>
     </div>
     <div class="award">
       <img src="images/award1.jpg" alt="Client Choice Award">
       <h3>Customer Satisfaction Award 2023</h3>
       <!-- <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p> -->
     </div>
     <!-- <div class="award"> -->
       <!-- <img src="images/award1.jpg" alt="Sustainability Award"> -->
       <!-- <h3>Sustainability Award 2023</h3> -->
       <!-- <p>Honored for our commitment to environmental responsibility and sustainable practices.</p> -->
     <!-- </div> -->
   </section>
</section>
</div>

<section class="d-flex justify-content-center">
<div class="jumbotron jumbotron-fluid text-center ">
  <div>
    <h1 style= "color:#cfa251;">Testimonial</h1>
  </div>
<div class="text-center ">
<div class="container ">
  <img src="images/student3.jpg" alt="Avatar" style="width: 200px">
  <p><span >Navneet Singh.</span></p>
  <p>I recommend Blaze Services. It's a pleasure to work with them. Traffic to our
website increased due to SEO plan.</p>
</div>
<div class="container">
  <img src="images/student4.jpeg" alt="Avatar" style="width:200px">
  <p><span >Kenedy Hazarika.</span></p>
  <p>I had a very great experience with the Blaze service…. They are really Good and helpful 
and always ready to help others with good intentions…</p>
</div>
<div class="container">
  <img src="images/student5.avif" alt="Avatar" style="width:200px">
  <p><span >Ankit Singh</span></p>
  <p>It's a very nice and true place to help and support their clients...They believe in their 
concept- CUSTOMER IS first priority.</p>
</div>
<div class="container">
  <img src="images/student6.jpg" alt="Avatar" style="width:200px">
  <p><span > Sayan Alfred.</span></p>
  <p> Excellent organisation for internship or any other services.
</p>
</div>
<div class="container">
  <img src="images/student3.jpg" alt="Avatar" style="width: 200px">
  <p><span >Prabhakar Dev</span></p>
  <p>I've worked with other web designers before and wasn't satisfied with the result. 
From start to finish, my interactions with the Fluid team were professional, stressfree, and I had complete confidence in their delivery abilities.</p>
</div>
<div class="container">
  <img src="images/student4.jpeg" alt="Avatar" style="width:200px">
  <p><span >Steve Heaney</span></p>
  <p>Blaze Services has an inimitable approach towards imparting service to its clients. 
Their key focus is on positive approach rather than negative ones. They were 
successful in covering the entire gamut of the finance field from exhaustive 
research on fundamental and technical fields of stock market, Education, trading. 
The developers are very good and experienced.</p>
</div>
<div class="container">
  <img src="images/student5.avif" alt="Avatar" style="width:200px">
  <p><span >Ravindra Sharma</span></p>
  <p>I was a little nervous about the idea of getting Life insurance and Health insurance 
until Blaze services lead me to Blaze Insurance service and I had the pleasure of 
speaking with their customers executive she was wonderful. She was very patient 
and answered all my questions. She made it a pleasant experience and saved me 
money! Wow!</p>
</div>
<div class="container">
  <img src="images/student6.jpg" alt="Avatar" style="width:200px">
  <p><span >Ravi Verma</span></p>
  <p>
I think that I enjoyed interacting with all the new people the most and seeing 
what they do as well as learning about their own lives and what they look like. It 
was interesting to see our many similarities but also differences. I think this 
internship contributed to my personal and professional development as it has 
taught me many transferable skills that will be of use to me in the future.</p>
</div>
<div class="container">
  <img src="images/student3.jpg" alt="Avatar" style="width: 200px">
  <p><span >Divyata Upadhyay.</span></p>
  <p>Great experience using The Web Surgery. They have helped build a professional 
website and they are always happy to help should I need any alterations. Even 
assisted me with SEO related bits to help get my business up and running.</p>
</div>
<div class="container">
  <img src="images/student4.jpeg" alt="Avatar" style="width:200px">
  <p><span >Ankit Singh.</span></p>
  <p> happy to share my feedback about internship.. it's best and helpful in my web 
development lab and also improving skills</p>
</div>
<div class="container">
  <img src="images/student5.avif" alt="Avatar" style="width:200px">
  <p><span >Neelam Patel.</span></p>
  <p>The people at Blaze Services were friendly and considerate. They make you feel 
important and provide you with great service
.</p>
</div>
<div class="container">
  <img src="images/student6.jpg" alt="Avatar" style="width:200px">
  <p><span >Adarsh Ranjan.</span></p>
  <p>
As usual very helpful, nothing to much trouble and the end result as I envisaged. 
Good price point, you pay for what you get and Blaze Services are full value for 
money.</p>
</div>
<!-- <div class="container"> -->
  <!-- <img src="images/student3.jpg" alt="Avatar" style="width: 200px"> -->
  <!-- <p><span >Rebecca Flex.</span> CEO at Company.</p> -->
  <!-- <p>No one is better than John Doe.</p> -->
<!-- </div> -->
<!-- <div class="container"> -->
  <!-- <img src="images/student4.jpeg" alt="Avatar" style="width:200px"> -->
  <!-- <p><span >Rebecca Flex.</span> CEO at Company.</p> -->
  <!-- <p>No one is better than John Doe.</p> -->
<!-- </div> -->
<!-- <div class="container"> -->
  <!-- <img src="images/student5.avif" alt="Avatar" style="width:200px"> -->
  <!-- <p><span >Rebecca Flex.</span> CEO at Company.</p> -->
  <!-- <p>No one is better than John Doe.</p> -->
<!-- </div> -->
<!-- <div class="container"> -->
  <!-- <img src="images/student6.jpg" alt="Avatar" style="width:200px"> -->
  <!-- <p><span >Rebecca Flex.</span> CEO at Company.</p> -->
  <!-- <p>No one is better than John Doe.</p> -->
<!-- </div> -->
</div>
</section>

<div class="jumbotron jumbotron-fluid text-center d-flex justify-content-center">
<section id="clients" class="section-bg center">

<div class="container">

  <div class="section-header">
    <h3 style= "color:#cfa251;">Our CLients</h3>
    <p>Meet our happy clients</p>
  </div>

  <div class="row no-gutters clients-wrap clearfix wow fadeInUp " style="visibility: visible; animation-name: fadeInUp;">
 
    <div class="col-lg-3 col-md-4 col-xs-6">
      <div class="client-logo">
        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460149/abof.png" class="img-fluid" alt="">
      </div>
    </div>
    
    <div class="col-lg-3 col-md-4 col-xs-6">
      <div class="client-logo">
        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460224/cropped-cropped-20170720-lucuLogo-squ2-e1500543540803.png" class="img-fluid" alt="">
      </div>
    </div>
  
    <div class="col-lg-3 col-md-4 col-xs-6">
      <div class="client-logo">
        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460269/104840a62d46c05d285762857fecb61a.png" class="img-fluid" alt="">
      </div>
    </div>
    
    <div class="col-lg-3 col-md-4 col-xs-6">
      <div class="client-logo">
        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460358/client-4.png" class="img-fluid" alt="">
      </div>
    </div>
    
    <div class="col-lg-3 col-md-4 col-xs-6">
      <div class="client-logo">
        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460379/client-5.png" class="img-fluid" alt="">
      </div>
    </div>
  
    <div class="col-lg-3 col-md-4 col-xs-6">
      <div class="client-logo">
        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460398/client-6.png" class="img-fluid" alt="">
      </div>
    </div>
    
    <div class="col-lg-3 col-md-4 col-xs-6">
      <div class="client-logo">
        <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460418/client-7.png" class="img-fluid" alt="">
      </div>
    </div>
    
    <div class="col-lg-3 col-md-4 col-xs-6">
      <div class="client-logo">
        <img src="https://bootstrapmade.com/demo/themes/NewBiz/img/clients/client-8.png" class="img-fluid" alt="">
      </div>
    </div>
</div>
  </div>

</div>

</section>
<section>
<div style= "background-color:#cfa251;" class="text-box">
<h3>▪ 700+ Client’s all-over India and we also operate in foreign countries.<h3>
</div>

<div class="text-box">
<h3>▪ 21% Stakeholder in education tech services.</h3>
</div>

<div class="text-box">
<h3>▪ 28% Stakeholders in retail services.</h3>
</div>

<div class="text-box">
<h3>▪ 40% Stakeholder in electronic services.<h3>
</div>

<div class="text-box">
<h3>▪ 16% Stakeholders incorporate T&P services.<h3>
</div>

<div class="text-box">
<h3>▪ 21% Stakeholders in miscellaneous services.<h3>
</div>


</div>
</section>

<sectin>
<div id="map-container" class="text-center">
  <iframe src="images/map.jpg" width="600" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

</section>
















</section>
<footer>
  <p style="color:#cfa251;"class="p-3 bg-dark  text-center">Blaze Services</p>
</footer>



</div>
</body>


</html>
