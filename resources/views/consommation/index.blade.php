@extends('default')

 @section('content')


<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title "><b> SENFORAGE Consommations </b></h4>
                  <p class="card-category">  {{--<b> Clients </b> --}}
                      <a href="{{route('reglements.create')}}"><div class="btn btn-warning"> Ajouter <i class="material-icons">Nouvelle Consommation</i></div></a>
                  </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="table-consommations">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Date
                        </th>
                        <th>
                         Valeur
                        </th>
                         <th>
                          Compteur
                        </th>
                        <th>
                            Nom Client
                        </th>
                        <th>
                            Prenom Client
                        </th>
                        <th>
                        Agent
                        </th>
                        <th>
                          Action
                          </th>
                      </thead>
                      <tbody>

                      </tbody>

                    </table>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">

            </div>
          </div>
        </div>
      </div>
      @endsection

      @push('scripts')
      <script type="text/javascript">
      $(document).ready(function () {
          $('#table-consommations').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('consommations.list')}}",
            columns: [
                    { data: 'id', name: 'id' },
                    { data: 'date', name: 'date' },
                    { data: 'valeur', name: 'valeur' },
                    { data: 'compteurs_id', name: 'compteurs_id' },
                    { data: 'compteur.abonnement.client.user.name', name: 'compteur.abonnement.client.user.name' },
                    { data: 'compteur.abonnement.client.user.firstname', name: 'compteur.abonnement.client.user.firstname' },
                    { data: 'agent.matricule', name: 'agent.matricule' },
                    { data: null ,orderable: false, searchable: false}

                ],
                "columnDefs": [
                        {
                        "data": null,
                        "render": function (data, type, row) {
                        url_e =  "{!! route('reglements.edit',':id')!!}".replace(':id', data.id);
                        url_d =  "{!! route('reglements.destroy',':id')!!}".replace(':id', data.id);
                        return '<a href='+url_e+'  class=" btn btn-primary " ><i class="material-icons">edit</i></a>'+
                        '<a class="btn btn-danger" href='+url_d+'><i class="material-icons">delete</i></a>';
                        },
                        "targets": 7
                        },
                    // {
                    //     "data": null,
                    //     "render": function (data, type, row) {
                    //         url =  "{!! route('clients.edit',':id')!!}".replace(':id', data.id);
                    //         return check_status(data,url);
                    //     },
                    //     "targets": 1
                    // }
                ],

          });
      });

      </script>
@endpush


