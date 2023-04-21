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

                @foreach ($coaches as $coach)
                @endforeach


                <div class="card mt-4">
                    <h5 class="card-header">My Profile</h5>
                    <div class="card-body">

                        <div class="myinfo">

                            <div class="container">
                                <div class="row">
                                    <div class="col-2 mr-4">

                                        <h6 class="mt-2 lead"></h6>

                                    </div>

                                    <div class="col-12 mt-4">
                                        <h5 class="card-header">My Information</h5>
                                        <table class="table table-borderless">
                                            <div class="col mt-4 mr-4">
                                                <button type="button"
                                                    class="btn btn-outline-success col-2 ml-auto mr-auto mt-2 mb-2 text-center"
                                                    data-toggle="modal" data-target="#modal-edit-{{ $coach->user_id }}">
                                                    Edit Profile
                                                </button>

                                                <button type="button"
                                                    class="btn btn-outline-secondary col-2 ml-auto mr-auto mt-2 mb-2 text-center"
                                                    data-toggle="modal" data-target="#myworkouts">
                                                    Assigned Athletes
                                                </button>

                                            </div>
                                            <tbody>

                                                <tr>

                                                    <td>

                                                        <p><b>ID</b></p>
                                                        <p class="text-muted"> {{ $coach->user_id }}</p>

                                                        <p><b>Name:</b></p>
                                                        <p class="text-muted"> {{ $coach->first_name }}
                                                            {{ $coach->last_name }}</p>

                                                        <p><b>Email:</b></p>
                                                        <p class="text-muted">{{ $coach->email }}</p>



                                                    </td>

                                                    <td>
                                                        <p><b>Phone:</b></p>
                                                        <p class="text-muted">{{ $coach->phone }}</p>

                                                        <p><b>Certifications</b></p>
                                                        <p class="text-muted">{{ $coach->certifications }}</p>
                                                    </td>

                                                    <td>

                                                        <p><b>Organization</b></p>
                                                        <p class="text-muted">{{ $coach->organization }}</p>

                                                        <p><b>Specialty:</b></p>
                                                        <p class="text-muted">{{ $coach->specialty }}</p>


                                                    </td>


                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>


                        </div>
                        @include('myprofilecoach.edit')

                    </div>
                </div>



            </div>



        </div>


        <!-- Modal -->





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
