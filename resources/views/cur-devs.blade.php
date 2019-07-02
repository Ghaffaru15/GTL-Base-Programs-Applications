<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ghana Tech Lab</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/css/form-elements.css">
        <link rel="stylesheet" href="/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
        <style>
            html, body, div {
                font-family: 'Nunito', sans-serif;
            }
            body {
                background-image: url('images/last cover 2.png');
                background-repeat: no-repeat;
                opacity: 0.9;
            }
        </style>
    </head>

    <body>

		<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="" href="/">Ghana Tech Lab</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<span class="li-text" style="color:black">
								Get in touch with us
							</span> 
							<!-- <a href="#"><strong>links</strong></a>  -->
							<span class="li-text">
								<!-- here, or some icons:  -->
							</span> 
							<span class="li-social">
								<a href="https://www.facebook.com/pages/Azmindcom/196582707093191" target="_blank"><i class="fa fa-facebook"></i></a> 
								<a href="https://twitter.com/anli_zaimi" target="_blank"><i class="fa fa-twitter"></i></a> 
								<a href="https://plus.google.com/+AnliZaimi_azmind" target="_blank"><i class="fa fa-google-plus"></i></a> 
								<a href="https://github.com/AZMIND" target="_blank"><i class="fa fa-github"></i></a>
							</span>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
            <div class="container">
                
             <!--    <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1>Free <strong>Bootstrap</strong> Wizard</h1>
                        <div class="description">
                       	    <p>
                                This is a free responsive Bootstrap form wizard. 
                                Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
                            </p>
                        </div>
                    </div>
                </div> -->
                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                    	<form role="form" action="/ai/cur" method="post" class="f1">
                            @csrf
                    		<fieldset>
                    		    <!-- <h4>Tell us who you are:</h4> -->
                    			<div class="form-group">
                    			    <label for="f1-first-name">Name of organisation/consultant</label>
                                    <input type="text" name="org_name" class="f1-first-name form-control" id="f1-first-name">
                                </div>
                                <div class="form-group">
                                    <label for="f1-email">Email address</label>
                                    <input type="email" name="email" class="form-control" />
                                 </div>

                                 <div class="form-group">
                                    <label for="f1-phone_number"> Phone Number</label>
                                    <input type="number" class="form-control" name="phone_number" /> 
                                 </div>
                                 <div class="form-group">
                                    <label for="f1-proposal"> Upload Proposal</label>
                                    <input type="file" class="form-control" name="proposal" />
                                </div>
                                 <div class="f1-buttons">
                                    <!-- <button type="button" class="btn btn-previous">Previous</button> -->
                                    <button type="button" class="btn btn-next">Submit</button>
                                </div>
                            </fieldset>       
                          
                    	   
                    	</form>
                    </div>
                </div>
                    
            </div>
        </div>


        <!-- Javascript -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/retina-1.1.0.min.js"></script>
        <script src="js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>