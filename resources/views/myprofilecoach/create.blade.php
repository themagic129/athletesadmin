@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>My Profile</h1>
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Created at:</strong> {{ $user->created_at }}</p>
        <p><strong>Updated at:</strong> {{ $user->updated_at }}</p>
    </div>
@endsection
