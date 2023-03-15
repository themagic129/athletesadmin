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

                @foreach ($athlete as $athlet)
                @endforeach


                <div class="card mt-4">
                    <h5 class="card-header">My Profile</h5>
                    <div class="card-body">

                        <div class="myinfo">

                            <div class="container">
                                <div class="row">
                                    <div class="col-2">

                                        <div class="image-container">
                                            <img class="image-container"
                                                src="{{ asset('storage/images/' . $athlet->profile_photo) }}">
                                        </div>

                                        <h6 class="ml-4 mt-2 lead">{{ $athlet->first_name }} {{ $athlet->last_name }}</h6>

                                    </div>

                                    <div class="col-2 mt-4">
                                        <div class="editprofile">

                                            <div class="card text-center" style="width: 18rem;">
                                                <div class="card-header">
                                                    Actions
                                                </div>

                                                <a href=""
                                                    class="btn btn-primary col-8 ml-auto mr-auto mt-2 mb-2 text-center">Edit
                                                </a>

                                            </div>

                                        </div>
                                    </div>





                                </div>
                            </div>


                        </div>


                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
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
