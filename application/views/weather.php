<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Jose's Weather App</title>
		<meta charset="UTF-8">
		<!-- Capture screen width -->
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<!-- Jquery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
		<link rel="shortcut icon" href="http://www.weatherclipart.net/free_weather_clipart/partly_cloudy_or_partly_sunny_weather_icon_0515-1011-0603-3222_SMU.jpg">
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
			<!-- Start of input section	 -->
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 header">
					<form action='' method='post' class='form form-horizontal'>
						<div class="form-group">
							<div class="col-xs-12 col-sm-4">
								<input type='text' name='q' placeholder='Enter your City here' class='form-control'> 
							</div>
							<div class="col-xs-4 col-xs-offset-4 col-sm-4 col-sm-offset-0">
								<button type='submit' class='btn btn-info'>Get Weather</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- Start of table section -->
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 jumbotron">
					<div class="col-xs-10 col-xs-offset-1">
						<table class='table table-striped table-bordered col-xs-12'>
							<tr>
								<th class='col-xs-4'>City:</th><th class='col-xs-12 1'></th>
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
				<!-- Start of instructional message section -->
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1 col-sm-9 message">
							<p><span>Hello there!</span> Welcome to JWeather, a place where you can literally get instant, real-time weather information for any city 
							around the world. All you have to do is enter the city of your choice in the input field above to enjoy the experience. You can also enter a state 
							or country to get weather information from that location’s capital.</p>
					</div>
				</div>
				<!-- Copyright section -->
                <div class="col-xs-12 copyright">
                	<p><span>Copyright &copy; 2016 by <a href="https://www.linkedin.com/in/jose-chery-763110a1" target="_blank">Jose Chery</a></span></p>
                </div>
			</div>
		</div> <!-- End Container -->
	</body> 
</html>