// JavaScript Document
//GEREGISTREERD ANIMATIE
function animatieGeregistreerd(id, start, end, duration) {
	"use strict";
	var range = end - start;
	var current = start;
	var increment = end > start? 1 : -1;
    var stepTime = Math.abs(Math.floor(duration / range));
    var obj = document.getElementById(id);
	var timer = setInterval(function() {
		current += increment;
		obj.innerHTML = current;
		if (current === end) {
			clearInterval(timer);
		}
	}, stepTime);
}
//SOLLICITATIES ANIMATIE
function animatieSollicitaties(id, start, end, duration) {
	"use strict";
   	var range = end - start;
   	var current = start;
   	var increment = end > start? 1 : -1;
   	var stepTime = Math.abs(Math.floor(duration / range));
   	var obj = document.getElementById(id);
   	var timer = setInterval(function() {
       	current += increment;
       	obj.innerHTML = current;
       	if (current === end) {
			clearInterval(timer);
       	}
   	}, stepTime);
}
$(document).ready(function() {
	//DROPDOWN
	"use strict";
	$("#pf").click(function() {
  		//SHOW DROPWDOWN ACTION
		document.getElementById("dropdown").style.display = "inline-block";
	});
});