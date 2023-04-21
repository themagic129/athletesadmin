@extends('adminlte::page')

@section('title', 'Athletes')

@section('content_header')

@stop

<!--Content main-->
@section('content')

    <div class="container col-12">

        <div class="row">
            <div class="col">

                <div class="card mt-4">
                    <h5 class="card-header text-center">My Profile</h5>
                    <div class="card-body">


                        <div class="alert alert-light text-center" role="alert">
                            <h5>Your profile is not created yet, please contact your trainer or coach!</h5>
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

                    <link rel="stylesheet" type="text/css"
                        href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
                @stop
