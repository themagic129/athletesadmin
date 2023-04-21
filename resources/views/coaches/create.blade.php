@extends('adminlte::page')

@section('title', 'Coaches')

@section('content_header')

@stop

<!--Content main-->
@section('content')

    <div class="container col-10">

        <div class="row">
            <div class="col">

                <!-- Tarjeta Contenedora de la tabla -->

                <div class="card mt-2" style="overflow-y: scroll; max-height: 800px;">
                    <div class="card-header">
                        <h5 class="ml-2">Manage Coaches</h5>
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

                                                <form action="{{ route('coachsearchuser') }}" method="GET"
                                                    class="form-inline my-2 my-lg-0">

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


                            <form action="{{ route('coaches.store') }}" method="post">

                                @csrf

                                <h5 class="card-header mb-3">Coach Information's</h5>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="validationDefault01">ID</label>
                                        <input type="text" class="form-control" id="userid" value=""
                                            name="user_id" required readonly>

                                    </div>


                                    <div class="col mb-3">
                                        <label for="validationDefault02">Certifications</label>
                                        <input type="text" class="form-control" id="validationDefault02" value=""
                                            name="certifications" required>
                                    </div>
                                </div>


                                <div class="form-row">

                                    <div class="col mb-3">
                                        <label for="validationDefault05">Organization</label>
                                        <input type="text" class="form-control" id="validationDefault05"
                                            name="organization" required>
                                    </div>


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

                                </div>

                                <div class="form-row">

                                    <div class="col mb-3">
                                        <label for="validationDefault05">Phone</label>
                                        <input type="text" class="form-control" id="validationDefault05" name="phone"
                                            required>
                                    </div>

                                    <div class="col mb-3">
                                        <label for="validationDefault03">Email</label>
                                        <input type="text" class="form-control" id="validationDefault03" name="email"
                                            required>
                                    </div>


                                </div>

                                <div class="form-row">

                                    <div class="col mb-3">
                                        <label for="validationDefault05">Specialty</label>
                                        <input type="text" class="form-control" id="validationDefault05" name="specialty"
                                            required>
                                    </div>


                                </div>


                                <div class="form-row">
                                    <div class="col text-center mt-3">
                                        <a href="{{ route('coaches.index') }}" class="btn btn-danger col-4 mb-3">Cancel</a>
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
