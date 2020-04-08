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
            <h3>Home</h3>
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


                <a href="#" class="list-group-item list-group-item-action list-group-item-success text-center" style="font-size:25px"><i class="fa fa-euro"></i> Account balance</a>

                <div class="row m-auto" style="display: inline-block;">
                    <div class="tile_count">
                      <div class="col-md-12 col-sm-4  tile_stats_count">
                        <div class="count">10 000</div>
                        <!--<span class="count_bottom"><i class="green">4% </i> From last Week</span>-->
                      </div>
                    </div>

                    <form class="m-auto">

                        <div class="row form-group">
        
                            <div class="col-md-12"> 
                              <input type="text" id="iban" name="iban" class="form-control" value="" style="display: none">
                            </div>
                          </div>
    
                          <div class="row form-group">
                                <button class="btn btn-success btn-lg" type="button"> <i class="fa fa-forward"></i> Transfert </button>
                          </div>
                    </form>
                    
                  </div>
            </div>
                <br>

                

                

          </div>
        </div>

    </div>
</div>
@endsection
