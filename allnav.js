	function top_page() {
   		$("html, body").animate({ scrollTop: 0 }, 500);
 	}
	
	window.onscroll = function() {myFunction()};
  	function myFunction() {
    	if ( document.documentElement.scrollTop > 50) {
        document.getElementById('pagetop').style.visibility = 'visible';	 
        } 
        else {
        document.getElementById('pagetop').style.visibility = 'hidden';
      	}
  	}
  

	function change1 (lang, col) {
	
	document.getElementById('menu-language').src = lang;
	document.getElementById("menu-link1").style.color = col;
	
	}
	
	function change2 (menu, col) {
	document.getElementById('menu-menu').src = menu;
	document.getElementById("menu-link2").style.color = col;
	
	}
	function change3 (col) {
	
	document.getElementById("menu-link3").style.color = col;
}
 	function language(){
 		
 		document.getElementById("lang-content").classList.toggle("m1");
   		
 	}
 	
 	function menu(){

 		document.getElementById("menu-content").classList.toggle("m2");
   		
 	}
 	
 	
	window.onclick = function(event) {
  		if (!event.target.matches('#menu-icon1') && !event.target.matches('#menu-language') 
  		  && !event.target.matches('#menu-link1')) {

    		var dropdowns = document.getElementsByClassName("lcontent");
    		var i;
    		for (i = 0; i < dropdowns.length; i++) {
      			var openDropdown = dropdowns[i];
      			if (openDropdown.classList.contains('m1')) {
        			openDropdown.classList.remove('m1');
      			}
    		}
  		}
  		if (!event.target.matches('#menu-icon2') && !event.target.matches('#menu-menu') 
  		  && !event.target.matches('#menu-link2')) {
  		  	
    		var dropdowns = document.getElementsByClassName("mcontent");
    		var i;
    		for (i = 0; i < dropdowns.length; i++) {
      			var openDropdown = dropdowns[i];
      			if (openDropdown.classList.contains('m2')) {
        			openDropdown.classList.remove('m2');
      			}
    		}
  		}
	}
	
	$(window).on('beforeunload',  //Refresh on top
  function(){
    $(window).scrollTop(0);
  }
  );

  function scroll_1(){
    $("html, body").animate({ scrollTop: 920}, 400);
  }
 	
  function scroll_2(){
    $("html, body").animate({ scrollTop: 1465}, 400);
  }

  

  
	
	