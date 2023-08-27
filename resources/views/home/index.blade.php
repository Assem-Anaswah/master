@extends('home.layout')
@section('contact')
         <!--banner section start -->
         <div class="banner_section layout_padding">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="taital_main">
                                 <h5 class="banner_taital">Jordanian Insurance Group</h5>
                                 <p class="banner_text">We are a company that guarantees the insurance and maintenance of your vehicle, and we welcome you to our site in order to provide assistance, and we wish you safety always
                                    .</p>
                                    @if (Auth::check())
                                 <div class="read_bt" style="display: none;"><a href="{{route('sign-up.index')}}">login</a></div>
                                 @else
                                 <div class="read_bt"><a href="{{route('sign-up.index')}}">login</a></div>
                                 @endif
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div><img src="" class="image_1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="taital_main">
                                 <h5 class="banner_taital">Jordanian Insurance Group</h5>
                                 <p class="banner_text">We are a company that guarantees the insurance and maintenance of your vehicle, and we welcome you to our site in order to provide assistance, and we wish you safety always
                                    .</p>
                                 <div class="read_bt"><a href="#">login</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div><img src="" class="image_1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="taital_main">
                                 <h5 class="banner_taital">Jordanian Insurance Group</h5>
                                 <p class="banner_text">We are a company that guarantees the insurance and maintenance of your vehicle, and we welcome you to our site in order to provide assistance, and we wish you safety always
