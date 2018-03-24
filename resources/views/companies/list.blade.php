@extends('layouts/app')

@section('content')
    <div id="body">
        <div class="container">
            <div class="pull-right">
                <a href="{{ route('createfieldtrip') }}" class="btn btn-default">Add Field Trip</a>
            </div>
            <h1>Offered Field Trips</h1>

            <table class="table">
            @foreach($days as $day)
                @foreach($day['events'] as $event)
                <tr>
                    <td>{{ $event['title']}}</td>
                    <td><a href="{{ route('createtripschedule') }}">Schedule</a></td>
                </tr>
                @endforeach
            @endforeach
            </table>
        </div>
    </div>
@endsection