@extends('adminlte::page')

@section('title', 'Athletes')

@section('content_header')

@stop
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<!--Content main-->
@section('content')

    <div class="container col-10">

        <div class="row">
            <div class="col">

                <!-- Tarjeta Contenedora de la tabla -->

                <div class="card mt-2" style="overflow-y: scroll; max-height: 800px;">
                    <div class="card-header">
                        <h5 class="ml-2">Manage Athletes</h5>
                        <div class="container-fluid mt-2">
                            <div class="row">

                                <div class="card-body">

                                    <button type="button" class="btn btn-primary" data-toggle="collapse"
                                        data-target="#myContent">
                                        Open / Close Add User
                                    </button>

                                    <div class="collapse show" id="myContent">
                                        <div class="card card-body">


                                            <div class="form-row mb-2">

                                                <form action="{{ route('searchuser') }}" method="GET"
                                                    class="form-inline my-2 my-lg-0" enctype="multipart/form-data">

                                                    @csrf

                                                    <input class="form-control mr-sm-2 col-8 ml-1" placeholder="User Email"
                                                        name="q">

                                                    <button type="submit"
                                                        class="btn btn-primary my-2 my-sm-0">Search</button>

                                                </form>

                                            </div>

                                            @if (count($users) == 0)
                                                <p class="text-center">No data to display</p>
                                            @else
                                                <table class="table" id="mi-tabla">
                                                    <thead class="bg-dark">
                                                        <tr>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">Username</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($users as $use)
                                                            <tr>
                                                                <td>{{ $use->id }}</td>
                                                                <td>{{ $use->name }}</td>
                                                                <td>{{ $use->email }}</td>
                                                                <td><button class="btn-enviar btn btn-info"
                                                                        data-dismiss="modal" data-toggle="collapse"
                                                                        data-target="#myContent">Add</button></td>
                                                            </tr>
                                                        @endforeach
                                            @endif
                                            </tbody>
                                            </table>

                                        </div>




                                    </div>


                                    </form>
                                    <!-- Fin Formulario -->




                                </div>
                            </div>



                            <form action="{{ route('athletes.store') }}" method="post" enctype="multipart/form-data">

                                @csrf

                                <h5 class="card-header">Athlete's Information</h5>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="validationDefault01">ID</label>
                                        <input type="text" class="form-control" id="userid" value=""
                                            name="user_id" required readonly>

                                    </div>


                                    <div class="col mb-3">
                                        <label for="validationDefault02">Organization</label>
                                        <input type="text" class="form-control" id="validationDefault02" value=""
                                            name="organization">
                                    </div>
                                </div>


                                <div class="form-row">

                                    <div class="col mb-3">
                                        <label for="validationDefault05">First Name</label>
                                        <input type="text" class="form-control" id="validationDefault05"
                                            name="first_name" required>
                                    </div>


                                    <div class="col mb-3">
                                        <label for="validationDefault05">Last Name</label>
                                        <input type="text" class="form-control" id="validationDefault05" name="last_name"
                                            required>
                                    </div>

                                    <div class="col mb-3">
                                        <label for="validationDefault04">Coach/Trainer</label>
                                        <select class="custom-select" id="validationDefault04" name="coach_trainer_id">
                                            <option selected disabled value="">Select...</option>
                                            @foreach ($coaches as $coach)
                                                <option value="{{ $coach->user_id }}">{{ $coach->first_name }}
                                                    {{ $coach->last_name }}</option>
                                            @endforeach

                                        </select>
                                    </div>


                                </div>

                                <div class="form-row">

                                    <div class="col mb-3">
                                        <label for="validationDefault04">Program</label>
                                        <select class="custom-select" id="validationDefault04" name="program">
                                            <option selected disabled value="">Select...</option>
                                            @foreach ($programs as $program)
                                                <option value="{{ $program->name }}">{{ $program->name }} <p>
                                                        ({{ $program->description }})
                                                    </p>
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="col mb-3">
                                        <label for="validationDefault03">Team</label>
                                        <input type="text" class="form-control" id="validationDefault03" name="team">
                                    </div>



                                </div>

                                <div class="form-row">


                                    <div class="col">
                                        <label for="validationDefault05">Birthday</label>
                                        <input id="datepicker" name="birthday" required />
                                        <script>
                                            $('#datepicker').datepicker({
                                                uiLibrary: 'bootstrap4'
                                            });
                                        </script>
                                    </div>


                                    <div class="col mb-3">
                                        <label for="validationDefault05">Height</label>
                                        <input type="text" class="form-control" id="validationDefault05"
                                            name="height">
                                    </div>


                                </div>

                                <div class="form-row">


                                    <div class="col mb-3">
                                        <label for="validationDefault05">Weight</label>
                                        <input type="text" class="form-control" id="validationDefault05"
                                            name="weight">
                                    </div>

                                    <div class="col mb-3">

                                        <label for="validationDefault04">Bats</label>
                                        <select class="custom-select" id="validationDefault04" name="bats">
                                            <option selected disabled value="">Select...</option>
                                            <option>L</option>
                                            <option>R</option>
                                            <option>B</option>

                                        </select>


                                    </div>

                                    <div class="col mb-3">
                                        <label for="validationDefault04">Throws</label>
                                        <select class="custom-select" id="validationDefault04" name="throws">
                                            <option selected disabled value="">Seleccionar...</option>
                                            <option>L</option>
                                            <option>R</option>

                                        </select>
                                    </div>


                                </div>

                                <div class="form-row">

                                    <div class="col">
                                        <div class="form-row">
                                            <div class="col mb-3">
                                                <label for="validationDefault05">Phone</label>
                                                <input type="text" class="form-control" id="validationDefault05"
                                                    name="phone">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                                placeholder="name@example.com" name="email" required>
                                        </div>

                                    </div>

                                    <div class="col">
                                        <label for="validationDefault04">Workout</label>
                                        <select class="custom-select" id="validationDefault04" name="workout_id">
                                            <option selected disabled value="">Select...</option>
                                            @foreach ($workouts as $workout)
                                                <option value="{{ $workout->id }}">{{ $workout->name }} <p>
                                                    </p>
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>


                                </div>


                                <div class="form-row">
                                    <div class="col">
                                        <label for="customFile" class="form-label">Profile Photo</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile"
                                                name="image" required>
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="form-row">
                            <div class="col text-center mt-3">
                                <a href="{{ route('athletes.index') }}" class="btn btn-danger col-4 mb-3">Cancel</a>
                                <button type="submit" class="btn btn-primary col-4 mb-3">Create</button>

                            </div>


                        </div>


                    </div>
                </div>




                </form>
                <!-- Fin Formulario -->

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

    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>

    <script>
        $('.btn-enviar').click(function() {
            var fila = $(this).closest('tr');
            var valor1 = fila.find('td:eq(0)').text();
            $('#userid').val(valor1);
        });
    </script>
@stop
