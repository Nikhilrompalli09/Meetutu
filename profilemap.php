<!-- after after login -->
<?php
	session_start();
if(!$_SESSION["username"]){
header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlQ_2dmgoApsOSEqzD2JcAGyiKXZnrhWI"
  type="text/javascript"></script>
    <script type="text/javascript" charset="utf-8">

     $(document).ready(function() {
         var currgeocoder;

         //Set geo location lat and long

         navigator.geolocation.getCurrentPosition(function(position, html5Error) {

             geo_loc = processGeolocationResult(position);
             currLatLong = geo_loc.split(",");
             initializeCurrent(currLatLong[0], currLatLong[1]);

        });

        //Get geo location result

       function processGeolocationResult(position) {
             html5Lat = position.coords.latitude; //Get latitude
             html5Lon = position.coords.longitude; //Get longitude
             html5TimeStamp = position.timestamp; //Get timestamp
             html5Accuracy = position.coords.accuracy; //Get accuracy in meters
             return (html5Lat).toFixed(8) + ", " + (html5Lon).toFixed(8);
       }

       //  //Check value is present or not & call google api function

        function initializeCurrent(latcurr, longcurr) {
             currgeocoder = new google.maps.Geocoder();
             console.log(latcurr + "-- ######## --" + longcurr);
       }

    });

    </script>
	<style>
		#main{
			background-color: white
		}
		h1{
			color: #42a5f5;
    		text-align: center;
    		margin-top: 60px;
    		font-size: 50px;
    		font-weight: 400;
    		line-height: 1.1;
    		padding-bottom: 0px;
		}
		.circle{
			border-radius: 70%;
			margin-top: 80px;
		}
		#navbar{
			 
			padding-top: 0px;
			height: 60px;
		  	width: 100%;
		  	color: black;
		  	text-decoration: none;
		}
		#footer{
			padding-top: 20px;
			height: 100px;
		  	width: 100%;
		  	background-color: #42a5f5;
		}
		#navme,#navskills,#navprojects{
			color: #42a5f5;
			font-size: 20px;
    		font-weight: 200;
			padding-top:500px;
			padding-left: 100px;
			padding-right : 100px;
			text-decoration: none;
		}
		a{
			text-decoration: none;
		}
		#navme{
			font-family: 'Dancing Script', cursive;
		}
		#me {
		    max-width: 220px;
                    padding-left:80px;
		    height: 1px;
		    border: 0;
		    border-top: 3px solid #42a5f5;
		  }
                #itsme{
                     padding-left:80px;
                  }
		#name{
			color: white;
    		text-align: center;
    		margin-top: 60px;
    		font-size: 50px;
    		padding-top: 50px;
    		font-weight: 400;
    		line-height: 1.1;
    		padding-bottom: 0px;
		}

		  #nameHr{
		  	max-width: 800px;
		    height: 1px;
		    border: 0;
		    border-top: 3px solid white;
		    padding: 0;
		  }
		  #myworkHr{
		  	max-width: 400px;
		    height: 1px;
		    border: 0;
		    border-top: 3px solid #42a5f5;
		    padding: 0;
		  }
		  #degin{
		  	color: white;
    		text-align: center;
    		margin-top: 60px;
    		font-size: 30px;
    		padding-top: 0px;
    		font-weight: 400;
    		line-height: 1.1;
    		padding-bottom: 0px;
		  }
		  #nameContainer{
		  	height: 300px;
		  	width: 100%;
		  	background-color: #42a5f5;
		  }
		  #mywork{
		  	
		    margin-bottom: 50px;
		  }
		  #desp{
		  	/*color: black;*/
    		text-align: center;
    		margin-top: 60px;
    		font-size: 30px;
		  }
		  #despContainer{
		  	padding-left: 30%;
		  	padding-right: 30%;
		  }
		  span:before{
		  	content: " ";
		  	display: inline-block;
		  }
		  li{
		  	text-align: center;
    		margin-top: 20px;
    		font-size: 30px;
		  }
		  #dp{
		  	position: relative;
		  	padding-top: 20px;
		  	
		  }
		  #dpimg{
		  	/*border-radius: 25px;*/
		  	border: 4px solid white;
		  	margin-top: 200px;
		  }
		  .btn-info {
		    color: #fff;
		    background-color: green;
		    border-color: #46b8da;
		}
		#contact{
		  	/*color: black;*/
    		text-align: center;
    		margin-top: 20px;
    		font-size: 20px;
		  }
		  #cover{
		  	position:  absolute;
		  	height: 400px;
		  	width: 100%;
		  	background:url(img/cover.jpg) no-repeat;
		  }
	</style>
</head>
<body id="main">
	<div id="cover">
		
	</div>
	<center>

		<div class="matter-inner" id="dp">
		<div id=navbar>
			<span id="navme"><a href="index.php"><font color="white">Meetutu | Juspay</font></a></span>
			<span id="navskills"><a href="index.php"><font color="white">Home</font></a></span>
			<span id="navprojects"><a href="logout.php"><font color="white">Logout</font></a></span>
		</div>
		<span><img src="img/login1.jpg" id="dpimg" class="circle" height="300" width="290"></span>
		    <br>
		    <br>
		    <br>

		</div>
	</center>
	<div id="nameContainer">
		<center>
			<h1 id="name"><?php echo $_SESSION["username"] ?></h1>
			<h3 id="degin">Learner/Teacher</h3>
		</center>
	</div>
	<div id="despContainer">
		<p id="desp">
			Always interested in learning new things and try to develop applications using what I have learned. This made me develop some standalone and web applications. In future I am ready to take challenging things and work on it which projects me and my organization in greater heights. 
		</p>
	</div>
	<div id="mywork">
		<center><h1>Expert In</h1><hr id="myworkHr">
		<ul style="list-style-type:none"> 
			<li>C Programming</li>
			<li>Java programming</li>
			<li>Python programming</li>
			<li>Operating Sysytem</li>
			<li>DataBase Management System</li>
		</ul>
		</center>

	</div>
	<div id="contact">

		<center><h1>Search</h1><hr id="myworkHr">
		<p id="contact">Always interested in learning new things and try to develop applications using what I have learned. This made me develop some standalone and web applications. In future I am ready to take challenging things and work on it which projects me and my organization in greater heights. </p><br>
		<span id="btn"><a href="googlemaps.php"><button type="button" class="btn btn-info">View map</button></a></span> 
		</center>

	</div><br><br><br>
	<div id="footer"></div>

</body>
</html>