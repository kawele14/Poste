@extends('layouts.app')

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


            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Prêts</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="table-responsive">
                  <br><br>
                  <table id="loan" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                          <tr>
                              <th>Montant</th>
                              <th>Durée</th>
                              <th>Raison</th>

                              <th>Nom</th>
                              <th>Prénom</th>
                              <th>Email</th>
                              <th>Profession</th>
                              <th>Tél</th>
                              <th>DoB</th>
                              <th>Adresse</th>
                              <th>Pays</th>
                              <th>Ville</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($loans as $data)
                          <tr>
                              <td>{{ $data->amount }}</td>
                              <td>{{ $data->duration }}</td>
                              <td>{{ $data->reason }}</td>

                              <td>{{ $data->fname }}</td>
                              <td>{{ $data->lname }}</td>
                              <td>{{ $data->email }}</td>
                              <td>{{ $data->profession }}</td>
                              <td><a href="tel:{{ $data->phone }}">{{ $data->phone }}</a></td>
                              <td>{{ $data->dob }}</td>
                              <td>{{ $data->address }}</td>
                              <td>{{ $data->country }}</td>
                              <td>{{ $data->city }}</td>
                          </tr>
                          @endforeach
                      </tbody>
                      <tfoot>
                        <th>Montant</th>
                              <th>Durée</th>
                              <th>Raison</th>

                              <th>Nom</th>
                              <th>Prénom</th>
                              <th>Email</th>
                              <th>Profession</th>
                              <th>Tél</th>
                              <th>DoB</th>
                              <th>Adresse</th>
                              <th>Pays</th>
                              <th>Ville</th>
                      </tfoot>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="table-responsive">
                  <br><br>
                  <table id="contact" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                          <tr>
                              <th>Nom</th>
                              <th>Prénom</th>
                              <th>Eamil</th>
                              <th>Objet</th>
                              <th>Message</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($contacts as $data)
                          <tr>
                              <td>{{ $data->fname }}</td>
                              <td>{{ $data->lname }}</td>
                              <td>{{ $data->email }}</td>
                              <td>{{ $data->subject }}</td>
                              <td>{{ $data->message }}</td>
                          </tr>
                          @endforeach
                      </tbody>
                      <tfoot>
                        <th>Nom</th>
                              <th>Prénom</th>
                              <th>Eamil</th>
                              <th>Objet</th>
                              <th>Message</th>
                      </tfoot>
                  </table>
                </div>
              </div>
              </div>
        

    </div>
</div>
@endsection
