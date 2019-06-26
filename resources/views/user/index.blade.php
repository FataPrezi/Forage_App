@extends('default')

 @section('content')


<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title "><b> SENFORAGE Utilisateurs </b></h4>
                  <p class="card-category">  {{--<b> Clients </b> --}}
                      <a href="{{route('users.create')}}"><div class="btn btn-warning"> Ajouter <i class="material-icons">Nouveau Utilisateur</i></div></a>
                  </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="table-users">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                         Nom
                        </th>
                        <th>
                         Prenom
                        </th>
                        <th>
                           Telephone
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                           Role
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
          $('#table-users').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('users.list')}}",
            columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'firstname', name: 'firstname' },
                    { data: 'telephone', name: 'telephone' },
                    { data: 'email', name: 'email' },
                    { data: 'role.name', name: 'role.name' },
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
                        "targets": 6
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


