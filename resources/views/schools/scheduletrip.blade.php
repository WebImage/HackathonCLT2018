@extends('layouts/app')

@section('content')
    <div id="body">
        <div class="container">
            <h1>Search Field Trips</h1>
            <script type="text/javascript">
                function valSked(form) {
                    var $age = $('#age');
                    var $program = $('#program');
                    if ($age.val().length == 0) {
                        $age.addClass('field-error');
                    } else {
                        $age.removeClass('field-error');
                    }
//                    if ($program.val().length == 0) {
//                        $program.addClass('field-error');
//                    } else {
//                        $program.removeClass('field-error');
//                    }
                    if ($age.val().length == 0) {
                        return false;
                    }
                }
            </script>
            <form method="get" action="{{ route('scheduletrip') }}" onsubmit="return valSked(this);">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <select id="age" name="age" class="form-control">
                                <option value="">-- Select age group --</option>
                                <option value="1">Elementary</option>
                                <option value="2">Middle School</option>
                                <option value="3">High School</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <select id="program" name="program" class="form-control">
                                <option value="">-- Select program --</option>
                                <option value="1">Science</option>
                                <option value="2">Technology</option>
                                <option value="3">Engineering</option>
                                <option value="4">Mathematics</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="btn btn-primary" value="Search">
                    </div>
                </div>
            </form>
            <?php if (count($_GET) > 0): ?>
                <table id="results" class="table table-bordered table-dark table-calendar">
                    <tr>
                        <th width="14%">Sunday</th>
                        <th width="14%">Monday</th>
                        <th width="14%">Tuesday</th>
                        <th width="14%">Wednesday</th>
                        <th width="14%">Thursday</th>
                        <th width="14%">Friday</th>
                        <th width="14%">Saturday</th>
                    </tr>
                    @php
                        $count = -1;
                    @endphp
                    @foreach($days as $day)
                        @php
                        $count ++;
                        @endphp
                        @if ($count % 7 == 0)
                            <tr>
                        @endif
                                <td data-days="{{ count($day['events']) }}" <?php if (in_array($day['date']->format('w'), array(0, 6))): ?>class="weekend"<?php endif; ?>>
                                    {{ $day['date']->format('d') }}<br />
                                    @foreach($day['events'] as $event)
                                        <img src="{{ $event['logo'] }}" width="100" /><br />
                                        {{ $event['title'] }}
                                    @endforeach
                                </td>
                        @if ($count % 7 == 6)
                            </tr>
                        @endif
                    @endforeach
                </table>

                <script type="text/javascript">
                    $(function() {
                        $('.table-calendar td').click(function() {
                            if (parseInt($(this).attr('data-days')) == 0) return;
                            $(this).toggleClass('day-on');

                            var $splash = $('<div />').css({
                                visibility: 'hidden',
                                position: 'fixed',
                                textAlign: 'center',
                                width: 200,
                            }).appendTo($('body'));

                            if ($(this).hasClass('day-on')) {
                                $splash.text('Added!');
                            } else {
                                $splash.text('Cancelled');
                            }

                            $splash.css({
                                backgroundColor: 'rgba(0, 62, 255, 0.75)',
                                color: '#fff',
                                left: ($(window).width()/2) - ($splash.outerWidth()/2),
        //                        left: $(this).offset().left + $(this).outerWidth(),
                                'border-radius': 5,
                                padding: 20,
                                top: ($(window).height()/2) - ($splash.outerHeight()/2),
        //                        top: $(this).offset().top,
                                visibility: 'visible',
                            });
                            $splash.show('fast');
                            setTimeout(function() {
                                $splash.hide('fast', function() {
                                    $splash.remove();
                                });
                            }, 500);
                        });
                    });
                </script>
            <?php endif; ?>
        </div>
    </div>
@endsection