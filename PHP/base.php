<?php
	function generer_entete(){
		echo <<< END
		<!DOCTYPE html>
		<html lang="en">
		  <head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Bootstrap 101 Template</title>
			<link href="Framework/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
		  </head>
		  <body>
END;
	}
	
	function generer_signin(){
		echo <<< END
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Project name</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<form class="navbar-form navbar-right">
							<div class="form-group">
								<input type="text" placeholder="Email" class="form-control">
							</div>
							<div class="form-group">
								<input type="password" placeholder="Password" class="form-control">
							</div>
							<button type="submit" class="btn btn-success">Sign in</button>
						</form>
					</div><!--/.navbar-collapse -->
				</div>
			</nav>
END;
	}
	
	function generer_fin(){
		echo <<< END
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
					<script src="Framework/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
				</body>
			</html>
END;
	}
?>