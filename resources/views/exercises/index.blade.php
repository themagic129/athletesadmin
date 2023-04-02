@extends('adminlte::page')

@section('title', 'Exercises')

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
                        <h5 class="ml-2">Manage Exercises</h5>
                        <div class="container-fluid mt-2">
                            <div class="row">
                                <div class="col">
                                    <div class="card mt-1">
                                        <div class="card-body">

                                            <div class="row">


                                                <div class="col d-flex">
                                                    <!-- Form Busqueda -->
                                                    <form action="{{ route('exercises.index') }}" method="GET"
                                                        class="form-inline my-2 my-lg-0">

                                                        @csrf

                                                        <input class="form-control mr-sm-2" placeholder="Excercises Name"
                                                            name="q">
                                                        <button type="submit"
                                                            class="btn btn-primary my-2 my-sm-0">Search</button>

                                                    </form>

                                                    <button type="button" class="btn btn-info ml-2" data-bs-toggle="modal"
                                                        data-bs-target="#exercise-modal">
                                                        Create Exercise
                                                    </button>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="card-body" style="margin-top: -0.5rem !important;">


                        @if (count($exercises) == 0)
                            <p class="text-center">No data to display</p>
                        @else
                            <table class="table text-center">

                                <thead class="thead-dark">

                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Workout</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($exercises as $exercise)
                                        <tr>
                                            <td>{{ $exercise->id }}</td>
                                            <td>{{ $exercise->exercise_name }}</td>
                                            <td>{{ $exercise->description }}</td>
                                            <td>{{ $exercise->name }}</td>
                                            <td>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary btn-md" data-toggle="modal"
                                                    data-target="#modal-edit-{{ $exercise->id }}">
                                                    Edit
                                                </button>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger btn-md" data-toggle="modal"
                                                    data-target="#modal-delete-{{ $exercise->id }}">
                                                    Delete
                                                </button>


                                            </td>
                                        </tr>

                                        @include('exercises.destroy')
                                        @include('exercises.edit')
                                        @include('exercises.create')
                                    @endforeach
                        @endif
                        </tbody>
                        </table>

                        <!-- Fin Tabla Productos -->
                        {{ $exercises->links() }}

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
