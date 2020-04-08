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
        
                






            </div>
          </div>
        </div>

    </div>
</div>
@endsection
