@extends('layouts.home')

@section('pageTitle', $pageTitle)

@section('content')


<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">

        <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
          
          
          <div class="row justify-content-center">
            <div class="col-md-8 text-center">
              <h1>Request for a loan</h1>
              <p data-aos="fade-up" data-aos-delay="100">Fill the application form to apply for a loan.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  

  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-9 mb-6"  data-aos="fade">

          <form class="p-5 bg-white" style="margin-top: -150px;" 
          action="{{ route('front.loan.send') }}"
          method="POST">
          @csrf
            <h3>Credit Informations</h3>

            <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="amount">Amount:</label>
                  <input type="text" id="amount" name="amount" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="duration">Duration: &nbsp;&nbsp;&nbsp;&nbsp; <strong>in Year</strong></label>
                  <input type="text" id="duration" name="duration" class="form-control">
                </div>
              </div>
  
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="reason">Reason for loan:</label> 
                  <input type="text" id="reason" name="reason" class="form-control">
                </div>
              </div>
<br>
              <h3>Personal informations</h3>

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
              
                <div class="col-md-12">
                  <label class="text-black" for="phone">Phone Number</label> 
                  <input type="text" id="phone" name="phone" class="form-control">
                  <span id="valid-msg" class="hide">✓ Valid</span>
                  <span id="error-msg" class="hide"></span>
                </div>
              </div>
  
              <div class="row form-group">
                
                <div class="col-md-12">
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
                  <label class="text-black" for="city">City</label> 
                  <input type="text" id="city" name="city" class="form-control">
                </div>
              </div>
  
            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Submit" class="btn btn-primary btn-md text-white">
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-3"  data-aos="fade" data-aos-delay="100">
        </div>
      </div>
    </div>
  </div>

@endsection