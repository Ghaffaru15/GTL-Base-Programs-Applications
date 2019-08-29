<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale()), false); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>National Pitch Summit</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                /*background-color: orange;*/
                background-image: url('images/PORTAL.jpg');
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
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home'), false); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login'), false); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register'), false); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

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
              <h2 style="text-align: center; margin-top: 50px; font-weight: 600; color:white"> Welcome to the National Startup Investment Pitch Summit</h2>
            </div>
            <div class="col-md-3"></div>
          </div>
      </div>
        <!-- <div class="card"> -->
            <div class="row">
            <div class="col-md-3">
                
            </div>
            <div class="col-md-6 actual_form">
                <?php if(session('message')): ?>
                    <div class="alert alert-success">
                        <span style="text-align: center;"><?php echo e(session('message'), false); ?></span>
                    </div>
                <?php endif; ?>
                <form method="post" action="/national-pitch" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

             
                                <!-- <h4>Tell us who you are:</h4> -->
                                <div class="form-group">
                                    <label for="f1-first-name">Name</label>
                                    <input type="text" name="name" class="f1-first-name form-control" id="f1-first-name" required>
                                    <?php if($errors->has('name')): ?>
                                        <p class="error"> <?php echo e($errors->first('name'), false); ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="f1-company">Company / Institution</label>
                                    <input type="text" name="company" class="form-control" required />
                                     <?php if($errors->has('company')): ?>
                                        <p class="error"> <?php echo e($errors->first('company'), false); ?></p>
                                    <?php endif; ?>
                                 </div>

                                 <div class="form-group">
                                    <label for="f1-designation">Your Designation</label>
                                    <input type="text" class="form-control" name="designation" required /> 
                                     <?php if($errors->has('designation')): ?>
                                        <p class="error"> <?php echo e($errors->first('designation'), false); ?></p>
                                    <?php endif; ?>
                                 </div>

                                 <div class="form-group">
                                    <label for="f1-contact">Your contact</label>
                                    <input type="number" class="form-control" name="contact" required /> 
                                     <?php if($errors->has('contact')): ?>
                                        <p class="error"> <?php echo e($errors->first('contact'), false); ?></p>
                                    <?php endif; ?>
                                 </div>
                                 <div class="form-group">
                                    <label for="f1-email">Your email</label>
                                    <input type="email" class="form-control" name="email" required /> 
                                     <?php if($errors->has('email')): ?>
                                        <p class="error"> <?php echo e($errors->first('email'), false); ?></p>
                                    <?php endif; ?>
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
</html><?php /**PATH /home/ghaff/web-projects/GTL-Base-Programs-Applications/resources/views/national-pitch.blade.php ENDPATH**/ ?>