.</p>
                                 <div class="read_bt"><a href="#">login</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div><img src="" class="image_1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev"> -->
               <i class=""><img src=""></i>
               </a>
               <!-- <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next"> -->
               <i class=""><img src=""></i>
               </a>
            </div>
         </div>

         <!--banner section end -->
      </div>
      <!--header section end -->
      <!--about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="image_2"><img src="economy-new.jpg"></div>
               </div>
               <div class="col-md-6">
                  <h1 class="about_taital">About <span class="us_text">Us</span></h1>
                  <p class="about_text">The Jordan Insurance Group is considered one of the leading and distinguished companies in the insurance sector in the Middle East, which derives this from its commitment to provide care based on service and customer satisfaction and to provide services and insurance products that respond to their aspirations in all fields, since its establishment in 1996 as a public shareholding company under License No. (321) The Companies Control Department. </p>
                  <div class="read_bt_1"><a href="#">Read More</a></div>
               </div>
            </div>
         </div>
      </div>
      <!--about section end -->
      <!-- services section start -->
      <!-- <div class="services_section layout_padding">
         <div class="container">
            <h1 class="service_taital"><span class="our_text">Our</span> Services</h1>
            <p class="service_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered </p>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-sm-4">
                     <div class="icon_1"><img src="images/icon-1.png"></div>
                     <h4 class="design_text">Logo Design</h4>
                     <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing </p>
                     <div class="icon_1"><img src="images/icon-2.png"></div>
                     <h4 class="design_text">Web Development</h4>
                     <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing </p>
                  </div>
                  <div class="col-sm-4">
                     <div class="icon_3"><img src="images/icon-3.png"></div>
                     <h4 class="design_text">Web Design</h4>
                     <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing </p>
                     <div class="read_bt_2"><a href="#">Read More</a></div>
                  </div>
                  <div class="col-sm-4">
                     <div class="icon_1"><img src="images/icon-4.png"></div>
                     <h4 class="design_text">Banner Design</h4>
                     <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing </p>
                     <div class="icon_1"><img src="images/icon-5.png"></div>
                     <h4 class="design_text">Social Media Work</h4>
                     <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing </p>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!--services section end -->
      <!--blog section start -->
      <div class="blog_section layout_padding">
         <div class="container">
            <h1 class="blog_taital"><span class="our_text">Our</span> services</h1>
            <p class="blog_text">There are two types of insurance through which your vehicle is insured:</p>
            <div class="services_section_2 layout_padding">
               <div class="row">
                  <div class="col-md-4">
                     <div class="box_main">
                        <div class="student_bg"><img src="image/car.jpg" class="student_bg"></div>
                        <!-- <div class="image_15">19<br>Feb</div> -->
                        <h4 class="hannery_text">Compulsory insurance</h4>
                        <p class="fact_text">Money protection: Compulsory insurance provides financial coverage to the vehicle owner in case he is exposed to financial claims due to damages caused to others or to their property.

                           Victim protection: Compulsory insurance provides compensation for people who suffer injury or damage as a result of traffic accidents. When an accident occurs and a person is injured, he is compensated for the medical costs
                           </p>
                     </div>
                  </div>
                  <!-- <div class="col-md-4">
                     <div class="box_main">
                        <div class="student_bg"><img src="images/img-4.png" class="student_bg"></div>
                        <div class="image_15">19<br>Feb</div>
                        <h4 class="hannery_text">There are many variations</h4>
                        <p class="fact_text">dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                     </div>
                  </div> -->
                  <div class="col-md-4">
                     <div class="box_main">
                        <div><img src="home/images/car.png" class="student_bg"></div>
                        <!-- <div class="image_15">19<br>Feb</div> -->
                        <h4 class="hannery_text">full insurance</h4>
                        <p class="fact_text">Total Damage Coverage: Coverage is provided for damages to your vehicle as a result of a road accident, whether it is a collision with another vehicle or a collision with a fixed object, such as a pole or a wall. This includes the costs of repairing or replacing the vehicle if it is completely damaged.

                           Theft and Damage Coverage: Coverage is provided for loss resulting from theft of the vehicle or damage resulting from attempted theft. </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--blog section end -->
      <!--newsletter section start -->
      <div class="newsletter_section">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="newsletter_text">Subscribe Now </h1>
                  <p class="tempor_text">dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
               </div>
               <div class="col-md-6">
                  <div class="mail_bt_main">
                     <input type="text" class="mail_text" placeholder="Enter Tour Mail" name="Enter Tour Mail">
                     <div class="subscribe_bt"><a href="#">SUBSCRIBE</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--newsletter section end -->
      <!--client section start -->
      <!-- <div class="client_section layout_padding">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="blog_taital"><span class="tes_text">Tes</span>timonial</h1>
                     <div class="client_section_2 layout_padding">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="client_box active">
                                 <div class="left_main">
                                    <div class="image_6"><img src="images/img-6.png"></div>
                                 </div>
                                 <div class="right_main">
                                    <h6 class="magna_text active">Magna</h6>
                                    <p class="consectetur_text active">Consectetur adipiscing</p>
                                    <div class="quote_icon active"></div>
                                 </div>
                                 <p class="ipsum_text active">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="client_box">
                                 <div class="left_main">
                                    <div class="image_6"><img src="images/img-6.png"></div>
                                 </div>
                                 <div class="right_main">
                                    <h6 class="magna_text">Magna</h6>
                                    <p class="consectetur_text">Consectetur adipiscing</p>
                                    <div class="quote_icon"></div>
                                 </div>
                                 <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="blog_taital"><span class="tes_text">Tes</span>timonial</h1>
                     <div class="client_section_2 layout_padding">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="client_box active">
                                 <div class="left_main">
                                    <div class="image_6"><img src="images/img-6.png"></div>
                                 </div>
                                 <div class="right_main">
                                    <h6 class="magna_text active">Magna</h6>
                                    <p class="consectetur_text active">Consectetur adipiscing</p>
                                    <div class="quote_icon active"></div>
                                 </div>
                                 <p class="ipsum_text active">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="client_box">
                                 <div class="left_main">
                                    <div class="image_6"><img src="images/img-6.png"></div>
                                 </div>
                                 <div class="right_main">
                                    <h6 class="magna_text">Magna</h6>
                                    <p class="consectetur_text">Consectetur adipiscing</p>
                                    <div class="quote_icon"></div>
                                 </div>
                                 <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="blog_taital"><span class="tes_text">Tes</span>timonial</h1>
                     <div class="client_section_2 layout_padding">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="client_box active">
                                 <div class="left_main">
                                    <div class="image_6"><img src="images/img-6.png"></div>
                                 </div>
                                 <div class="right_main">
                                    <h6 class="magna_text active">Magna</h6>
                                    <p class="consectetur_text active">Consectetur adipiscing</p>
                                    <div class="quote_icon active"></div>
                                 </div>
                                 <p class="ipsum_text active">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="client_box">
                                 <div class="left_main">
                                    <div class="image_6"><img src="images/img-6.png"></div>
                                 </div>
                                 <div class="right_main">
                                    <h6 class="magna_text">Magna</h6>
                                    <p class="consectetur_text">Consectetur adipiscing</p>
                                    <div class="quote_icon"></div>
                                 </div>
                                 <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!--client section end -->
      <!--footer section start -->

      @endsection
