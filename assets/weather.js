$(document).ready(function(){
	$('form').submit(function(){
		$.get("http://api.openweathermap.org/data/2.5/weather?q="+$(this).serialize()+"&appid=2294b5008c340ebe756bb0e514e7c5a3", function(res){
			$('.1').text(res.name);
			$('.2').text(res.weather[0].description);
			$('.3').text(res.main.temp+"K");
			$('.4').text(res.main.humidity+"%");
		}, 'json');
		return false;
	});
});