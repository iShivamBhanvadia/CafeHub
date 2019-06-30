<?php
session_start();

if(isset($_SESSION['id'])) {
  echo $_SESSION['id'];

  echo $_SESSION['table_no'];
}
?>

<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Cafe Menu | Home</title>


    <!-- Favicon -->

    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

 
   <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">

    <!-- Bootstrap -->
   
 <link href="assets/css/bootstrap.css" rel="stylesheet">   

    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">   
 
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css"> 
  
     <!-- Gallery Lightbox -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">  
   

    <!-- Main style sheet -->
    <link href="style.css" rel="stylesheet">   
 

   
    <!-- Google Fonts -->

    <!-- Prata for body  -->
  
  <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
 
   <!-- Tangerine for small title -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   

    <!-- Open Sans for title -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
 
   
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
 
     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  
  <![endif]-->

 
 </head>

  <body>


  <!--START SCROLL TOP BUTTON -->
  
  <a class="scrollToTop" href="#">
 
     <i class="fa fa-angle-up"></i>

    </a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->

  <header id="mu-header"> 
 
    <nav class="navbar navbar-default mu-main-navbar" role="navigation"> 
 
      <div class="container">

        <div class="navbar-header">

          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

          </button>

 
         <!-- LOGO --> 
      

           <!--  Text based logo  -->
 
         <a class="navbar-brand" href="index.html">Cafe <span>Hub</span> </a> 


		      <!--  Image based logo  -->
 
         <!-- <a class="navbar-brand" href="index.html">
<img src="assets/img/logo.png" alt="Logo img"></a>  -->
         

        </div>

        <div id="navbar" class="navbar-collapse collapse">

          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">

            <li><a href="index.php">HOME</a></li>
     
       <li><a href="#mu-about-us">ABOUT US</a></li> 
                      
            <li><a href="#mu-restaurant-menu">MENU</a></li>  
                     
            <li><a href="#mu-reservation">RESERVATION</a></li>  
                     
            <li><a href="#mu-gallery">GALLERY</a></li>
 
           
         <li><a href="#mu-contact">CONTACT</a></li> 
  
        </ul>                            
       
 </div><!--/.nav-collapse -->       
      </div>    
      
    </nav>
 
  </header>

  <!-- End header section -->
 


  <!-- Start slider  -->

  <section id="mu-slider">

    <div class="mu-slider-area">
 

      <!-- Top slider -->

      <div class="mu-top-slider">


        <!-- Top slider single slide -->

        <div class="mu-top-slider-single">

          <img src="assets/img/slider/1.jpeg" alt="img">

          <!-- Top slider content -->
 
         <div class="mu-top-slider-content">

            <span class="mu-slider-small-title">Welcome</span>

            <h2 class="mu-slider-title">To The Cafe hub</h2>
          
  
          <a href="#mu-reservation" class="mu-readmore-btn mu-reservation-btn">BOOK A TABLE</a>

          </div>

          <!-- / Top slider content -->

        </div>

        <!-- / Top slider single slide -->
    

         <!-- Top slider single slide -->

        <div class="mu-top-slider-single">
   
       <img src="assets/img/slider/2.jpeg" alt="img">

          <!-- Top slider content -->
  
        <div class="mu-top-slider-content">

            <span class="mu-slider-small-title">The Cafe Hub</span>
 <br><br><br><br>             

           <a href="#mu-reservation" class="mu-readmore-btn mu-reservation-btn">BOOK A TABLE</a>

          </div>
        
  <!-- / Top slider content -->

        </div>
        
<!-- / Top slider single slide --> 


        <!-- Top slider single slide -->

        <div class="mu-top-slider-single">

          <img src="assets/img/slider/3.jpeg" alt="img">

          <!-- Top slider content -->
          
<div class="mu-top-slider-content">

            <span class="mu-slider-small-title">Delicious</span>
 
           <h2 class="mu-slider-title">Spicy Masalas</h2>

            <br>
          
            <a href="#mu-reservation" class="mu-readmore-btn mu-reservation-btn">BOOK A TABLE</a>
  
        </div>
      
    <!-- / Top slider content -->

        </div>
 
       <!-- / Top slider single slide -->
   

      </div>

    </div>
  
</section>

  <!-- End slider  -->

 
 <!-- Start About us -->
  
<section id="mu-about-us">
 
   <div class="container">

      <div class="row">
   
     <div class="col-md-12">
 
         <div class="mu-about-us-area">


            <div class="mu-title">
 
             <span class="mu-subtitle">About Us</span>

              
            </div>


            <div class="row">

              <div class="col-md-6">

               <div class="mu-about-us-left"> 
    
                <img src="assets/img/about-us.jpg" alt="img">
           
                </div>

              </div>
             
 <div class="col-md-6">

                 <div class="mu-about-us-right">

                 <p>A cafe hub is type of food service location in which there little or nor waiting staff table service,whether a restaurant or within an institution such as larger office.Insteadof table service there are food serving counter/stalls,customer take the food that they desire as they walk along,placing on tray.</p>
  
                </div>
      
        </div>
         
   </div>
       
   </div>
   
     </div>
 
     </div>
  
  </div>
  
