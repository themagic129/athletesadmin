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


                <!-- My profile -->


                <h1>My Profile</h1>
                <p><strong>Name:</strong> {{ $user->name }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Created at:</strong> {{ $user->created_at }}</p>
                <p><strong>Updated at:</strong> {{ $user->updated_at }}</p>
                <p><strong>Updated at:</strong> {{ $user->updated_at }}</p>


                @foreach ($athlete as $athlet)
                    <p><img src="{{ asset('storage/images/' . $athlet->profile_photo) }}" width="80px" height="100px"
                            class="enlarge"></p>
                @endforeach


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
