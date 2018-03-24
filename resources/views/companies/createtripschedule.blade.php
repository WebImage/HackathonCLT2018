@extends('layouts/app')

@section('content')
    <div id="body">
        <div class="container">
            <h1>Trip Schedule: <strong>Trip Name</strong>
                <a href="{{ route('companytrips') }}" class="btn btn-primary">Save</a>
            </h1>
            <p>Now select the dates that you want to offer this program.</p>

            <table class="table table-bordered table-dark table-calendar">
                <tr>
                    <th width="14%">Sunday</th>
                    <th width="14%">Monday</th>
                    <th width="14%">Tuesday</th>
                    <th width="14%">Wednesday</th>
                    <th width="14%">Thursday</th>
                    <th width="14%">Friday</th>
                    <th width="14%">Saturday</th>
                </tr>
                @foreach($days as $day)
                    @php
                    $is_weekend = in_array($day['date']->format('w'), array(0, 6));
                    @endphp
                    @if ($day['date']->format('w') == 0)
                        <tr>
                    @endif
                        <td @if($is_weekend) class="weekend"@endif>{{ $day['date']->format('d') }}</td>
                    @if ($day['date']->format('w') == 6)
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
        <script type="text/javascript">
            $(function() {
                $('.table-calendar td').click(function() {
                    $(this).toggleClass('day-on');
                });
            });
        </script>
        </div>
@endsection