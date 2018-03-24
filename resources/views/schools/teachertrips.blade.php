@extends('layouts/app')

@section('content')
    <div id="body">
        <div class="container">
            <div class="pull-right">
                <a href="{{ route('scheduletrip') }}" class="btn btn-primary">Schedule New Field Trip</a>
            </div>
            <h1>Scheduled Field Trips</h1>

            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Date</th>
                    {{--<th>&nbsp;</th>--}}
                </tr>
                @foreach($days as $day)
                    @foreach($day['events'] as $event)
                    <tr>
                        <td width="70%">{{ $event['name'] }}</td>
                        <td>{{ $day['date']->format('m/d/Y') }}</td>
{{--                        <td align="right"><a href="{{ route('teachertrips') }}" class="btn btn-danger">Cancel Field Trip</a></td>--}}
                    </tr>
                    @endforeach
                @endforeach
            </table>
        </div>
    </div>
@endsection