</section>
 
 <!-- End About us -->

 
 <!-- Start Counter Section -->

  <section id="mu-counter">
 
   <div class="mu-counter-overlay">
  
    <div class="container">
  
      <div class="row">
   
       <div class="col-md-12">
    
        <div class="mu-counter-area">

   
           <ul class="mu-counter-nav">

 
               <li class="col-md-3 col-sm-3 col-xs-12">

                  <div class="mu-single-counter">
        
            <span>Fresh</span>
 
                   <h3><span class="counter-value" data-count="150">0</span><sup>+</sup></h3>
 
                   <p>Breakfast Items</p>
 
                 </div>
 
               </li>

  
              <li class="col-md-3 col-sm-3 col-xs-12">
 
                 <div class="mu-single-counter">
  
                  <span>Delicious</span>

                    <h3><span class="counter-value" data-count="60">0</span><sup>+</sup></h3>

                    <p>Lunch Items</p>
                  </div>
  
              </li>

              
   <li class="col-md-3 col-sm-3 col-xs-12">
   
               <div class="mu-single-counter">
 
                   <span>Hot</span>
 
                    <h3><span class="counter-value" data-count="45">0</span><sup>+</sup></h3>

                    <p>Coffee Items</p>
 
                 </div>
  
              </li>

 
                <li class="col-md-3 col-sm-3 col-xs-12">
 
                 <div class="mu-single-counter">
 
                   <span>Satisfied</span>
 
                   <h3><span class="counter-value" data-count="6560">0</span><sup>+</sup></h3>

                    <p>Customers</p>

                  </div>
  
              </li>

 
             </ul>

 
           </div>
  
        </div>
    
    </div>
   
   </div>
   
 </div>
 
 </section>
 
 <!-- End Counter Section --> 


  <!-- Start Restaurant Menu -->
 
 <section id="mu-restaurant-menu">
 
   <div class="container">

      <div class="row">
   
     <div class="col-md-12">
 
         <div class="mu-restaurant-menu-area">

 
           <div class="mu-title">
   
           <span class="mu-subtitle">Our Menu</span>
 
                        </div>
            

            <div class="mu-restaurant-menu-content">
  
            <ul class="nav nav-tabs mu-restaurant-menu">
  
              <li class="active"><a href="#breakfast" data-toggle="tab">Breakfast</a></li>

                <li><a href="#meals" data-toggle="tab">Meals</a></li>
 
               <li><a href="#snacks" data-toggle="tab">Snacks</a></li>
  
              <li><a href="#desserts" data-toggle="tab">Desserts</a></li>
 
               <li><a href="#drinks" data-toggle="tab">Drinks</a></li>
 
             </ul>

 
             <!-- Tab panes -->
 
             <div class="tab-content">

                <div class="tab-pane fade in active" id="breakfast">
  
                <div class="mu-tab-content-area">
 
                   <div class="row">

        
              <div class="col-md-6">
    
                    <div class="mu-tab-content-left">
 
                         <ul class="mu-menu-item-nav">
 
                           <li>
                  
            <div class="media">
         
                       <div class="media-left">
     
                             <a href="#">
        
                            <img class="media-object" src="assets/img/menu/b1.jpg" alt="img">
 
                                 </a>
    
                            </div>
 
                               <div class="media-body">
  
                                <h4 class="media-heading">
<a href="#">Thepla Masala-Dahi</a></h4>
   
                               <span class="mu-menu-price">₹40.00</span>
<br> 
                                
  <input type="button" class="btn-primary" <?php
if(isset($_SESSION['id'])) 
{ 
  // echo $_SESSION['id'];?>
onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','5')"
 <?php }else{ ?>
onclick="add_data()"
<?php
}
?> name="Order" value="Order Now">

                               
 </div>
                             
 </div>
                            
</li>
                          
   <li>
                             
 <div class="media">
                          
      <div class="media-left">
          
                        <a href="#">
  
                                  <img class="media-object" src="assets/img/menu/b2.jpg" alt="img">
 
                                 </a>
                
                </div>
                               
 <div class="media-body">
                              
    <h4 class="media-heading"><a href="#">Masala Dosa</a></h4>
 

                                 <span class="mu-menu-price">₹70.00</span><br>
   
                                 <input type="button" class="btn-primary"  name="Order"
 <?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>
onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','6')"
 <?php }else{ ?>
onclick="add_data()"
<?php
}
?> value="Order Now">
 
                               </div>
        
                      </div>
 
                           </li>
 
                            <li>

                             <div class="media">
 
                               <div class="media-left">
  
                                <a href="#">
   
                                 <img class="media-object" src="assets/img/menu/b3.jpg" alt="img">
 
                                 </a>
 
                               </div>
  
                              <div class="media-body">


                                  <h4 class="media-heading">
<a href="#">Mix Fast</a></h4>
                                
  <span class="mu-menu-price">₹80.00</span><br>

                                 <input type="button" class="btn-primary" name="Order" <?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>
onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','8')" <?php }else{ ?>
onclick="add_data()"
<?php
}
?> value="Order Now">
  
                              </div>
 
                             </div>
 
                           </li>
 
                         </ul> 
  
                        </div>
 
                     </div>

     
                <div class="col-md-6">
 
                      <div class="mu-tab-content-right">

                          <ul class="mu-menu-item-nav">
  
                          <li>
                     
         <div class="media">
            
                    <div class="media-left">
 
                                 <a href="#">
  
                                  <img class="media-object" src="assets/img/menu/b4.jpg" alt="img">
 
                                 </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Idli Sambhar</a></h4>
                                  <span class="mu-menu-price">₹50.00</span>
                                  <br>
                                  <input type="button" class="btn-primary"<?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>
onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','4')" <?php }else{ ?>
onclick="add_data()"
<?php
}
?> name="Order" value="Order Now">
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
 
                               <div class="media-left">

                                  <a href="#">
  
                                  <img class="media-object" src="assets/img/menu/b5.jpg" alt="img">

                                  </a>

                                </div>
 
                               <div class="media-body">
 
                                 <h4 class="media-heading"><a href="#">Chai-Poha</a></h4>

                                  <span class="mu-menu-price">₹30.00</span>

                                  <br>                                 <input type="button" class="btn-primary" <?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>
onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','7')" <?php }else{ ?>
onclick="add_data()"
<?php
}
?> name="Order" value="Order Now">
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/b6.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Fried Rice</a></h4>

                                  <span class="mu-menu-price">₹40.00</span>
 
                                 <br>
                                 <input type="button" class="btn-primary" 
<?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>
onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','9')" 
<?php }else{ ?>
onclick="add_data()"
<?php
}
?> name="Order" value="Order Now">
 
                               </div>
                            
  </div>
                         
   </li>
                     
     </ul>   
                
       </div>
                    
 </div>

                   
</div>
                
 </div>
              
  </div>

             
   <div class="tab-pane fade" id="meals">
  
                <div class="mu-tab-content-area">

                    <div class="row">

             
         <div class="col-md-6">

                        <div class="mu-tab-content-left">
 
                         <ul class="mu-menu-item-nav">
  
                          <li>
                  
            <div class="media">
           
                     <div class="media-left">

                                  <a href="#">
  
                                  <img class="media-object" src="assets/img/menu/i1.jpg" alt="img">

                                  </a>
                                
</div>
                                
<div class="media-body">

                        
          <h4 class="media-heading"><a href="#">South Indian Dish</a></h4>
 
                                 <span class="mu-menu-price">₹130.00</span>
 
                                 <br>
<input type="button" class="btn-primary" name="Order" 
<?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>

onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','10')" <?php }else{ ?>
onclick="add_data()"
<?php
}
?> value="Order Now">
  
                              </div>
  
                            </div>
  
                          </li>
   
                          <li>
 
                             <div class="media">
     
                           <div class="media-left">
  
                                <a href="#">
  
                                  <img class="media-object" src="assets/img/menu/i2.jpg" alt="img">

                                  </a>
            
                    </div>
                 
               <div class="media-body">
     
                             <h4 class="media-heading"><a href="#">Gujarati Dish</a></h4>

                                  <span class="mu-menu-price">₹110.00</span>
                                  
<br>
<input type="button" class="btn-primary" name="Order"
 <?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>
onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','12')" <?php }else{ ?>
onclick="add_data()"
<?php
}
?> value="Order Now">
              
                  </div>
                       
       </div>
                           
 </li>
                           
  <li>
                             
 <div class="media">
                       
         <div class="media-left">
        
                          <a href="#">
    
                                <img class="media-object" src="assets/img/menu/i3.jpg" alt="img">

                                  </a>
                          
      </div>
                            
    <div class="media-body">
        
                          <h4 class="media-heading">Mix Dish<a href="#"></a></h4>

                                  <span class="mu-menu-price">₹120.00</span>
     
                            <br>
<input type="button" class="btn-primary" name="Order" <?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>
onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','14')" <?php }else{ ?>
onclick="add_data()"
<?php
}
?> value="Order Now">
  
                             
 </div>
                             
 </div>
                           
 </li>
                          
</ul>   
                       
 </div>
                      
</div>

                    
 <div class="col-md-6">
    
                   <div class="mu-tab-content-right">
 
                         <ul class="mu-menu-item-nav">
 
                           <li>
                       
       <div class="media">
                            
    <div class="media-left">
                         
         <a href="#">
                                 
   <img class="media-object" src="assets/img/menu/i4.jpg" alt="img">
 
                                 </a>
                       
         
</div>

                                <div class="media-body">
 
                                 <h4 class="media-heading"><a href="#">Rajma Chaval</a></h4>
  
                                <span class="mu-menu-price">₹75.00</span>

                                 <br><input type="button" class="btn-primary" name="Order"
 <?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>

onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','11')" 
<?php }else{ ?>
onclick="add_data()"
<?php
}
?> value="Order Now">

                                </div>
     
                         </div>
         
                   </li>
          
                   <li>
          
                    <div class="media">
 
                               <div class="media-left">

                                  <a href="#">
   
                                 <img class="media-object" src="assets/img/menu/i5.jpg" alt="img">

                                  </a>
                               
 </div>
                              
  <div class="media-body">
      
                            <h4 class="media-heading"><a href="#">Paneer Tikka</a></h4>

                                  <span class="mu-menu-price">₹110.00</span>
          
                        <br>
<input type="button" class="btn-primary" name="Order"
 <?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>

onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','13')" 
<?php }else{ ?>
onclick="add_data()"
<?php
}
?> value="Order Now">

                                </div>

                              </div>
  
                          </li>

                             <li>

                              <div class="media">

                                <div class="media-left">

                                  <a href="#">
         
                           <img class="media-object" src="assets/img/menu/i6.jpg" alt="img">
   
                               </a>
                    
            </div>
                
            
    <div class="media-body">

                                  <h4 class="media-heading"><a href="#">Bhindi Masala</a></h4>
 
                                 <span class="mu-menu-price">₹80.00</span>
       
            <br>
