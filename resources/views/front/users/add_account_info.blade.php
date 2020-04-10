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
            <h3>Banking information</h3>
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

         <form class="form-horizontal form-label-right" style="width: 100%;" action="{{ route('front.binfo.save') }}" method="POST">

          @csrf
<br>
<div class="row form-group">
    <div class="col-md-6 mb-3 mb-md-0">
      <label class="text-black" for="bname">Bank Name</label>
      <input type="text" id="bname" name="bname" class="form-control">
    </div>
    <div class="col-md-6">
      <label class="text-black" for="address">Address: &nbsp;&nbsp;&nbsp;&nbsp; <strong></strong></label>
      <input type="text" id="address" name="address" class="form-control">
    </div>
  </div>

  <div class="row form-group">
    
    <div class="col-md-12">
      <label class="text-black" for="iban">IBAN / N° Compte:</label> 
      <input type="text" id="iban" name="iban" class="form-control">
    </div>
  </div>
  <div class="row form-group">
    
    <div class="col-md-12">
      <label class="text-black" for="bic">BIC (SWIFT):</label> 
      <input type="text" id="bic" name="bic" class="form-control">
    </div>
  </div>
<div class="row form-group">
    
    <div class="col-md-12">
      <label class="text-black" for="rib">RIB (RIB Key):</label> 
      <input type="text" id="rib" name="rib" class="form-control">
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
