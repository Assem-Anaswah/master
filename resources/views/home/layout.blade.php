<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">

      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Heado</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- owl carousel style -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="home/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="home/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="home/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="home/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="home/css/owl.carousel.min.css">
      <link rel="stylesheet" href="home/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="home/login.html">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-dark bg-dark" id="asaem">
               <a class="logo" href="index.html"><img src="home/images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarsExample01">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{route('about.index')}}">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{route('Srvices.index')}}">Services</a>
                     </li>
                     <!-- <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                     </li> -->
                     <li class="nav-item">
                        <a class="nav-link" href="{{route('client.index')}}">Client</a>
                     </li>
                     @if (Auth::check())
                     <li class="nav-item">
                        <a class="nav-link" href="{{route('user-profile.index')}}">Profile</a>
                     </li>
                     @endif
                     <li class="nav-item">
                        <a class="nav-link" href="{{route('contact.index')}}">Contact Us</a>
                     </li>
                     @if (Auth::check())
                    <li class="hidden-on-mobile">
                        <a class="nav-link" href="{{ route('logout') }}">Log-out</a>
                    <li>
                        @endif

                  </ul>
               </div>
            </nav>
         </div>

      @yield('contact')
      <div class="footer_section layout_padding">
        <div class="container">
           <div class="address_main">
              <div class="address_text"><a href="#"><img src="home/images/map-icon.png"><span class="padding_left_15">Loram Ipusm hosting web</span></a></div>
              <div class="address_text"><a href="#"><img src="home/images/call-icon.png"><span class="padding_left_15">+7586656566</span></a></div>
              <div class="address_text"><a href="#"><img src="home/images/mail-icon.png"><span class="padding_left_15">demo@gmail.com</span></a></div>
           </div>
           <div class="footer_section_2">
              <div class="row">
                 <div class="col-lg-3 col-sm-6">
                    <h4 class="link_text">Useful link</h4>
                    <div class="footer_menu">
                       <ul>
                          <li><a href="index.html">Home</a></li>
                          <li><a href="about.html">About</a></li>
                          <li><a href="services.html">Services</a></li>
                          <li><a href="contact.html">Contact Us</a></li>
                       </ul>
                    </div>
                 </div>
                 <div class="col-lg-3 col-sm-6">
                    <h4 class="link_text">web design</h4>
                    <p class="footer_text">Lorem ipsum dolor sit amet, consectetur adipiscinaliquaL oreadipiscing </p>
                 </div>
                 <div class="col-lg-3 col-sm-6">
                    <h4 class="link_text">social media</h4>
                    <div class="social_icon">
                       <ul>
                          <li><a href="#"><img src="home/images/fb-icon.png"></a></li>
                          <li><a href="#"><img src="home/images/twitter-icon.png"></a></li>
                          <li><a href="#"><img src="home/images/linkedin-icon.png"></a></li>
                          <li><a href="#"><img src="home/images/youtub-icon.png"></a></li>
                       </ul>
                    </div>
                 </div>
                 <div class="col-lg-3 col-sm-6">
                    <h4 class="link_text">Our Branchs</h4>
                    <p class="footer_text_1">Lorem ipsum dolor sit amet, consectetur adipiscinaliquaLoreadipiscing </p>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!--client section end -->
     <!--copyright section start -->
     <div class="copyright_section">
        <div class="container">
           <p class="copyright_text">Copyright 2023 All Right Reserved By <a href="https://html.design">Free Html Templates</a> Distributed by: <a href="https://themewagon.com">ThemeWagon</a></p>
        </div>
     </div>
     <!--copyright section end -->
     <!-- Javascript files-->
     <script src="home/js/jquery.min.js"></script>
     <script src="home/js/popper.min.js"></script>
     <script src="home/js/bootstrap.bundle.min.js"></script>
     <script src="home/js/jquery-3.0.0.min.js"></script>
     <script src="home/js/plugin.js"></script>
           <!-- sidebar -->
           <script src="home/js/jquery.mCustomScrollbar.concat.min.js"></script>
           <script src="home/js/custom.js"></script>
                 <!-- javascript -->
      <script src="home/js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script type="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2//2.0.0-beta.2.4/owl.carousel.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="../../assets/home/js/vendor/popper.min.js"></script>
      <script src="../../dist/home/js/bootstrap.min.js"></script>
  </body>
</html>
