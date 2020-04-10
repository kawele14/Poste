<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'G Finance') }}</title>

    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- la concubine de l'hemoglobine -->
    <link rel="stylesheet" href="{{ asset('tel/build/css/intlTelInput.css') }}">

    <!-- Custom Theme Style -->
    <link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">

</head>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="https://avatars1.githubusercontent.com/u/20368632?s=60&u=db0ceef0e6cff384fa430cc22c08d6bfe2a20fea&v=4" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2> Luis Carlos</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Personnal Info <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('front.users.info') }}">View your details</a></li>
                      <li><a href="{{ route('front.users.info') }}">Update your details</a></li>
                      <li><a href="">Change your password</a></li>
                      <li><a href="">Disable Account</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Transfert <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('home') }}">Tranfert</a></li>
                      <li><a href="{{ route('front.users.account') }}">Account Info</a></li>
                      <li><a href="{{ route('home') }}">Check your balance</a></li>
                    </ul>
                  </li>
                  <li><a href="" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-home"></i> Contact us</a>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">

                   <!-- Authentication Links -->
             

              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""> Luis Carlos
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();" ><i class="fa fa-sign-out pull-right"></i> {{ __('Logout') }}</a>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        

        <main class="py-4">
            @yield('content')
        </main>
    </div>
        <!-- modals -->

        <div tabindex="-1" class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
<br><br><br><br>
              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Contact us</h4>
                <button class="close" type="button" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                
                <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
                  <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
              
                      <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
                        <div class="row justify-content-center">
                          <div class="col-md-8 text-center">
                            <h1></h1>
                            <p data-aos="fade-up" data-aos-delay="100"></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>  
              
                <div class="site-section bg-light">
              
                        <form class="p-5 bg-white" style="margin-top: -150px;"
                        action="{{ route('front.users.send.message') }}"
                        method="post">
                        @csrf
                          <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                              <label class="text-black" for="fname">First Name</label>
                              <input type="text" id="fname" name="fname" class="form-control">
                            </div>
                            <div class="col-md-6">
                              <label class="text-black" for="lname">Last Name</label>
                              <input type="text" id="lname" name="lname" class="form-control">
                            </div>
                          </div>
              
                          <div class="row form-group">
                            
                            <div class="col-md-12">
                              <label class="text-black" for="email">Email</label> 
                              <input type="email" id="email" name="email" class="form-control">
                            </div>
                          </div>
              
                          <div class="row form-group">
                            
                            <div class="col-md-12">
                              <label class="text-black" for="subject">Subject</label> 
                              <input type="subject" id="subject" name="subject" class="form-control">
                            </div>
                          </div>
              
                          <div class="row form-group">
                            <div class="col-md-12">
                              <label class="text-black" for="message">Message</label> 
                              <textarea name="message" id="message" name="message" cols="30" rows="7" class="form-control" placeholder="..."></textarea>
                            </div>
                          </div>
                          <div class="modal-footer">
                          <div class="row form-group m-auto">
                            <div class="col-md-12">
                              <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                            </div>
                          </div>
                    </div>
                  </div>
                </div>
              </div>
              
              </form>
              </div>
        </div>
          </div>
        </div>

        <!-- /modals -->
      </div>
    </div>



      <!-- footer content -->
      <footer>
        <div class="pull-right">

        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>
</div>
</div>

  <!-- jQuery -->
  <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <!-- FastClick -->
  <script src="{{ asset('vendors/fastclick/lib/fastclick.js') }}"></script>
  <!-- NProgress -->
  <script src="{{ asset('vendors/nprogress/nprogress.js') }}"></script>
  <!-- Chart.js -->
  <script src="{{ asset('vendors/Chart.js/dist/Chart.min.js') }}"></script>
  <!-- gauge.js -->
  <script src="{{ asset('vendors/gauge.js/dist/gauge.min.js') }}"></script>
  <!-- bootstrap-progressbar -->
  <script src="{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
  <!-- iCheck -->
  <script src="{{ asset('vendors/iCheck/icheck.min.js') }}"></script>
  <!-- Skycons -->
  <script src="{{ asset('vendors/skycons/skycons.js') }}"></script>
  <!-- Flot -->
  <script src="{{ asset('vendors/Flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('vendors/Flot/jquery.flot.pie.js') }}"></script>
  <script src="{{ asset('vendors/Flot/jquery.flot.time.js') }}"></script>
  <script src="{{ asset('vendors/Flot/jquery.flot.stack.js') }}"></script>
  <script src="{{ asset('vendors/Flot/jquery.flot.resize.js') }}"></script>
  <!-- Flot plugins -->
  <script src="{{ asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
  <script src="{{ asset('vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
  <script src="{{ asset('vendors/flot.curvedlines/curvedLines.js') }}"></script>
  <!-- DateJS -->
  <script src="{{ asset('vendors/DateJS/build/date.js') }}"></script>
  <!-- JQVMap -->
  <script src="{{ asset('vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
  <script src="{{ asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
  <script src="{{ asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="{{ asset('vendors/moment/min/moment.min.js') }}"></script>
  <script src="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
  

  <!-- Custom Theme Scripts -->
  <script src="{{ asset('build/js/custom.min.js') }}"></script>

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
</body>
</html>