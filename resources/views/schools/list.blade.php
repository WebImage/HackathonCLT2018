@extends('layouts/app')

@section('content')
    <div id="body">
        <div class="container">
            <div class="pull-right">
                <a href="{{ route('createfieldtrip') }}" class="btn btn-default">Create Field Trip</a>
            </div>
            <h1>Scheduled Field Trips</h1>

            <table class="table">
                @foreach(array('Trip') as $trip)
                    <tr>
                        <td>{{ $trip }}</td>
                        <td><a href="{{ route('createtripschedule') }}">Schedule</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection