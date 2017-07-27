<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="google-signin-scope" content="profile email">
    	<meta name="google-signin-client_id" content="720568529629-kq1sn4o37a91tsmoq1bt2kvpaftrr7v5.apps.googleusercontent.com">
    	<script src="https://apis.google.com/js/platform.js" async defer></script>

		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico&subset=latin-ext,vietnamese" rel="stylesheet">
		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/loginstyle1.css">
		<link rel="stylesheet" href="css/customicon.css">
        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="css/animate.css">
         <link rel="stylesheet" href="fonts/stylesheet.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/plugins.css" />
        <!--Theme custom css -->
        <link rel="stylesheet" href="css/style.css">
        <!--Theme Responsive css-->
        <link rel="stylesheet" href="css/responsive.css" />
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=latin-ext" rel="stylesheet">

		<title>Login</title>
		<script type="text/javascript">
			 function onSignIn(googleUser) {
	        // Useful data for your client-side scripts:
	        var profile = googleUser.getBasicProfile();
	        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
	        console.log('Full Name: ' + profile.getName());
	        console.log('Given Name: ' + profile.getGivenName());
	        console.log('Family Name: ' + profile.getFamilyName());
	        console.log("Image URL: " + profile.getImageUrl());
	        console.log("Email: " + profile.getEmail());
	        // The ID token you need to pass to your backend:
	        var id_token = googleUser.getAuthResponse().id_token;
	        console.log("ID Token: " + id_token);
	        window.location="profilemap.php";
      };
		</script>
		<style>
		body{
			    font-family: 'Raleway', sans-serif;
		}
			.btn-deep-purple {
			    background: #84d14e;
			    border-radius: 18px;
			    padding: 5px 90px;
			    color: #FFF;
			    font-weight: 600;
			    float: right;
				-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
			    -moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
			     box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
            }
            
            .left-side {
			    padding: 0px 0px 100px;
			    background: #9100ff;
			    background-size: cover;
			}
			.right-side{
				padding: 50px 0px 100px;
			}
			
		</style>
	</head>
	<body>
		 <header id="header" class="navbar-fixed-top">
            <div class="container">
                <div class="main_menu wow fadeInDown" data-wow-duration="2s">	
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand our_logo" href="index.php">Meetutu</a>
                                <div class="call_us">
                                    Juspay
                                </div>	  
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="index.php"><font color="black">Home</font></a></li>
                                    <li><a href="index.php.php"><font color="black">About Meetutu</font></a></li>
                                    <li><a href="signup.php"><font color="black">Sign Up</font></a></li>
                                    <!-- /*<li><a href="#" style="background:#6FB048;color:#fff;border-radius:2px;padding:5px 10px;margin-top:10px;">Get Stared</a></li>*/ -->
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>

                </div>
            </div>
        </header>






		<div class="container">
	    
		<div class="col-sm-8 col-sm-offset-2 main">
		<div class="col-sm-6 left-side">
		<h1 id="htag">Welcome<br>Meetutu</h1>
		<p>MEETUTU - The new generation student-teacher collabration. We are here to engage student and teachers.</p>
		<br>
		<center><p>Login with social media</p>
		<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" target="editProile.php">Login With Google</div>

		</div><!--col-sm-6-->
		
		<div class="col-sm-6 right-side">
		<center><h1>Login</h1></center>
		
		
<!--Form with header-->
<div class="form">

	<form method="post" action="login.php">
        <div class="form-group">
		    <label for="form2">Your email</label>
            <input type="text" name="email" class="form-control">
            
        </div>

        <div class="form-group">
		    <label for="form4">Your password</label>
            <input type="password" name="password" class="form-control">
           
        </div>

        <div class="text-xs-center">
        	<br>

            <center><button name="btnsubmit" id="btnsubmit" class="btn btn-deep-purple"/>Login</button></center>
        </div>
    </form>

</div><br><br>
	<center><p>Don't have an account?<p></center><center><p><a href="signup.php"> Create your account here</a><br><br>it takes less than a minute</p></center>
<!--/Form with header-->

		</div><!--col-sm-6-->
		
		
        </div><!--col-sm-8-->
        
        </div><!--container-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="form1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>







