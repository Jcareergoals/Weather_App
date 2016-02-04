<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Weather App</title>
		<meta charset="UTF-8">
		<!-- Jquery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
		integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
		integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
		integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
		<!-- Javascript -->
		<script type="text/javascript" src="/assets/weather.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 header">
					<form action='' method='post' class='form form-horizontal'>
						<div class="form-group">
							<div class="col-xs-4">
								<input type='text' name='q' placeholder='Choose City Here' class='form-control'> 
							</div>
							<button type='submit' class='btn'>Get Weather</button>
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 jumbotron">
					<div class="col-xs-8 col-xs-offset-2">
						<table class='table table-striped table-bordered'>
							<tr>
								<th>City Name:</th><th class='1'></th>
							</tr>
							<tr>
								<td>Description:</td><td class='2'></td>
							</tr>
							<tr>
								<td>Temp:</td><td class='3'></td>
							</tr>
							<tr>
								<td>Humidity:</td><td class='4'></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">
						<p><span>DOWN YOU DOWN HERE!</span>, Hello there. :-). Welcome to the Weather App. By typing in any city 
							of your choice in the input field above, that citie's weather status will be displayed.</p>
					</div>
				</div>
			</div>
		</div> <!-- End Container -->
	</body> 
</html>