@extends('layouts.admin')
@section('title',"Exportar Excel - UTTECAM")

@section('content')
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                <div class="main-header">
                    <h4><i class="ti-id-badge"></i> Usuarios  </h4>
                </div>
                </div>
            </div>

         </div>

         <div class="content-wrapper"  id="tablaDatos">
            <div class="row" >
                <div class="col-lg-12">
                     <div class="card">

                        <div class="card-block">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col text-center">Nick name</th>
                                    <th scope="col text-center">Nombre</th>
                                    <th scope="col text-center">Apellidos</th>
                                    <th scope="col text-center">Correo</th>

                                    {{-- <th scope="col text-center" style="width: 20%">Acciones</th> --}}

                                  </tr>
                                </thead>

                                <tbody id="datos_alumno">
                                    @foreach ($users as $user )

                                    <tr>
                                        <td>{{ $user->user }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->first_surname }} {{ $user->second_surname }}</td>
                                        <td>{{ $user->email }}</td>

                                    </tr>
                                    @endforeach


                                </tbody>
                              </table>
                        </div>
                     </div>
                  </div>
            </div>
         </div>


@endsection
