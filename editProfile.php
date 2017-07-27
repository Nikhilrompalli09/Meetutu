<?php
	session_start();
	if(!$_SESSION["username"]){
		header("location: login1.php");
	}
?>


<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico&subset=latin-ext,vietnamese" rel="stylesheet">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/editProfilestyle.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=latin-ext" rel="stylesheet">

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" rel="stylesheet" />

		<title>Edit Profile</title>

		<script src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  		crossorigin="anonymous">
  		</script>

		<script>
	
			
	
		$(function() {

			var ulList = $('.ulList'),
			        ulImg  = $('.ulList .ulImg'),
			        ulTxt  = $('.ulList .ulTxt'),
			        liList = $('.liList'),
			        liDiv  = $('.liList .li'),
			        liImg  = $('.liList .li img');

			    // Hide Li List When Toggle UL List And Click Away It //

			    ulList.on('click', function (e) {
			            liList.toggle();
			            e.stopPropagation(); // stope Li List Toggle Event For Run The Dom Event (Click Away Li List)
			            $(document).on('click', function () { // Function To Hide Li List When Click Any Place in Dom
			            liList.hide()
			        });
			    });


			    // Put Li List Img And Text In Ul List //

			    liDiv.on('click', function () {
			        ulImg.attr('src', $(this).children('img').attr('src')).show();
			        ulTxt.text($(this).text());
			    });


	/*-------------------------autocomplet-------------------------------*/
	
			var availableTags = [
			"ActionScript",
			"AppleScript",
			"Asp",
			"BASIC",
			"C",
			"C++",
			"Clojure",
			"COBOL",
			"ColdFusion",
			"Erlang",
			"Fortran",
			"Groovy",
			"Haskell",
			"Java",
			"JavaScript",
			"Lisp",
			"Perl",
			"PHP",
			"Python",
			"Ruby",
			"Scala",
			"Scheme"
			];

		function split( val ) {
			return val.split( /,\s*/ );
		}

		function extractLast( term ) {
			return split( term ).pop();
		}

		$( "#tag" ).bind( "keydown", function( event ) {					// don't navigate away from the field on tab when selecting an item
			if ( event.keyCode === $.ui.keyCode.TAB && $( this ).data( "ui-autocomplete" ).menu.active ) {
					event.preventDefault();
			}
		}).autocomplete({
				minLength: 0,
				source: function( request, response ) {              // delegate back to autocomplete, but extract the last term
					response( $.ui.autocomplete.filter(
					availableTags, extractLast( request.term ) ) );
				},
				focus: function() {						// prevent value inserted on focus
					return true;
				},
				select: function( event, ui ) {
					var terms = split( this.value );         // remove the current input
					terms.pop();                           // add the selected item
					terms.push( ui.item.value );			// add placeholder to get the comma-and-space at the end
					terms.push( "" );
					this.value = terms.join( ", " );
					return false;
				}
			});
		});
		</script>


	</head>
	<body>
		<div class="container">
	    
		<div class="col-sm-8 col-sm-offset-2 main">
		<div class="col-sm-6 right-side">
		<center><h1>Edit Profile</h1></center>
		
		
<!--Form with header-->
<div class="form">
	<form method="post" action="registerProfile.php">
		<div class="form-group">
		    <label for="form2">First Name</label>
            <input type="text" name="firstName" class="form-control" value='<?php echo(htmlspecialchars($_SESSION["username"], ENT_QUOTES)); ?>'>
            
        </div>
        <div class="form-group">
		    <label for="form2">Last Name</label>
            <input type="text" name="lastName" class="form-control" value='<?php echo(htmlspecialchars($_SESSION["lastName"], ENT_QUOTES)); ?>'>
            
        </div>

        <div class="form-group">
		    <label for="dign">Designation</label><br>
		    	<select name="dign">
				  <option value="1">Learner</option>
				  <option value="2">Teacher</option>
				</select>
		    	
            
        </div>


        <div class="form-group">
		    <label for="lang">Language seek/teach</label>
            <input type="text" name="lang" class="form-control">
            
        </div>

        <div class="form-group">
		    <label for="addr">Address</label>
            <input type="text" name="addr" class="form-control">
            
        </div>

        <div class="text-xs-center">
            <center>
             <button name="btnsubmit" id="btnsubmit" class="btn btn-deep-purple"/>Save</button></center>
        </div>

     </form>
</div>
<!--/Form with header-->

		
		
        </div><!--col-sm-8-->
        
        </div><!--container-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="form1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>