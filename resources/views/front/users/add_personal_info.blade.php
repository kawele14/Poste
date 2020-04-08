@extends('layouts.dashboard')

@section('content')
<div class="container">
        <!--<div class="col-md-8">
            <div class="card">
                <div class="card-header">G Finance Panel</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Vous êtes connecté
                        </div>
                      </div>

                </div>
            </div>-->

             <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->

        <div class="x_panel">
          <div class="x_title">
            <h3>Personal informations</h3>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" role="button" aria-expanded="false" href="#" data-toggle="dropdown"><i class="fa fa-wrench"></i></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Settings 1</a>
                    <a class="dropdown-item" href="#">Settings 2</a>
                  </div>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div id="alerts"></div>
            <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
              
         <!-- Form -->

         <form class="form-horizontal form-label-right" style="width: 100%;">

          @csrf
<br>
              

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
                <label class="text-black" for="profession">Profession</label> 
                <input type="subject" id="profession" name="profession" class="form-control">
              </div>
            </div>

            <div class="row form-group">
              
                <div class="col-md-6">
                  <label class="text-black" for="phone">Phone Number</label> <br>
                  <input type="text" id="phone" name="phone" class="form-control" style="width: 400px;">
                  <span id="valid-msg" class="hide">✓ Valid</span>
                  <span id="error-msg" class="hide"></span>
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="dob">Date of Birth</label> 
                  <input type="date" id="dob" name="dob" class="form-control">
                </div>
              </div>

              <div class="row form-group">
              
                <div class="col-md-12">
                  <label class="text-black" for="address">Address</label> 
                  <input type="text" id="address" name="address" class="form-control">
                </div>
              </div>
  
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="postal">Postal code</label> 
                  <input type="text" id="postal" name="postal" class="form-control">
                </div>
              </div>

              <div class="row form-group">
              
                <div class="col-md-12">
                  <label class="text-black" for="city">City</label> 
                  <input type="text" id="city" name="city" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="country">Country</label> 

                  <select id="country" name="country" class="form-control">
                    @foreach($country as $count)
                     <option value="{{ $count->name}}">{{ $count->name}}</option>
                    @endforeach
                </select>

                </div>
              </div>
  
            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Submit" class="btn btn-primary btn-md text-white">
              </div>
            </div>
              
        </form>


            </div>
          </div>
        </div>       
        

    </div>
</div>
@endsection
