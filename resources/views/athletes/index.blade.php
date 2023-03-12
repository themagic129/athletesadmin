@extends('adminlte::page')

@section('title', 'Athletes')

@section('content_header')

@stop

<!--Content main-->
@section('content')

    <div class="container col-12">

        <div class="row">
            <div class="col">
                @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <script>
                            window.onload = function() {
                                setTimeout(function() {
                                    var alert = document.querySelector('.alert');
                                    alert.style.opacity = 0;
                                    setTimeout(function() {
                                        alert.style.display = 'none';
                                    }, 500);
                                }, 3000);
                            };
                        </script>
                    </div>
                @endif


                <!-- Tarjeta Contenedora de la tabla -->
                <div class="card mt-2">
                    <div class="card-header">
                        <h5 class="ml-2">Manage Athletes</h5>
                        <div class="container-fluid mt-2">
                            <div class="row">
                                <div class="col">
                                    <div class="card mt-1">
                                        <div class="card-body">

                                            <!-- Button trigger modal

                                                <div class="row">
                                                <div class="col-2">
                                                  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#testmodal">
                                                    Agregar Producto
                                                  </button>
                                               
                                                </div>
                                                 -->

                                            <div class="row">


                                                <div class="col d-flex">
                                                    <!-- Form Busqueda -->
                                                    <form action="{{ route('athletes.index') }}" method="GET"
                                                        class="form-inline my-2 my-lg-0">

                                                        @csrf

                                                        <input class="form-control mr-sm-2" placeholder="Athlete Name"
                                                            name="q">
                                                        <button type="submit"
                                                            class="btn btn-primary my-2 my-sm-0">Search</button>

                                                    </form>

                                                    <a href="{{ route('athletes.create') }}"
                                                        class="btn btn-info ml-2">Create Athlete</a>

                                                </div>


                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="card-body" style="margin-top: -0.5rem !important;">


                        @if (count($athletes) == 0)
                            <p class="text-center">No data to display</p>
                        @else
                            <table class="table text-center">

                                <thead class="thead-dark">

                                    <tr>
                                        <th>ID</th>
                                        <th>Organization</th>
                                        <th>Team</th>
                                        <th>Coach</th>
                                        <th>Program</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Birthday</th>
                                        <th>Height</th>
                                        <th>Weight</th>
                                        <th>Bats</th>
                                        <th>Throws</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Profile Photo</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($athletes as $athlete)
                                        <tr>
                                            <td>{{ $athlete->user_id }}</td>
                                            <td>{{ $athlete->organization }}</td>
                                            <td>{{ $athlete->team }}</td>
                                            <td>{{ $athlete->coach_trainer->first_name }}
                                                {{ $athlete->coach_trainer->last_name }}</td>
                                            <td>{{ $athlete->program }}</td>
                                            <td>{{ $athlete->first_name }}</td>
                                            <td>{{ $athlete->last_name }}</td>
                                            <td>{{ $athlete->birthday }}</td>
                                            <td>{{ $athlete->height }}</td>
                                            <td>{{ $athlete->weight }}</td>
                                            <td>{{ $athlete->bats }}</td>
                                            <td>{{ $athlete->throws }}</td>
                                            <td>{{ $athlete->phone }}</td>
                                            <td>{{ $athlete->email }}</td>
                                            <td>{{ $athlete->profile_photo }}</td>


                                            <td>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary btn-md" data-toggle="modal"
                                                    data-target="#modal-edit-{{ $athlete->user_id }}">
                                                    Edit
                                                </button>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger btn-md" data-toggle="modal"
                                                    data-target="#modal-delete-{{ $athlete->user_id }}">
                                                    Delete
                                                </button>

                                            </td>
                                        </tr>
                                        @include('athletes.destroy')
                                        @include('athletes.edit')
                                    @endforeach
                        @endif
                        </tbody>
                        </table>

                        <!-- Fin Tabla Productos -->


                    </div>
                    <div class="card-footer text-muted">

                    </div>
                </div>



                <!-- Fin Tarjeta -->


            </div>
        </div>


    </div>



@stop




@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@stop
