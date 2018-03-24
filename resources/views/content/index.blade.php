@extends('layouts/app')
@section('content')
    <div style="background-image:url('/images/bridge-clouds-cloudy-556416-home.jpg');background-size:cover;background-position-y:-100px;">
        <div style="background-color:rgba(0, 0, 0, .5);color: #fff;padding:120px 0;text-align:center;min-height: 500px;">
            <span style="font-size: 60px;font-family: Lobster">Let's build the community together</span><br />
            <span style="font-size: 30px;">One trip at a time for a brighter future</span><br />
            <div style="margin-top: 5px;">
                <a href="{{ route('schools') }}" class="btn btn-primary" style="margin-right:5px;"><strong>Teachers Start Here</strong></a>
                <a href="{{ route('companies') }}" class="btn btn-primary" style="margin-left:5px;"><strong>Companies Start Here</strong></a>
            </div>
        </div>
    </div>
@endsection