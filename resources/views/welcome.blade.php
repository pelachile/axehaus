<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">

    </head>
    <body>
    <div class="container">

        <div class="row marketing">
            <div class="header col-md-6">
            </div>
            <div class="sign-up align-self-center col-md-6">
                <div class="business-card">
                    <img src="/images/AxeHausBusinessCard.jpg" class="img-fluid" alt="">
                </div>
                <h2>Corpus Christi Axe Haus</h2>
                <p>
                    Fill out the form and we will send you information on pricing, memberships, business hours and more
                </p>
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div><br />
                @endif
                @if (\Session::has('failure'))
                    <div class="alert alert-danger">
                        <p>{{ \Session::get('failure') }}</p>
                    </div><br />
                @endif
                <form action="{{ url('/newsletter') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" />
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" />
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <h3>Proud members of the</h3>
                <img src="./images/WATL.png" alt="WATL" class="img-fluid">
            </div>
        </div><!-- marketing -->
    </div><!-- container -->
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <script src="js/app.js"></script>
    </body>
</html>
