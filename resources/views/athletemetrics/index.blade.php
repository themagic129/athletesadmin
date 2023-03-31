@extends('adminlte::page')

@section('title', 'Athlete Metrics')

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
                        <h5 class="ml-2">Athlete Metrics</h5>
                        <div class="container-fluid mt-2">
                            <div class="row">
                                <div class="col">
                                    <div class="card mt-1">
                                        <div class="card-body">

                                            <div class="row">

                                                <div class="col d-flex">
                                                    <!-- Form Busqueda -->
                                                    <form action="{{ route('athletemetrics.index') }}" method="GET"
                                                        class="form-inline my-2 my-lg-0">

                                                        @csrf

                                                        <input class="form-control mr-sm-2" placeholder="Athlete Name"
                                                            name="q">
                                                        <button type="submit"
                                                            class="btn btn-primary my-2 my-sm-0">Search</button>

                                                    </form>


                                                    <a href="{{ route('athletemetrics.create') }}"
                                                        class="btn btn-info ml-2">Add
                                                        Athlete Metric</a>



                                                </div>


                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="card-body" style="margin-top: -0.5rem !important;">


                        @if (count($athletemetrics) == 0)
                            <p class="text-center">No data to display</p>
                        @else
                            <table class="table text-center">

                                <thead class="thead-dark">

                                    <tr>
                                        <th>ID</th>
                                        <th>Athlete</th>
                                        <th>Max. Velocity</th>
                                        <th>Max. Throwing Vel.</th>
                                        <th>Blast Plane Score</th>
                                        <th>Blast Connection Score</th>
                                        <th>Blast Rotation Score</th>
                                        <th>Max Fb. Spin Rate</th>
                                        <th>Ave. Fb. Spin Rate</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($athletemetrics as $athletemetric)
                                        <tr>
                                            <td>{{ $athletemetric->id }}</td>
                                            <td>{{ $athletemetric->athlete->first_name }}
                                                {{ $athletemetric->athlete->last_name }}</td>
                                            <td>{{ $athletemetric->max_velocity }}</td>
                                            <td>{{ $athletemetric->max_throwing_velocity }}</td>
                                            <td>{{ $athletemetric->blast_plane_score }}</td>
                                            <td>{{ $athletemetric->blast_connection_score }}</td>
                                            <td>{{ $athletemetric->blast_rotation_score }}</td>
                                            <td>{{ $athletemetric->max_fb_spin_rate }}</td>
                                            <td>{{ $athletemetric->ave_fb_spin_rate }}</td>

                                            <td>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary btn-md" data-toggle="modal"
                                                    data-target="#modal-edit-{{ $athletemetric->id }}">
                                                    Edit
                                                </button>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger btn-md" data-toggle="modal"
                                                    data-target="#modal-delete-{{ $athletemetric->id }}">
                                                    Delete
                                                </button>


                                            </td>
                                        </tr>
                                        @include('athletemetrics.destroy')
                                        @include('athletemetrics.edit')
                                    @endforeach
                        @endif
                        </tbody>
                        </table>

                        <!-- Fin Tabla Productos -->
                        {{ $athletemetrics->links() }}

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
