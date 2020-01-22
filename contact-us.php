<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fortisons Website">
    <meta name="author" content="INITS Limited">


    <title>Contact us: Fortisons Nigeria Limited</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <!-- Animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto&display=swap" rel="stylesheet">
    

</head>

<body>

    <!-- menu navigation -->
     <header>
         <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
             <a class="navbar-brand" href="index.html"><img src="assets/img/fortison_logo.png" alt="fortisons logo"
                     class="logo"></a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                 aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarCollapse">
                 <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                         <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="services.html" data-toggle="dropdown">
                             Services
                         </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="onshore-offshore-survey.html">Onshore / Offshore Survey</a>
                             <a class="dropdown-item" href="quality-assurance-quality-control.html">Quality Assurance  &
                                 Quality Control</a>
                             <a class="dropdown-item" href="procurement.html">Procurement</a>
                             <a class="dropdown-item" href="planning.html">Planning</a>
                             <a class="dropdown-item" href="community-relations.html">Community-relations</a>
                             <a class="dropdown-item" href="logistics.html">Logistics</a>
                         </div>

                     </li>

                     <!-- <li class="nav-item">
                         <a class="nav-link " href="projects.html">Projects</a>
                     </li> -->
                     <li class="nav-item">
                         <a class="nav-link " href="sustainability.html">Sustainability</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link " href="about-us.html">About us</a>
                     </li>
                     
                     <li class="nav-item">
                         <a class="nav-link " href="contact-us.html">Contact us</a>
                     </li>
                 </ul>
                 <div class="header_contact mt-2 mt-md-0">
                     <p> +234 (0802) 320-7776</p>
                     <a href=contact-us.php><button class="header_button">Start a project</button></a>
                     
                 </button>
             </div>
         </nav>
     </header>
    <div class="position-relative p-3 p-md-5  banner">
        <div class="container banner-title">
            <h3 class="display-4 font-weight-normal"> Contact us</h3>
            <hr>
            <div>
                <a href="index.html" style="color:#ffffff"> Home/</a> <a href="about-us.html" style="color:#F7CE34"> Contact us</a>
                </div>
            
        </div>
       
    </div>

    
   <!--CONTACT-->
  <section>
     <div class="page-section">
        <div class="container ">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Address</h3>
                            <p>42, Unity Road Ikeja
                                Lagos State
                                Nigeria</p>
                        </div>
                        <div class="col-md-6">
                            <h3>Hotlines:</h3>
                            <p>
                                +234 (0802) 320-7776</p>
                        </div>

                        

                     </div>
                     <div class="mt-5">
                         <div class="row">
                             <div class="col-md-6">
                                 <h3>Email:</h3>
                                 <p>
                                     info@fortisons.com
                                 </p>
                             </div>
                             <div class="col-md-6">
                                 <h3>Connect us</h3>
                                <div class="contact_social_icons">
                                        <div>
                                            <a href="#"><img src="assets/img/fb_col.svg" alt="facebook"></a>
                                        </div>
                                        <div>
                                            <a href="#"><img src="assets/img/twitter_col.svg" alt="twitter"></a>
                                        </div>
                                        <div>
                                            <a href="#"><img src="assets/img/LinkedIn_col.svg" alt="linkedin"></a>
                                        </div>
                                </div>
                                
                        
                             </div>



                         </div>
                     </div>
                        
                </div>
                    
           
                <!-- form -->
                
                <div class="col-md-6 contact-form">
                    <?php require_once('handleSubmit.php') ?>
                    <form class="mt-4 contact-form " method="POST">
                          <h5 class="card-title">How can we help you?</h5>
                         <input name="name" type="text" class="form-control mt-4" id="inputtext" placeholder="Fullname" required>
                         <input name="company_name" type="text" class="form-control mt-4" id="inputtext" placeholder="Company Name" required>
                         <input name="email" type="email" class="form-control mt-4" id="inputEmail" placeholder="Email Address" required>
                         <input name="number" type="number" class="form-control mt-4" id="inputmobileno" placeholder="Mobile No" required>
                         <textarea name="message" class="form-control mt-4" rows="7" id="validationTextarea" placeholder="Message"
                             required></textarea>
                         <button name="submit" type="submit" data-toggle="modal" class="mt-4 ">Submit</button>
                        
    
                    </form>
                    
    
                 </div>
    
    
             </div>
        </div>



     </div>
  </section>

   <!-- MAP -->
   <section>
        <div>
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="100%" height="700px" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=42%2C%20Unity%20Road%20Ikeja%20Lagos%20State%20%20Nigeria&t=&z=11&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                        href="https://www.embedgooglemap.net/blog/best-wordpress-themes/">best wordpress themes</a>
                </div>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 700px;
                        width: 100%;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 700px;
                        width: 100%;
                    }
                </style>
            </div>
        </div>
   </section>
    

 

<footer>
    <div class="">
        <h5>Contact us</h5>
        <div class="mt-3 ">
            <h6>42, Unity Road Ikeja Lagos State
                       <br> Nigeria</h6>
                        <h6>+234 (0802) 320-7776</h6>
                    <div class="social_icons mb-5">
                        <img src="assets/img/facebook.svg">
                        <img src="assets/img/twitter.svg">
                        <img src="assets/img/linkedin.svg">
                        
            
                    </div>
                    
        </div>
        
         </div>
     
         <div>
              <h5>Services</h5>
              <ul class="mt-3">
                 <li><a href="onshore-offshore-survey.html">Onshore / Offshore Survey services</a></li>
                 <li><a href="quality-assurance-quality-control.html">Quality Assurance and Quality Control</a></li>
                 <li><a href="procurement.html">Procurement</a></li>
                 <li><a href="logistics.html">Logistic </a></li>
                 <li><a href="planning.html">Planning</a></li>
              </ul>
             
     
              
     
         </div>
     
         <div>
             <h5>Company</h5>
             <ul class="mt-3">
                 <li><a href="about-us.html">About us</a></li>
                 <li><a href="#">Our People</a></li>
                 <li><a href="#">Our Clients</a></li>
                 <li><a href="#">Career</a></li>
                 
             </ul>
     
     
     
     
         </div>
     
         <p class="mt-5"> 2019 Fortisons Nigeria Limited. Powered by INITS.</p>
   
    </div>
</footer>


































<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

<script src="assets/js/owl.carousel.min.js "></script>
<script src="assets/js/nav-bar.js"></script>
<script src="assets/js/owl-carousel.js"></script>

</body>

</html>