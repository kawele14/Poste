
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('pageTitle')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>

    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/rangeslider.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/flag-icon/css/flag-icon.css') }}">

    <link rel="stylesheet" href="{{ asset('tel/build/css/intlTelInput.css') }}">
    <!-- la concubine de l'hemoglobine -->

    <style>
      .goog-te-banner-frame.skiptranslate {
    display: none !important;
    } 
body {
    top: 0px !important; 
    }
    </style>
  </head>
  <body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            
                <img src="{{ asset('images/logo/logo_gf.PNG') }}" alt="">
                
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">


                <div class="btn-group dropdown">
                  <span style="color: black" type="button" class="btn dropdown-toggle" data-toggle="dropdown"><span class="icon-globe"></span>
                  </span>
                  <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
                      <li>
                          <a href="javascript:void()"  onclick="window.location.hash='#googtrans(fr)';location.reload();"><i class="flag-icon flag-icon-fr"></i>Français</a>
                          <a href="javascript:void()"  onclick="window.location.hash='#googtrans(en)';location.reload();"><i class="flag-icon flag-icon-us"></i>English</a>
                          <a href="javascript:void()"  onclick="window.location.hash='#googtrans(it)';location.reload();"><i class="flag-icon flag-icon-it"></i>Italy</a>
                          <a href="javascript:void()"  onclick="window.location.hash='#googtrans(es)';location.reload();"><i class="flag-icon flag-icon-es"></i>Spanish</a>
                          <a href="javascript:void()"  onclick="window.location.hash='#googtrans(el)';location.reload();"><i class="flag-icon flag-icon-gr"></i>Grèce</a>
                          <a href="javascript:void()"  onclick="window.location.hash='#googtrans(de)';location.reload();"><i class="flag-icon flag-icon-de"></i>German</a>
                          <a href="javascript:void()"  onclick="window.location.hash='#googtrans(pt)';location.reload();"><i class="flag-icon flag-icon-pt"></i>Português</a>
                             <a href="javascript:void()"  onclick="window.location.hash='#googtrans(lt)';location.reload();"><i class="flag-icon flag-icon-lt"></i>Lietuvos</a>
                                <a href="javascript:void()"  onclick="window.location.hash='#googtrans(pl)';location.reload();"><i class="flag-icon flag-icon-pl"></i>Polski</a>
                                  <a href="javascript:void()"  onclick="window.location.hash='#googtrans(sk)';location.reload();"><i class="flag-icon flag-icon-sk"></i>Slovenský</a>
                                   <a href="javascript:void()"  onclick="window.location.hash='#googtrans(ro)';location.reload();"><i class="flag-icon flag-icon-ro"></i>România</a>
                                    <a href="javascript:void()"  onclick="window.location.hash='#googtrans(et)';location.reload();"><i class="flag-icon flag-icon-et"></i>Eesti</a>
                                     <a href="javascript:void()"  onclick="window.location.hash='#googtrans(lu)';location.reload();"><i class="flag-icon flag-icon-lu"></i>Lëtzebuerg</a>
                                      <a href="javascript:void()"  onclick="window.location.hash='#googtrans(lv)';location.reload();"><i class="flag-icon flag-icon-lv"></i>Latvija</a>
                                       <a href="javascript:void()"  onclick="window.location.hash='#googtrans(mt)';location.reload();"><i class="flag-icon flag-icon-mt"></i>Malta</a>
                                        <a href="javascript:void()"  onclick="window.location.hash='#googtrans(hr)';location.reload();"><i class="flag-icon flag-icon-hr"></i>Hrvatska</a>
                                
                      </li>
                  </ul>
              </div>


                <li class="active"><a href="{{ route('front.home') }}"><span>Home</span></a></li>
                <li><a href="#about"><span>About</span></a></li>
                <li><a href="{{ route('front.condition') }}"><span>Conditions</span></a></li>
                <li><a href="{{ route('front.loan') }}"><span>Request a credit </span></a></li>
                <li><a href="{{ route('front.contact') }}"><span>Contact</span></a></li>
               <!-- <li class="has-children">
                  <a href="about.html"><span>Dropdown</span></a>
                  <ul class="dropdown arrow-top">
                    <li><a href="#">Menu One</a></li>
                    <li><a href="#">Menu Two</a></li>
                    <li><a href="#">Menu Three</a></li>
                    <li class="has-children">
                      <a href="#">Dropdown</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                        <li><a href="#">Menu Four</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>-->

                
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>


         <!-- Section Area -->
         <section>
            @yield('content')
        </section>
        <!-- Section Area End -->


        <footer class="site-footer">
            <div class="container">
              <div class="row">
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                      <h2 class="footer-heading mb-4">Quick Links</h2>
                      <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="/login">Login</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                      <h2 class="footer-heading mb-4">Products</h2>
                      <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Contact Us</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                      <h2 class="footer-heading mb-4">Features</h2>
                      <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Contact Us</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                      <h2 class="footer-heading mb-4">Follow Us</h2>
                      <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                      <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                      <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <form action="#" method="post">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="row pt-5 mt-5">
                <div class="col-12 text-md-center text-left">
                  <p>
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved                  
                  </p>
                </div>
              </div>
            </div>
          </footer>
        </div>
      
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        @include('flashy::message')
        <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('js/aos.js') }}"></script>
        <script src="{{ asset('js/rangeslider.min.js') }}"></script>
        
        <script src="{{ asset('tel/build/js/intlTelInput.js') }}"></script>
        <script>
          var input = document.querySelector("#phone");
          window.intlTelInput(input);


          var input = document.querySelector("#phone"),
  errorMsg = document.querySelector("#error-msg"),
  validMsg = document.querySelector("#valid-msg");

// here, the index maps to the error code returned from getValidationError - see readme
var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

// initialise plugin
var iti = window.intlTelInput(input, {
  utilsScript: "{{ asset('tel/build/js/utils.js?1562189064761') }}"
});

var reset = function() {
  input.classList.remove("error");
  errorMsg.innerHTML = "";
  errorMsg.classList.add("hide");
  validMsg.classList.add("hide");
};

// on blur: validate
input.addEventListener('blur', function() {
  reset();
  if (input.value.trim()) {
    if (iti.isValidNumber()) {
      validMsg.classList.remove("hide");
    } else {
      input.classList.add("error");
      var errorCode = iti.getValidationError();
      errorMsg.innerHTML = errorMap[errorCode];
      errorMsg.classList.remove("hide");
    }
  }
});

// on keyup / change flag: reset
input.addEventListener('change', reset);
input.addEventListener('keyup', reset);
        </script>

        <script src="{{ asset('js/typed.js') }}"></script>
                  <script>
                  var typed = new Typed('.typed-words', {
                  strings: ["Banque"," Bank"," Assurance", "Banka", "Banco", "Banca"],
                  typeSpeed: 80,
                  backSpeed: 80,
                  backDelay: 4000,
                  startDelay: 1000,
                  loop: true,
                  showCursor: true
                  });
                  </script>

      
        <script src="{{ asset('js/main.js') }}"></script>

        <!-- Color Switcher End -->
<script type="text/javascript">
  function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: ''}, 'google_translate_element');
  } </script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        </body>
      </html>