<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale()), false); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ghana Tech Lab Trianing Partners application</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">


        <!-- Styles -->
        <style>
            /*.whole {
                background-image: url('images/last cover 2.png');
            }*/
         /*   label {
                font-weight: bolder;
            }*/

            html, body {
                /*background-color: orange;*/
                background-image: url('images/New des.png');
                font-family: 'Source Sans Pro', sans-serif !important;

                /*background-repeat: no-repeat;*/
                /*opacity: 0.8;*/
                /*color: #636b6f;*/
                /*font-family: 'Nunito', sans-serif;*/
                /*font-weight: 400;*/
                height: 100vh;
                margin: 0;
                color: black;

            }

            .row {
                /*background-color: #00648d;*/
               /* background-image: url('images/last cover opaqued.png');
                opacity: 0.5;*/

            }
            input {
                
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


            .main {
                /*width: 90%;*/

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
        <div class="whole">
       <!--  <h1 style="text-align: center; margin-top: 50px"> Ghana Tech Lab, Apply to be a hub for the AI Program</h1><hr> -->
    <div class="container">
        <!-- <div class="card"> -->
                      <div class="row">
          <div class="col-md-3">  
              <img src="/images/Ghanatechlab.jpg" width="100px" height="100px"><hr>
          </div>
          <div class="col-md-6">
              <h2 style="text-align: center; margin-top: 50px; font-weight: 600"> Apply as a Training Partner for the AI Program</h2>
            </div>
            <div class="col-md-3"></div>
          </div>  
            <div class="row">
            <div class="col-md-3">
                
            </div>
          <!--   <div class="main"> -->
            <div class="col-md-6 actual_form">
        
                <form method="post" action="/ai/hubs" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <?php if(session('message')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('message'), false); ?>

                            </div>
                        <?php endif; ?>
                        <label for="name-of-hub">Name of Hub</label><br />
                        <input type="text" name="hub_name" class="form-control" value="<?php echo e(old('hub_name'), false); ?>" required />
                        <?php if($errors->has('hub_name')): ?>
                                <p class="error"><?php echo e($errors->first('hub_name'), false); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                     <!--    <label for="email">Email</label>
                        <input type="email" name="email" class="form-control"> -->
                        Is your organisation registered? <br />
                        <label class="radio-inline"><input type="radio" name="application_registered" value="Yes" checked>Yes</label> 
                        <label class="radio-inline"><input type="radio" name="application_registered" value="No">No</label>
                    </div>

                    <div class="form-group">
                        <label for="name-of-project-lead">Name of project lead</label><br />
                        <input type="text" name="project_lead_name" class="form-control" value="<?php echo e(old('project_lead_name'), false); ?>" required>
                          <?php if($errors->has('project_lead_name')): ?>
                                <p class="error"><?php echo e($errors->first('project_lead_name'), false); ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="phone-number">Telephone Number of the project lead</label><br />
                        <input type="number" name="project_lead_phone_number" class="form-control" value="<?php echo e(old('project_lead_phone_number'), false); ?>" required />
                          <?php if($errors->has('project_lead_phone_number')): ?>
                                <p class="error"><?php echo e($errors->first('project_lead_phone_number'), false); ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="email">Email address of the Project Lead</label><br />
                        <input type="email" name="project_lead_email" class="form-control" value="<?php echo e(old('project_lead_email'), false); ?>" required />
                          <?php if($errors->has('project_lead_email')): ?>
                                <p class="error"><?php echo e($errors->first('project_lead_email'), false); ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="logo">Upload a PNG version of your organisation's logo</label><br />
                        <input type="file" name="logo" accept=".png" required />
                          <?php if($errors->has('logo')): ?>
                                <p class="error"><?php echo e($errors->first('logo'), false); ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="training-room" style="text-align: justify;">Do you have a training room for at least 20 individuals?</label><br />
                         <label class="radio-inline"><input type="radio" name="training_room" value="Yes"checked>Yes</label> 
                        <label class="radio-inline"><input type="radio" name="training_room" value="No">No</label>

                    </div>
                    <div class="form-group">
                        <label for="laptops">Do you have at least 20 laptops (capable of running AI software)</label><br />
                         <label class="radio-inline"><input type="radio" name="laptops" value="Yes" checked>Yes</label> 
                        <label class="radio-inline"><input type="radio" name="laptops" value="No">No</label>
                    </div>
                    <div class="form-group">
                        <label for="committed" style="text-align: justify;">Are you committed to running a 6-week Artificial Intelligence(AI) Training Program? <br />NB: A grant of GHC15000 will be given to the organisation to run the training program.</label><br />
                         <label class="radio-inline"><input type="radio" name="committed" value="Yes" checked>Yes</label> 
                        <label class="radio-inline"><input type="radio" name="committed" value="No">No</label>
                    </div>

                    <div class="form-group">
                        <label for="incubation" style="text-align: justify;">Are you committed to running a 2-months incubation program for 4 participants after the training program?<br />NB: Separate grants will be provided to the organisation for the incubation program.</label><br />
                         <label class="radio-inline"><input type="radio" name="incubation" value="Yes" checked>Yes</label> 
                        <label class="radio-inline"><input type="radio" name="incubation" value="No">No</label>
                    </div>

                    <div class="form-group">
                        <label for="internship" style="text-align: justify;">Can you provide 20 internship places in AI-related roles for 2 months?<br /> NB: You must partner with local organisations to offer the internship places. </label><br />
                         <label class="radio-inline"><input type="radio" name="internship_provision" value="Yes" checked>Yes</label> 
                        <label class="radio-inline"><input type="radio" name="internship_provision" value="No">No</label>
                    </div>


                    <div class="form-group">
                        <label for="places-list" style="text-align: justify;">If yes, list the local organisations that will offer internship places. (Separate with commas)</label>
                        <textarea name="internship_places" class="form-control" rows="10"> <?php echo e(old('internship_places'), false); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="reports" style="text-align: justify;">Do you commit to provide regular and timely reports? NB: Reports on the training program will be required at the end of every week. Further information on reports will be outlined in the contract.</label><br />
                        <label class="radio-inline"><input type="radio" name="reports" value="Yes" checked>Yes</label> 
                        <label class="radio-inline"><input type="radio" name="reports" value="No">No</label>

                    </div>
                    <div class="form-group">
                        <label for="trainers" style="text-align: justify;">Can you provide two trainers(skilled and well-versed in Artificial Intelligence) ?</label><br />
                        <label class="radio-inline"><input type="radio" name="provide_trainers" value="Yes" checked>Yes</label> 
                        <label class="radio-inline"><input type="radio" name="provide_trainers" value="No">No</label>
                    </div>

                    <div class="form-group">
                        <label for="business" style="text-align: justify;">Can you provide business development lead for the 2-months incubation program?</label><br />
                        <label class="radio-inline"><input type="radio" name="business_lead" value="Yes" checked>Yes</label> 
                        <label class="radio-inline"><input type="radio" name="business_lead" value="No">No</label>
                    </div>
                  
                    <input type="submit" value="submit" class="btn btn-primary btn-block" style="margin-bottom: 30px;">
                </form>
            <!-- </div> -->
        </div>
             <div class="col-md-3"></div>
             </div>
     <!-- </div> -->
 </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</div>
</html>
<?php /**PATH /home/ghaff/webapps/gtl-base-programs-application/resources/views/welcome.blade.php ENDPATH**/ ?>