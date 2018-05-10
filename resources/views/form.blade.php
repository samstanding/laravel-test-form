<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    Welcome!
                </div>
                <div class="row justify-content-center">
                    <h1> Enter Applicant Information</h1>
                </div>
                <hr>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <form method="POST"  action="/create">
                            {{csrf_field() }}
                                <div class ="form-group">
                                    <label for="First Name">First Name: </label>
                                    <input type="text" class="form-control" id="first_name" name="first_name"  required >
                                </div>
                                <div class ="form-group">
                                    <label for="Last Name">Last Name: </label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" required >
                                </div>
                                <div class ="form-group">
                                    <label for="Birth Date">Birth Date: </label>
                                    <input type="date" class="form-control" id="birth_date" name="birth_date"  required >
                                </div>
                                <div class ="form-group">
                                    <label for="Hourly Rate">Hourly Rate (in dollars): </label>
                                    <input type="number" class="form-control" step="0.01" min="0" id="rate" name="rate"  required >
                                </div>
                                <div class ="form-group">
                                    <label for="Hours per Week">Hours per Week: </label>
                                    <input type="number" class="form-control" min="0" max="120" id="hours" name="hours"  required >
                                </div>
                                <div class ="form-group">
                                    <label for="Phone Number">Phone Number: </label>
                                    <input type="tel" placeholder="(123)-123-1234"  class="form-control" id="telephone" name="telephone"  required >
                                </div>
                                <div class ="form-group">
                                    <label for="email">Email Address: </label>
                                    <input type="email"  class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        @if (session('alert'))
                            <div class="alert alert-success">
                            {{ session('alert') }}
                            </div>
                        @endif
                            <div class="alert alert-error">
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li> {{ $error }} </li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
