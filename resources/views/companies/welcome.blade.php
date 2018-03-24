@extends('layouts/app')
@section('content')
    <div id="body">
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-4">Welcome!</h1>
                <p class="lead">Start by creating your first field trip.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="{{ route('createfieldtrip') }}" role="button">Create Field Trip</a>
                </p>
            </div>
        </div>
    </div>
@endsection