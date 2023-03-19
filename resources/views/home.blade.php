@extends('adminlte::page')

@section('title', 'Athletes')

@section('content_header')

@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card my-5 text-center">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Welcome to the System!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