<input type="button" class="btn-primary" name="Order" 
<?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>

onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','15')"
 <?php }else{ ?>
onclick="add_data()"
<?php
}
?> value="Order Now">
  
                              </div>
                          
    </div>
                        
    </li>
            
              </ul>
   
                       </div>
 
                    </div>

   
                </div>
       
          </div>
        
        </div>

         
       <div class="tab-pane fade" id="snacks">
 
                 <div class="mu-tab-content-area">
  
                  <div class="row">

         
             <div class="col-md-6">
   
                     <div class="mu-tab-content-left">
  
                        <ul class="mu-menu-item-nav">
 
                           <li>
                  
            <div class="media">
            
                    <div class="media-left">
  
                                <a href="#">
  
                                  <img class="media-object" src="assets/img/menu/s1.jpg" alt="img">
 
                                 </a>

                                </div>

                                <div class="media-body">

                                  <h4 class="media-heading"><a href="#">Samosa Dish(2 pi.)</a></h4>
   
                               <span class="mu-menu-price">₹40.00</span>
 
                <br>
<input type="button" class="btn-primary" name="Order" 
<?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>
onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','16')" 
<?php }else{ ?>
onclick="add_data()"
<?php
}
?> value="Order Now">
       
                         </div>
                          
    </div>
                           
 </li>
                         
    <li>
              
                <div class="media">
   
                             <div class="media-left">
  
                                <a href="#">
      
                              <img class="media-object" src="assets/img/menu/s2.jpg" alt="img">
 
                                 </a>
      
                          </div>
         
                       <div class="media-body">

                                  <h4 class="media-heading"><a href="#">Onion Bhujiya</a></h4>
 
                                 <span class="mu-menu-price">₹30.00</span>
     
                    <br>
<input type="button" class="btn-primary" name="Order"
 <?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>

onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','17')" 
<?php }else{ ?>
onclick="add_data()"
<?php
}
?> value="Order Now">

                                </div>
 
                             </div>
                           
 </li>

                             <li>
   
                           <div class="media">

                                <div class="media-left">
 
                                 <a href="#">
     
                               <img class="media-object" src="assets/img/menu/s3.jpg" alt="img">

                                  </a>
                               
 </div>
                               
 <div class="media-body">

                                  <h4 class="media-heading"><a href="#">Batata Vada</a></h4>

                                  <span class="mu-menu-price">₹40.00</span>

      <br>
<input type="button" class="btn-primary" name="Order" <?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>

onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','18')" <?php }else{ ?>

onclick="add_data()"
<?php
}
?> value="Order Now">
                           
     </div>

                              </div>

                            </li>

                          </ul>
   
                        </div>

                      </div>


                     <div class="col-md-6">

                       <div class="mu-tab-content-right">

                          <ul class="mu-menu-item-nav">

                            <li>
                             
 <div class="media">
                                
<div class="media-left">
                        
          <a href="#">
                
                    <img class="media-object" src="assets/img/menu/s4.jpg" alt="img">
  
                                </a>
                          
      </div>
                               
 <div class="media-body">
              
                    <h4 class="media-heading"><a href="#">Garlic Bread</a></h4>

                                  <span class="mu-menu-price">₹40.85</span>

          <br>
<input type="button" class="btn-primary" name="Order"
 <?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>
onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','19')"
 <?php }else{ ?>
onclick="add_data()"
<?php
}
?> value="Order Now">
    
                            </div>
                      
        </div>
                            
</li>
                             
<li>
                           
   <div class="media">
    
                            <div class="media-left">
  
                                <a href="#">
 
                                   <img class="media-object" src="assets/img/menu/s5.jpg" alt="img">

                                  </a>
                                
</div>
                                
<div class="media-body">
                                
  <h4 class="media-heading"><a href="#">Dahi-Handva</a></h4>
 
                                 <span class="mu-menu-price">₹60.00</span>

              <br>
<input type="button" class="btn-primary" name="Order"
 <?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>

onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','20')" 
<?php }else{ ?>
onclick="add_data()"

<?php
}
?> value="Order Now">
       
                         </div>

                              </div>

                            </li>
      
                       <li>

                              <div class="media">

                                <div class="media-left">

                                  <a href="#">
         
                           <img class="media-object" src="assets/img/menu/s6.jpg" alt="img">
   
                               </a>
                             
   </div>
                                
<div class="media-body">
               
                   <h4 class="media-heading"><a href="#">Uttapam</a></h4>
 
                                 <span class="mu-menu-price">₹50.00</span>

                  <br><input type="button" class="btn-primary" name="Order" <?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>
onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','21')" <?php }else{ ?>
onclick="add_data()"
<?php
}
?> value="Order Now">
                                </div>
                              </div>
                            </li>
                          </ul>   
                       </div>
                     </div>

                   </div>
                 </div>
                </div>

                <div class="tab-pane fade" id="desserts">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            <li>
                             
 <div class="media">

                                <div class="media-left">
 
                                 <a href="#">
    
                                <img class="media-object" src="assets/img/menu/c1.jpg" alt="img">

                                  </a>
                             
   </div>
                              
  <div class="media-body">
        
                          <h4 class="media-heading"><a href="#">Strowberry Ice-Bowl</a></h4>

                                  <span class="mu-menu-price">₹60.00</span>

                    <br>
<input type="button" class="btn-primary" name="Order" 
<?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>

onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','22')" 
<?php }else{ ?>
onclick="add_data()"
<?php
}
?> value="Order Now">

                                </div>
                       
       </div>

                            </li>

                             <li>

                              <div class="media">

                                <div class="media-left">

                                  <a href="#">
 
                                   <img class="media-object" src="assets/img/menu/c2.jpg" alt="img">
 
                                 </a>
                          
      </div>
                             
   <div class="media-body">
            
                      <h4 class="media-heading"><a href="#">Vanila Con</a></h4>
 
                                 <span class="mu-menu-price">₹20.00</span>
 
             <br>
<input type="button" class="btn-primary" name="Order" 
<?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>
onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','23')" <?php }else{ ?>
onclick="add_data()"
<?php
}
?>value="Order Now">
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/c3.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Choco Dry</a></h4>
                                  <span class="mu-menu-price">₹80.00</span>
                                  <br>
<input type="button" class="btn-primary" name="Order" 
<?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>

onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','24')" 
<?php }else{ ?>
onclick="add_data()"
<?php
}
?> value="Order Now">

                                </div>

                              </div>
  
                          </li>

                          </ul>
   
                        </div>

                      </div>


                     <div class="col-md-6">

                       <div class="mu-tab-content-right">
 
                         <ul class="mu-menu-item-nav">

                            <li>

                              <div class="media">

                                <div class="media-left">
 
                                 <a href="#">

                                    <img class="media-object" src="assets/img/menu/c4.jpg" alt="img">

                                  </a>
                              
  </div>
           
                     <div class="media-body">

                                  <h4 class="media-heading"><a href="#">Chocolate Cup</a></h4>
 
                                 <span class="mu-menu-price">₹70.00</span>

                   <br>
<input type="button" class="btn-primary" name="Order" 
<?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>

onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','25')" <?php }else{ ?>
onclick="add_data()"
<?php
}
?> value="Order Now">
                                </div>
                              </div>
                            </li>
                             <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="assets/img/menu/c5.jpg" alt="img">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#">Chocolate Special</a></h4>
                                  <span class="mu-menu-price">₹110.00</span>
                                  
<br>
<input type="button" class="btn-primary" name="Order" 
<?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>

onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','26')" 
<?php }else{ ?>
onclick="add_data()"
<?php
}
?> value="Order Now">

                                </div>

                              </div>

                            </li>

                             <li>

                              <div class="media">
 
                               <div class="media-left">

                                  <a href="#">

                                    <img class="media-object" src="assets/img/menu/c6.jpg" alt="img">

                                  </a>
 
                               </div>

                                <div class="media-body">
     
                             <h4 class="media-heading"><a href="#">Great Browni</a></h4>
   
                               <span class="mu-menu-price">₹80.00</span>
   
         <br>
<input type="button" class="btn-primary" name="Order" <?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>

onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','27')" 
<?php }else{ ?>
onclick="add_data()"
<?php
}
?> value="Order Now">

                                </div>
  
                            </div>
    
                        </li>
       
                   </ul>   
       
                </div>
          
           </div>

             
      </div>
               
  </div>
              
  </div>

              
  <div class="tab-pane fade" id="drinks">
  
                <div class="mu-tab-content-area">

                    <div class="row">

            
          <div class="col-md-6">
              
          <div class="mu-tab-content-left">
 
                         <ul class="mu-menu-item-nav">
   
                         <li>
                      
        <div class="media">
                      
          <div class="media-left">
          
                        <a href="#">
      
                              <img class="media-object" src="assets/img/menu/item-9.jpg" alt="img">
 
                                 </a>
                               
 </div>
                                <div class="media-body">

                                  <h4 class="media-heading">
<a href="#">Cherry Fudina</a></h4>
                                 
 <span class="mu-menu-price">₹40.00</span>
                    
             <br>
<input type="button" class="btn-primary" name="Order" <?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>

onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','28')" 
<?php }else{ ?>
onclick="add_data()"
<?php
}
?> value="Order Now">
 
                               </div>
                         
     </div>
                          
  </li>
                             
<li>
                             
 <div class="media">
          
                      <div class="media-left">
 
                                 <a href="#">
 
                                   <img class="media-object" src="assets/img/menu/item-10.jpg" alt="img">
 
                                 </a>
                               
 </div>
                                <div class="media-body">
 
                                 <h4 class="media-heading"><a href="#">Watermelon Masala</a></h4>
  
                                <span class="mu-menu-price">₹60.00</span>
          
                        <br>
<input type="button" class="btn-primary" name="Order" <?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>

onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','29')" <?php }else{ ?>

onclick="add_data()"
<?php
}
?> value="Order Now">

                                </div>
 
                             </div>
 
                           </li>
 
                            <li>
   
                           <div class="media">
 
                               <div class="media-left">
  
                                <a href="#">
          
                          <img class="media-object" src="assets/img/menu/m1.jpg" alt="img">
 
                                 </a>
                               
 </div>
                               
 <div class="media-body">
          
                        <h4 class="media-heading"><a href="#">Strowbarry Thik</a></h4>
  
                                <span class="mu-menu-price">₹80.00</span>
   
                              <br>
<input type="button" class="btn-primary" name="Order" 
<?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>

onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','30')" 
<?php }else{ ?>
onclick="add_data()"
<?php
}
?> value="Order Now">
                     
           </div>
                     
         </div>
                   
         </li>
                 
         </ul>   
             
           </div>
           
           </div>

          
           <div class="col-md-6">
 
                      <div class="mu-tab-content-right">

                          <ul class="mu-menu-item-nav">
 
                           <li>
         
                     <div class="media">
   
                             <div class="media-left">

                                  <a href="#">
     
                               <img class="media-object" src="assets/img/menu/m2.jpg" alt="img">
   
                               </a>
                            
    </div>
                              
  <div class="media-body">
     
                             <h4 class="media-heading"><a href="#">Fruit Bear</a></h4>
 
                                 <span class="mu-menu-price">₹40.00</span>
 
                               <br>
<input type="button" class="btn-primary" name="Order" 
<?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>

onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','31')" 
<?php }else{ ?>
onclick="add_data()"
<?php
}
?> value="Order Now">
 
                               </div>
                  
            </div>
                          
  </li>
                        
     <li>
                             
 <div class="media">
                   
             <div class="media-left">
      
                            <a href="#">
   
                                 <img class="media-object" src="assets/img/menu/m3.jpg" alt="img">

                                  </a>
                
                </div>
                             
   <div class="media-body">
      
                            <h4 class="media-heading"><a href="#">Cola Cola</a></h4>
 
                                 <span class="mu-menu-price">₹30.00</span>
  
                               <br>
<input type="button" class="btn-primary" name="Order" <?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>

onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','32')" 
<?php }else{ ?>
onclick="add_data()"
<?php
}
?> value="Order Now">

                                </div>
                             
 </div>
                           
 </li>
                          
   <li>
                              
<div class="media">
                               
 <div class="media-left">
                         
         <a href="#">
                              
      <img class="media-object" src="assets/img/menu/m4.jpg" alt="img">

                                  </a>
                     
           </div>
                               
 <div class="media-body">
                      
            <h4 class="media-heading"><a href="#">Lemon</a></h4>

                                  <span class="mu-menu-price">₹20.00</span>
 
                                <br>
<input type="button" class="btn-primary" name="Order" <?php
if(isset($_SESSION['id'])) { 
  // echo $_SESSION['id'];?>

onclick="place_order('<?php echo $_SESSION['id'] ?>','<?php echo $_SESSION['table_no'] ?>','33')"
 <?php }else{ ?>
onclick="add_data()"
<?php
}
?> value="Order Now">

                                </div>
                         
     </div>
                          
  </li>
                          
</ul>   
                      
 </div>
                     
</div>

                   
</div>
                
 </div>
              
  </div>
             
 </div>
            
</div>
          
</div>
        
</div>
      
</div>
    
</div>
  
</section>
 
 <script>
  
                          
function place_order(pr_id, table_no, order)
{

                           
 $.ajax({ url: 'place_order.php',
  
                          data: {pr_id: pr_id, table_no: table_no, order: order},
   
                         type: 'post',
         
                   success: function(output)
 {
                            //$("#display").html(output);
  
                         // alert ("Request Accepted" +output);
 
                          alert ( output);
                
            }
                        
    });

                         
   }; 
                           
 </script>
                            
