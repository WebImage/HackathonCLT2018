@extends('layouts/app')
@section('content')
    <div id="body" style="background-image:url('/images/neonbrand-426918-unsplash-ready.jpg');background-size: cover;min-height: 500px;">
        <div class="container">
            <div style="padding:20px;background-color:rgba(255, 255, 255, 0.7);border-radius:3px;">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Teacher Register</h4>
                        <form>
                            {{--<div class="form-group">--}}
                            {{--<label for="">School Name:</label>--}}
                            {{--<input type="text" class="form-control">--}}
                            {{--</div>--}}
                            <div class="form-group">
                                <label for="">Teacher Name:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Password:</label>
                                <input type="password" class="form-control">
                            </div>
                            <a href="{{ route('teachertrips') }}" _type="submit" class="btn btn-primary">Register</a>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h4>Teacher Login</h4>
                        <form>
                            <div class="form-group">
                                <label for="">Email:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Password:</label>
                                <input type="text" class="form-control">
                            </div>
                            <a href="{{ route('teachertrips') }}" _type="submit" class="btn btn-primary">Login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection