@extends('layouts/app')

@section('content')
    <div id="body">
        <div class="container">
            <h1>Create Field Trip</h1>

            <form method="" class="form">
                <div class="form-group">
                    <label>Trip Name:</label>
                    <input type="text" class="form-control">
                    <div class="form-text">Create a compelling name</div>
                </div>
                <div class="form-group">
                    <label>Trip Description:</label>
                    <textarea type="text" class="form-control"></textarea>
                    <div class="form-text">What will students learn as part of this fieldtrip</div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <p><label>What age group can attend?</label></p>
                            <label class="form-check-label" for="exampleCheck1">
                                <input type="checkbox" class="form-check-input"> Elementary<br/>
                                <input type="checkbox" class="form-check-input"> Middle School<br/>
                                <input type="checkbox" class="form-check-input"> High School
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-check">
                        <p><label>What programs does this fieldtrip support?</label></p>
                        <label class="form-check-label" for="exampleCheck1">
                            <input type="checkbox" class="form-check-input"> Science<br />
                            <input type="checkbox" class="form-check-input"> Technology<br />
                            <input type="checkbox" class="form-check-input"> Engineering<br />
                            <input type="checkbox" class="form-check-input"> Mathematics<br />
                        </label>
                    </div>
                    </div>
                </div>
                <p><a href="{{ route('createtripschedule') }}" class="btn btn-primary">Create</a></p>
            </form>
        </div>
        </div>
@endsection