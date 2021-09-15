var city = "Thane";


$.getJSON("http://api.openweathermap.org/data/2.5/weather?q=" + city + "&units=metric&appid=22889f5f98e65dbb2e464390102d01ce",
	function(data) {
		console.log(data);

		var icon = "https://openweathermap.org/img/w/" + data.weather[0].icon + ".png";
		var temp = Math.floor(data.main.temp);
		var weather = data.weather[0].main;

		$('.icon').attr('src', icon);
		$('.weather').append(weather);
		$('.temp').append(temp);
 	}
 );