<script>
               
             function add_data()
{

                            // $.ajax({ url: 'place_order.php',
 
                           // data: {pr_id: pr_id, order: order},
     
                       // type: 'post',
                        
    // success: function(output)
 {
                           
 //$("#display").html(output);
  
                         // alert ("Request Accepted" +output);
 
                          alert ("register your data");
   
                         // }
       
                     // });

   
                         }; 
 
                           </script>

  <!-- End Restaurant Menu -->

 
 <!-- Start Reservation section -->
 
 <section id="mu-reservation">

    <div class="container">

      <div class="row">

        <div class="col-md-12">

          <div class="mu-reservation-area">


            <div class="mu-title">
         
     <span class="mu-subtitle">Place An</span>

              <h2>Order</h2>

            </div>


            <div class="mu-reservation-content">

              <p>Fill up required data to place an order, here</p>


              <div class="col-md-6">

                <div class="mu-reservation-left">

                  <form class="mu-reservation-form" method="post" action="reservation.php">

                    <div class="row">
 
                     <div class="col-md-12">
  
                      <div class="form-group"> 
                      
                          <input type="text" name="name" class="form-control" placeholder="Full Name">

                        </div>

                      </div>
 
                     <div class="col-md-12">

                        <div class="form-group"> 
                       
                          <input type="email" name="email" class="form-control" placeholder="Email">

                        </div>
 
                     </div>

                      <div class="col-md-12">

                        <div class="form-group">  
                      
                          <input type="text" name="contact" class="form-control" placeholder="Phone Number">

                        </div>

                      </div>

                      <div class="col-md-12">

                        <div class="form-group">

                          <select class="form-control" name="pax">
 
                           <option value="0">How Many?</option>

                            <option value="1 Person">1 Person</option>

                            <option value="2 People">2 People</option>

                            <option value="3 People">3 People</option>

                            <option value="4 People">4 People</option>

                            <option value="5 People">5 People</option>

                            <option value="6 People">6 People</option>

                            <option value="7 People">7 People</option>
 
                           <option value="8 People">8 People</option>

                            <option value="9 People">9 People</option>

                            <option value="10 People">10 People</option>


                          </select>            
          
                        </div>
     
                 </div>
                     
 <div class="col-md-12">
                       
 <div class="form-group">
  
                        <!-- <input type="text" class="form-control" name="date" id="datepicker" placeholder="Date">               -->
    
                      <!-- <input type="text" class="form-control"   placeholder="Table No">  -->
   
                       <select class="form-control" name="table_no" placeholder="Table No" >
 
                           <option value="0">Table No.</option>
       
                     <option value="1">1</option>
         
                   <option value="2">2</option>
    
                        <option value="3">3</option>
  
                          <option value="4">4</option>
 
                           <option value="5">5</option>
 
                           <option value="6">6</option>
  
                          <option value="7">7</option>
   
                         <option value="8">8</option>
 
                           <option value="9">9</option>

                            <option value="10">10</option>
 
                         </select>             
    
                    </div>
                  
    </div>
                      
<div class="col-md-12">
    
                    <div class="form-group">

                          <textarea class="form-control" name="msg" cols="30" rows="10" placeholder="Your Message"></textarea>
 
                       </div>
  
                    </div>
 
                     <button type="submit" class="mu-readmore-btn">Place Order</button>

                    </div>
   
               </form>   
 
                </div>
 
             </div>

   
           <div class="col-md-5 col-md-offset-1">
  
              <div class="mu-reservation-right">
 
                 <div class="mu-opening-hour">
 
                   <h2>Opening Hours</h2>
     
                 <ul class="list-unstyled">
 
                       <li>
                
            <p>Monday &amp; Tuesday</p>
   
                         <p>9:00 AM - 4:00 PM</p>

                        </li>
                    
    <li>
                           
 <p>Wednesday &amp; Thursday</p>
 
                           <p>9:00 AM - Midnight</p>
  
                      </li>
                    
    <li>
                            
<p>Friday &amp; Saturday</p>
  
                          <p>9:00 AM - Midnight</p>
 
                       </li>
                
        <li>
                            
<p>Sunday</p>
                          
  <p>9:00 AM - 11:00 PM</p>
               
         </li>
                     
 </ul>
                  
</div>
               
 </div>
            
  </div>
          
  </div>
         
 </div>
        
</div>
      
</div>
    
</div>
 
 </section>
  
  <!-- End Reservation section -->


  <!-- Start Gallery -->

  <section id="mu-gallery">
 
   <div class="container">
 
     <div class="row">

        <div class="col-md-12">

          <div class="mu-gallery-area">


            <div class="mu-title">

              <span class="mu-subtitle">Discover</span>

              <h2>Our Gallery</h2>

            </div>

            
<div class="mu-gallery-content">
 
           
              <!-- Start gallery image -->

              <div class="mu-gallery-body">
       
         <!-- start single gallery image -->

                <div class="mu-single-gallery col-md-4">
  
                  <div class="mu-single-gallery-item">

	                    <figure class="mu-single-gallery-img">

	                      <a class="mu-imglink" href="assets/img/gallery/1.jpg">

                          <img alt="img" src="assets/img/gallery/1.jpg">

                           <div class="mu-single-gallery-info">
         
                     <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
 
                         </div> 
    
                    </a>
	 
                   </figure>   
         
                  	</div>
 
               </div>
              
  <!-- End single gallery image -->

 
               <!-- start single gallery image -->
 
               <div class="mu-single-gallery col-md-4">

                  	 <div class="mu-single-gallery-item">

                        <figure class="mu-single-gallery-img">

                          <a class="mu-imglink" href="assets/img/gallery/2.jpg">
  
                          <img alt="img" src="assets/img/gallery/2.jpg">

                             <div class="mu-single-gallery-info">

                                <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">

                            </div> 
                          
</a>
                       
 </figure>            
   
                 </div>
 
               </div>   
            
                <!-- End single gallery image -->

 
               <!-- start single gallery image -->
    
            <div class="mu-single-gallery col-md-4">   
               
                  	 <div class="mu-single-gallery-item">
  
                    <figure class="mu-single-gallery-img">
            
            <a class="mu-imglink" href="assets/img/gallery/3.jpg">
  
                        <img alt="img" src="assets/img/gallery/3.jpg">
 
                          <div class="mu-single-gallery-info">
      
                        <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
 
                         </div> 
       
                 </a>
                
      </figure>            
      
              </div>
        
        </div>         
      
                <!-- End single gallery image -->

 
               <!-- start single gallery image -->

                <div class="mu-single-gallery col-md-4">  
                
                  	<div class="mu-single-gallery-item">
  
                    <figure class="mu-single-gallery-img">
               
         <a class="mu-imglink" href="assets/img/gallery/4.jpg">
      
                    <img alt="img" src="assets/img/gallery/4.jpg">
  
                         <div class="mu-single-gallery-info">
       
                       <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
  
                        </div> 
                     
   </a>
                     
 </figure>            
   
                 </div>

                </div>
      
          <!-- End single gallery image -->

    
            <!-- start single gallery image -->

                <div class="mu-single-gallery col-md-4">
                  
                  	<div class="mu-single-gallery-item">
 
                     <figure class="mu-single-gallery-img">

                        <a class="mu-imglink" href="assets/img/gallery/5.jpg">

                          <img alt="img" src="assets/img/gallery/5.jpg">
 
                          <div class="mu-single-gallery-info">
   
                           <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
 
                         </div> 
                       
 </a>
                    
  </figure>           
 
                    </div>
                
</div>               
              
  <!-- End single gallery image --> 
 

                <!-- start single gallery image -->

                <div class="mu-single-gallery col-md-4">
                  
                   <div class="mu-single-gallery-item">

                      <figure class="mu-single-gallery-img">
  
                      <a class="mu-imglink" href="assets/img/gallery/6.jpg">
 
                         <img alt="img" src="assets/img/gallery/6.jpg">

                           <div class="mu-single-gallery-info">
 
                             <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">

                          </div> 
      
                  </a>
          
            </figure> 
           
                    </div>

                </div>
    
            <!-- End single gallery image -->

  
              <!-- start single gallery image -->
 
               <div class="mu-single-gallery col-md-4"> 
                 
                  	<div class="mu-single-gallery-item">

                      <figure class="mu-single-gallery-img">
 
                       <a class="mu-imglink" href="assets/img/gallery/7.jpg">
 
                         <img alt="img" src="assets/img/gallery/7.jpg">

                           <div class="mu-single-gallery-info">
   
                           <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">

                          </div> 
                
        </a>
                   
   </figure>
            
                    </div>

                </div>         
      
                <!-- End single gallery image -->

 
               <!-- start single gallery image -->
  
              <div class="mu-single-gallery col-md-4"> 
                 
                  	<div class="mu-single-gallery-item">
 
                     <figure class="mu-single-gallery-img">
  
                      <a class="mu-imglink" href="assets/img/gallery/8.jpg">
  
                        <img alt="img" src="assets/img/gallery/8.jpg">

                           <div class="mu-single-gallery-info">
  
                            <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">

                          </div> 
                        
</a>
                      
</figure>      
      
                    </div>
 
               </div> 
              
                <!-- End single gallery image -->

 
               <!-- start single gallery image -->
 
               <div class="mu-single-gallery col-md-4"> 
                 
                  	<div class="mu-single-gallery-item">

                      <figure class="mu-single-gallery-img">
  
                      <a class="mu-imglink" href="assets/img/gallery/9.jpg">

                          <img alt="img" src="assets/img/gallery/9.jpg">
 
                          <div class="mu-single-gallery-info">
 
                             <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
 
                         </div> 
                       
 </a>
                      </figure>     
       
                    </div>
 
               </div>
              
  <!-- End single gallery image -->  

   
           </div>
           
 </div>
         
 </div>
       
 </div>
      
</div>
    
</div>
  
</section>
 
 <!-- End Gallery -->
 
 
  
  <!-- Start Contact section -->

  <section id="mu-contact">
  
  <div class="container">

      <div class="row">
  
      <div class="col-md-12">

          <div class="mu-contact-area">

  
          <div class="mu-title">
         
     <span class="mu-subtitle">Get In Touch</span>

              <h2>Contact Us</h2>
  
          </div>

           
 
</div>

               
 <div class="col-md-6">
   
               <div class="mu-contact-right">
  
                  <div class="mu-contact-widget">
 
                     <h3>Office Address</h3>
 
 
                    <p>The Cafe Hub, Charusat Campus,,off nadiad -petlad highway 139,Changa,Gujrat 388421</p>

                      <address>
                        <p><i class="fa fa-phone"></i> 8128443706</p>
                        
<p><i class="fa fa-envelope-o"></i>thecafehub@gmail.com</p>
                        
<p><i class="fa fa-map-marker"></i>Anand City, Gujrat, India</p>
 
                     </address>

                    </div>
     
               <div class="mu-contact-widget">
        
              <h3>Open Hours</h3>        
              
                      <address>
        
                <p><span>Monday - Friday</span> 9.00 am to 12 pm</p>
 
                       <p><span>Saturday</span> 9.00 am to 10 pm</p>

                        <p><span>Sunday</span> 10.00 am to 12 pm</p>

                      </address>
      
              </div>
             
     </div>
               
 </div>

            
  </div>
           
 </div>
          
</div>
        
</div>

      </div>

    </div>
  
</section>
  
<!-- End Contact section -->


 
  <!-- Start Footer -->
  
<footer id="mu-footer">
 
   <div class="container">
 
     <div class="row">
    
    <div class="col-md-12">
 
       <div class="mu-footer-area">

           <div class="mu-footer-social">
 
           <a href="#"><span class="fa fa-facebook"></span></a>
 
           <a href="#"><span class="fa fa-twitter"></span></a>

            <a href="#"><span class="fa fa-google-plus"></span></a>
 
           <a href="#"><span class="fa fa-linkedin"></span></a>
 
           <a href="#"><span class="fa fa-youtube"></span></a>

          </div>
          <div class="mu-footer-copyright">

            <p>&copy; Copyright <a rel="nofollow" href="#">Cafe hub</a>. All right reserved.</p>

          </div>         
       
 </div>

      </div>
 
     </div>

    </div>

  </footer>
  
<!-- End Footer -->
 
 
  <!-- jQuery library -->
 
 <script src="assets/js/jquery.min.js"></script> 
 
  <!-- Include all compiled plugins (below), or include individual files as needed -->

  <script src="assets/js/bootstrap.js"></script>  
 
  <!-- Slick slider -->
  
<script type="text/javascript" src="assets/js/slick.js"></script>

  <!-- Counter -->
 
 <script type="text/javascript" src="assets/js/simple-animated-counter.js"></script>
 
 <!-- Gallery Lightbox -->
 
 <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
 
 <!-- Date Picker -->
  
<script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script> 

  <!-- Ajax contact form  -->
 
 <script type="text/javascript" src="assets/js/app.js"></script>
 
 
 <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 


  </body>

</html>