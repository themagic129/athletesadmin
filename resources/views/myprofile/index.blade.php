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

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                @if (isset($errorMessage))
                    <div class="alert alert-danger">
                        {{ $errorMessage }}
                    </div>
                @endif

                @foreach ($athlete as $athlet)
                @endforeach


                <div class="card mt-4">
                    <h5 class="card-header">My Profile</h5>
                    <div class="card-body">


                        <div class="myinfo">

                            <div class="container">
                                <div class="row">
                                    <div class="col-2 mr-4">

                                        <div class="container text-center" id="information">
                                            <div class="image-container">
                                                <img class="image-container"
                                                    src="{{ asset('storage/images/' . $athlet->profile_photo) }}">
                                            </div>

                                            <h6 class="mt-2 lead">{{ $athlet->first_name }} {{ $athlet->last_name }}</h6>


                                        </div>
                                    </div>

                                    <div class="col-2 mt-4 mr-4">
                                        <button type="button"
                                            class="btn btn-outline-success col-8 ml-auto mr-auto mt-2 mb-2 text-center"
                                            data-toggle="modal" data-target="#modal-edit-{{ $athlet->user_id }}">
                                            Edit Profile
                                        </button>

                                        <button type="button"
                                            class="btn btn-outline-warning col-8 ml-auto mr-auto mt-2 mb-2 text-center"
                                            data-toggle="modal" data-target="#modal-show-{{ $athlet->user_id }}">
                                            View Metrics
                                        </button>

                                        <button type="button"
                                            class="btn btn-outline-secondary col-8 ml-auto mr-auto mt-2 mb-2 text-center"
                                            data-toggle="modal" data-target="#myworkouts">
                                            My Workouts
                                        </button>


                                    </div>

                                    <div class="col-6 mt-4">
                                        <h5 class="card-header">Personal Information</h5>
                                        <table class="table table-borderless">

                                            <tbody>

                                                <tr>

                                                    <td>

                                                        <p><b>ID</b></p>
                                                        <p class="text-muted">{{ $athlet->user_id }}</p>

                                                        <p><b>Name:</b></p>
                                                        <p class="text-muted">{{ $athlet->first_name }}
                                                            {{ $athlet->last_name }}</p>

                                                        <p><b>Birthday:</b></p>
                                                        <p class="text-muted">{{ $athlet->birthday }}</p>

                                                        <p><b>Phone:</b></p>
                                                        <p class="text-muted">{{ $athlet->phone }}</p>

                                                        <p><b>Email:</b></p>
                                                        <p class="text-muted">{{ $athlet->email }}</p>


                                                    </td>


                                                    <td>

                                                        <p><b>Organization</b></p>
                                                        <p class="text-muted">{{ $athlet->organization }}</p>

                                                        <p><b>Team:</b></p>
                                                        <p class="text-muted">{{ $athlet->team }}</p>

                                                        <p><b>Assigned Trainer:</b></p>
                                                        <p class="text-muted">{{ $athlet->coach_trainer->first_name }}
                                                            {{ $athlet->coach_trainer->last_name }}</p>

                                                        <p><b>Program:</b></p>
                                                        <p class="text-muted">{{ $athlet->program }}</p>

                                                        <p><b>Height:</b></p>
                                                        <p class="text-muted">{{ $athlet->height }}</p>

                                                    </td>

                                                    <td>
                                                        <p><b>Weight:</b></p>
                                                        <p class="text-muted">{{ $athlet->weight }}</p>

                                                        <p><b>Bats:</b></p>
                                                        <p class="text-muted">{{ $athlet->bats }}</p>

                                                        <p><b>Throws:</b></p>
                                                        <p class="text-muted">{{ $athlet->throws }}</p>

                                                    </td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>


                        </div>

                        @include('myprofile.edit')
                        @include('myprofile.show')



                    </div>
                </div>



            </div>



        </div>


        <!-- Modal -->
        <div class="modal fade" id="myworkouts" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" style="max-width: 60%;"role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Workout</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="card">
                            <h5 class="card-header text-center">Workout's Information</h5>
                            <div class="card-body">

                                @foreach ($athletetest as $athlete)
                                @endforeach

                                @foreach ($program_workout as $program_worko)
                                @endforeach

                                <div class="form-group">
                                    <label for="formGroupExampleInput">Workout Name</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        value="{{ $athlete->name }}" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="formGroupExampleInput">Program</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        value="{{ $program_worko->name }}" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="formGroupExampleInput">Workout Notes</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        value="{{ $athlete->description }}" disabled>
                                </div>



                            </div>
                        </div>

                        <div class="card">
                            <h5 class="card-header text-center">Exercises</h5>
                            <div class="card-body">

                                <table class="table text-center">

                                    <thead class="thead-dark">

                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Num. Reps</th>
                                            <th>Num. Sets</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($exercise_workout as $exercise)
                                            <tr>
                                                <td>{{ $exercise->name }}</td>
                                                <td>{{ $exercise->description }}</td>
                                                <td>{{ $exercise->num_reps }}</td>
                                                <td>{{ $exercise->num_sets }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>




                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>




    </div>

    <!--<div class="row">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="text-center">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <img class="rounded profile_photo" src="{{ asset('storage/images/' . $athlet->profile_photo) }}">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>-->


    </div>



    </div>


    </div>
    </div>


    </div>



@stop




@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .image-container {

            width: 150px;
            height: 220px;
            border-radius: 100px
        }
    </style>


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
