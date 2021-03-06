
<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>@yield('title')</title>
<link rel="icon" href="{{asset('client/img/favicon.png')}}">
   <!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('client/css/bootstrap.min.css')}}">
   <!-- animate CSS -->
<link rel="stylesheet" href="{{asset('client/css/animate.css')}}">
   <!-- owl carousel CSS -->
<link rel="stylesheet" href="{{asset('client/css/owl.carousel.min.css')}}">
   <!-- themify CSS -->
<link rel="stylesheet" href="{{asset('client/css/themify-icons.css')}}">
   <!-- flaticon CSS -->
<link rel="stylesheet" href="{{asset('client/css/flaticon.css')}}">
   <!-- magnific-popup CSS -->
<link rel="stylesheet" href="{{asset('client/css/magnific-popup.css')}}">
   <!-- font awesome CSS -->
<link rel="stylesheet" href="{{asset('client/fontawesome/css/all.min.css')}}">
   <!-- style CSS -->
<link rel="stylesheet" href="{{asset('client/css/style.css')}}">
</head>

<body>
   <!--::menu part start::-->
   <header class="main_menu home_menu">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <nav class="navbar navbar-expand-lg navbar-light">
               <a class="navbar-brand" href="index.html"> <img src="{{asset('client/img/logo.png')}}" alt="logo"> </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                     aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse main-menu-item" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{url('about')}}">about</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{url('service')}}">Services</a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              blog
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="blog.html">blog</a>
                              <a class="dropdown-item" href="single-blog.html">Single blog</a>
                           </div>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              pages
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="project.html">Project</a>
                              <a class="dropdown-item" href="apartment.html">Apartment</a>
                              <a class="dropdown-item" href="elements.html">Elements</a>
                           </div>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="contact.html">Contact us</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </header>
   <!--::menu part end::-->

   <!--::banner part start::-->
   {{-- <section class="banner_part">
      <div class="container">
         <div class="row">
            <div class="col-lg-5 offset-lg-1 col-sm-8 offset-sm-2">
               <div class="banner_text aling-items-center">
                  <div class="banner_text_iner">
                     <h5>Dream</h5>
                     <h2>Proparties <br>
                        Now In City</h2>
                     <p>Lorem ipsum dolor sit consectetur adipiscing elit sed do
                        eiusmod tempor incididunt ut labore et dolore magna. </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> --}}
   <!--::banner part end::-->


{{-- Main Body Start  --}}



@yield('content')


{{-- Main Body End --}}
 
   <!--::footer_part start::-->
   <footer class="footer_part">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="footer_logo">
               <a href="index.html" class="footer_logo_iner"> <img src="{{asset('client/img/footer_logo.png')}}" alt="#"> </a>
               </div>
            </div>

            <div class="col-sm-6 col-lg-3">
               <div class="single_footer_part">
                  <h4>About Us</h4>
                  <p>Heaven fruitful doesn't over lesser days appear creeping seasons so behold bearing days open</p>
                  <div class="footer_icon social_icon">
                     <ul class="list-unstyled">
                        <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                        <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-lg-3">
               <div class="single_footer_part">
                  <h4>Contact Info</h4>
                  <p>Address : Your address goes
                     here, your demo address.</p>
                  <p>Phone : +8880 44338899</p>
                  <p>Email : info@colorlib.com</p>
               </div>
            </div>
            <div class="col-sm-6 col-lg-3">
               <div class="single_footer_part">
                  <h4>Important Link</h4>
                  <ul class="list-unstyled">
                     <li><a href=""> WHMCS-bridge</a></li>
                     <li><a href="">Search Domain</a></li>
                     <li><a href="">My Account</a></li>
                     <li><a href="">Shopping Cart</a></li>
                     <li><a href="">Our Shop</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-sm-6 col-lg-3">
               <div class="single_footer_part">
                  <h4>Newsletter</h4>
                  <p>Heaven fruitful doesn't over lesser in days. Appear creeping seasons deve behold bearing days open
                  </p>
                  <div id="mc_embed_signup">
                     <form target="_blank"
                        action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                        method="get" class="subscribe_form relative mail_part" required>
                        <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                           class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '"
                           required="" type="email">
                        <button type="submit" name="submit" id="newsletter-submit"
                           class="email_icon newsletter-submit button-contactForm"><i
                              class="far fa-paper-plane"></i></button>
                        <div class="mt-10 info"></div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <hr>
         <div class="row">
            <div class="col-lg-12">
               <div class="copyright_text text-center">
                  <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!--::footer_part end::-->

   <!-- jquery plugins here-->
<script src="{{asset('client/js/jquery-1.12.1.min.js')}}"></script>
   <!-- popper js -->
<script src="{{asset('client/js/popper.min.js')}}"></script>
   <!-- bootstrap js -->
<script src="{{asset('client/js/bootstrap.min.js')}}"></script>
   <!-- magnific js -->
<script src="{{asset('client/js/jquery.magnific-popup.min.js')}}"></script>
   <!-- carousel js -->
<script src="{{asset('client/js/owl.carousel.min.js')}}"></script>
   <!-- easing js -->
<script src="{{asset('client/js/jquery.easing.min.js')}}"></script>
   <!--masonry js-->
<script src="{{asset('client/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('client/js/masonry.pkgd.js')}}"></script>
   <!--form validation js-->
<script src="{{asset('client/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('client/js/contact.js')}}"></script>
<script src="{{asset('client/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('client/js/jquery.form.js')}}"></script>
<script src="{{asset('client/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('client/js/mail-script.js')}}"></script>
   <!-- counter js -->
<script src="{{asset('client/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('clientjs/waypoints.min.js')}}"></script>
   <!-- custom js -->
<script src="{{asset('client/js/custom.js')}}"></script>
</body>

</html>