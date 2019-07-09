<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GTL curriculum developers</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                /*background-color: orange;*/
                background-image: url('images/New des.png');
                /*color: #636b6f;*/
                font-family: 'Nunito', sans-serif;
                font-weight: 600;
                height: 100vh;
                margin: 0;
            }

            .row {
                /*background-color: orange;*/
            }
            input {
                border
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .container {
                margin-top: 50px;
                /*border: 2px solid black;*/
            }

            .error {
                color: red;
            }

            .actual_form {
                background-color: white;
                box-shadow: 2px 4px 0 4px rgba(0,0,0,0.1);
                padding: 48px;
                z-index: 2;
                border-radius: 8px;
            }
        </style>
    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->


    <div class="container">
        <div class="row">
          <div class="col-md-3">  
              <img src="/images/Ghanatechlab.jpg" width="100px" height="100px"><hr>
          </div>
          <div class="col-md-6">
              <h2 style="text-align: center; margin-top: 50px; font-weight: 600"> Apply as an AI curriculum developer</h2>
            </div>
            <div class="col-md-3"></div>
          </div>
      </div>
        <!-- <div class="card"> -->
            <div class="row">
            <div class="col-md-3">
                
            </div>
            <div class="col-md-6 actual_form">
                @if (session('message'))
                    <div class="alert alert-success">
                        <span style="text-align: center;">{{ session('message') }}</span>
                    </div>
                @endif
                <form method="post" action="/ai/cur" enctype="multipart/form-data">
                    @csrf

             
                                <!-- <h4>Tell us who you are:</h4> -->
                                <div class="form-group">
                                    <label for="f1-first-name">Name of Organisation/Consultant</label>
                                    <input type="text" name="name" class="f1-first-name form-control" id="f1-first-name" required>
                                    @if ($errors->has('name'))
                                        <p class="error"> {{ $errors->first('name') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="f1-email">Email Address</label>
                                    <input type="email" name="email" class="form-control" required />
                                     @if ($errors->has('email'))
                                        <p class="error"> {{ $errors->first('email') }}</p>
                                    @endif
                                 </div>

                                 <div class="form-group">
                                    <label for="f1-phone_number">Phone Number</label>
                                    <input type="number" class="form-control" name="phone_number" required /> 
                                     @if ($errors->has('phone_number'))
                                        <p class="error"> {{ $errors->first('phone_number') }}</p>
                                    @endif
                                 </div>
                                 <div class="form-group">
                                    <label for="f1-proposal"> Upload Proposal</label>
                                    <input type="file" class="form-control" name="proposal" required />
                                     @if ($errors->has('proposal'))
                                        <p class="error"> {{ $errors->first('proposal') }}</p>
                                    @endif
                                </div>
                             
                                    <!-- <button type="button" class="btn btn-previous">Previous</button> -->
                                    <!-- <button type="button" class="btn btn-next">Submit</button> -->
                                <input type="submit" value="submit" class="btn btn-primary btn-block">

                             
                </form>
            </div>
             <div class="col-md-3"></div>
             </div>
     <!-- </div> -->
 </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>