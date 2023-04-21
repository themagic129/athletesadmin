@extends('adminlte::page')

@section('title', 'Add Athlete Metrics')

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

                                                <form action="{{ route('searchathlete') }}" method="GET"
                                                    class="form-inline my-2 my-lg-0">

                                                    @csrf

                                                    <input class="form-control mr-sm-2 col-8 ml-1"
                                                        placeholder="Athletes Name" name="q">

                                                    <button type="submit"
                                                        class="btn btn-primary my-2 my-sm-0">Search</button>

                                                </form>

                                            </div>

                                            @if (count($athletes) == 0)
                                                <p class="text-center">No data to display</p>
                                            @else
                                                <table class="table" id="mi-tabla">
                                                    <thead class="bg-dark">
                                                        <tr>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">First Name</th>
                                                            <th scope="col">Last Name</th>
                                                            <th scope="col">Organization</th>
                                                            <th scope="col">Team</th>
                                                            <th scope="col">Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($athletes as $athlete)
                                                            <tr>
                                                                <td>{{ $athlete->user_id }}</td>
                                                                <td>{{ $athlete->first_name }}</td>
                                                                <td>{{ $athlete->last_name }}</td>
                                                                <td>{{ $athlete->organization }}</td>
                                                                <td>{{ $athlete->team }}</td>
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



                            <form action="{{ route('athletemetrics.store') }}" method="post">

                                @csrf

                                <h5 class="card-header">Athlete's Metrics</h5>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="validationDefault01">ID</label>
                                        <input type="text" class="form-control" id="userid" value=""
                                            name="athlete_id" required readonly>

                                    </div>


                                    <div class="col mb-3">
                                        <label for="validationDefault02">Max. Velocity</label>
                                        <input type="text" class="form-control" id="validationDefault02" value=""
                                            name="max_velocity" required>
                                    </div>
                                </div>


                                <div class="form-row">

                                    <div class="col mb-3">
                                        <label for="validationDefault05">Max. Throwing Velocity</label>
                                        <input type="text" class="form-control" id="validationDefault05"
                                            name="max_throwing_velocity" required>
                                    </div>


                                    <div class="col mb-3">
                                        <label for="validationDefault05">Blast Plane Score</label>
                                        <input type="text" class="form-control" id="validationDefault05"
                                            name="blast_plane_score" required>
                                    </div>

                                </div>


                                <div class="form-row">


                                    <div class="col mb-3">
                                        <label for="validationDefault05">Blast Connection Score</label>
                                        <input type="text" class="form-control" id="validationDefault05"
                                            name="blast_connection_score" required>
                                    </div>

                                    <div class="col mb-3">
                                        <label for="validationDefault05">Blast Rotation Score</label>
                                        <input type="text" class="form-control" id="validationDefault05"
                                            name="blast_rotation_score" required>
                                    </div>


                                </div>

                                <div class="form-row">

                                    <div class="col">
                                        <div class="form-row">
                                            <div class="col mb-3">
                                                <label for="validationDefault05">Max Fb. Spin Rate</label>
                                                <input type="text" class="form-control" id="validationDefault05"
                                                    name="max_fb_spin_rate" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Avg. Fb Spin
                                                Rate</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                name="ave_fb_spin_rate">
                                        </div>

                                    </div>


                                </div>


                        </div>
                        <div class="form-row">
                            <div class="col text-center mt-3">
                                <a href="{{ route('athletemetrics.index') }}" class="btn btn-danger col-4 mb-3">Cancel</a>
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
        $('.btn-enviar').click(function() {
            var fila = $(this).closest('tr');
            var valor1 = fila.find('td:eq(0)').text();
            $('#userid').val(valor1);
        });
    </script>
@stop
