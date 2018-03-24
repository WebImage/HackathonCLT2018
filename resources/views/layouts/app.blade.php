<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="/css/app.css" type="text/css" />
    <script type="text/javascript" src="/js/app.js"></script>
    <script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
</head>
<body>
<div id="header">
    <div class="container">
        <div id="logo"><img src="/images/LOGOBB1.png" width="100" /> Building Bridges CLT</div>
        <nav style="display:inline-block;margin-left: 20px;" class="pull-right">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('companies') }}" class="nav-link">Companies</a></li>
                <li class="nav-item"><a href="{{ route('schools') }}" class="nav-link">Teachers</a></li>
                <li class="nav-item"><a href="{{ route('experiences') }}" class="nav-link">Experiences</a></li>
                <li class="nav-item"><a href="{{ route('apps') }}" class="nav-link"><img src="/images/appstore.png" width="100" height=""></a></li>
                <li class="nav-item"><a href="{{ route('apps') }}" class="nav-link"><img src="/images/playstore.png" width="120" height=""></a></li>
            </ul>
        </nav>
    </div>
</div>
@yield('content')
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h4>Quick Links</h4>
                <a href="#">Resources</a><br />
                <a href="#">About</a><br />
                <a href="#">Contact</a><br />
            </div>
            <div class="col-md-5">
                {{--<img src="/images/LOGOBB1.png" width="100" align="right">--}}
                <h4>About Building Bridges CLT</h4>
                Building Bridges CLT is a community outreach program.  Our goal is to provide connnections between youth and inspiring mentors to promote STEM careers.  Field trip experiences will inform and inspire the up-and-coming generation.
                Building partnerships between youth and companies will bridge the gap in social mobility.
            </div>
            <div class="col-md-5">
                <h4>Contact Us</h4>
                <form method="post" class="form">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>