
	


	function display_c(){
		var refresh=10000; // Refresh rate in milli seconds
		mytime=setTimeout('display_ct()',refresh)
	}
	function realtime() {
		// Date
		var date = new Date();

		var year = date.getYear();
		if (year < 1000) {
			year +=1900
		}

		var day = date.getDay();
		var month = date.getMonth();
		var daym = date.getDate();
		var dayarray = new Array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
		var montharray = new Array("January","February","March","April","May","June","July","August","September","October","November","December")


		// Time
		var rt = new Date();
		
		var hours = rt.getHours();
		var minutes = rt.getMinutes();
		var seconds = rt.getSeconds();

		//Add AM and PM system
		var ampm = ( hours < 12) ? "am" : "pm";

		// Convert hours component to 12-hour format
		hours = (hours > 12) ? hours - 12 : hours;

		// Pad the hours, minutes, and seconds with leading zeros
		hours = ("0" + hours).slice(-2);
		minutes = ("0" + minutes).slice(-2);
		seconds = ("0" + seconds).slice(-2);

		
		// Display the clock
		document.getElementById('clock').innerHTML = daym+ " " +montharray[month]+ ", " +year+ "  |  " + hours + ":" + minutes + ":" + seconds + "  " + ampm;
		var t = setTimeout(realtime, 500);
 	}

 	$(window).on('beforeunload',  //Refresh on top
 	function(){
    $(window).scrollTop(0);
	}
	);

 	function videoplay(){
 		$(".video-popup").addClass("show");
 		$(".video-bg").addClass("show");
 		$("body").addClass("no-scroll");

 	}

 	// For close video
 	function remove(){
 		var myPlayer = videojs("my-video");
 		$(".video-popup").removeClass("show");
 		$(".video-bg").removeClass("show");
 		$("body").removeClass("no-scroll");
 		myPlayer.pause();

 	}

 	