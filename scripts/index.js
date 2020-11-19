// JavaScript Document
$(document).ready(function() {
	"use strict";
	//LOADER
	$('#content').show();
	$('#loaderdiv').hide();
	//ANIMATIE NAV & LOGO
	$(window).scroll(function() {
		if($(document).scrollTop() > 300) {
			$('#nav').addClass('shrinknav');
			$('.navdesktoptext').addClass('shrinktext');
			$('#logodiv').addClass('logoafter');
		}
		else {
			$('#nav').removeClass('shrinknav');
			$('.navdesktoptext').removeClass('shrinktext');
			$('#logodiv').removeClass('logoafter');
		}
	});
	//HOMEPAGINA NAV
	$("#homenav").click(function() {
		$('html,body').animate({
			scrollTop: $("#banner").offset().top
		},'slow');
	});
	//OVER ONS NAV
	$("#overnav").click(function() {
		$('html,body').animate({
			scrollTop: $("#overons").offset().top-62
		},'slow');
	});
	//VRAGEN NAV
	$("#vragennav").click(function() {
		$('html,body').animate({
			scrollTop: $("#vragen").offset().top-75
		},'slow');
	});
	//CONTACT NAV
	$("#contactnav").click(function() {
		$('html,body').animate({
			scrollTop: $("#contact").offset().top-75
		},'slow');
	});
	//OVER ONS BTN
	$("#overonsbannerbtn").click(function() {
		$('html,body').animate({
			scrollTop: $("#overons").offset().top-62
		},'slow');
	});
	//LOGO BTN
	$("#logodesktop").click(function() {
		$('html,body').animate({
			scrollTop: $("#banner").offset().top
		},'slow');
	});
	$("#logomobileimg").click(function() {
		$('html,body').animate({
			scrollTop: $("#banner").offset().top
		},'slow');
	});
	//HOMEPAGINA NAV FOOTER
	$("#homefooter").click(function() {
		$('html,body').animate({
			scrollTop: $("#banner").offset().top
		},'slow');
	});
	//OVER ONS NAV FOOTER
	$("#overfooter").click(function() {
		$('html,body').animate({
			scrollTop: $("#overons").offset().top-62
		},'slow');
	});
	//VRAGEN NAV FOOTER
	$("#vragenfooter").click(function() {
		$('html,body').animate({
			scrollTop: $("#vragen").offset().top-75
		},'slow');
	});
	//CONTACT NAV FOOTER
	$("#contactfooter").click(function() {
		$('html,body').animate({
			scrollTop: $("#contact").offset().top-75
		},'slow');
	});
	//AJAX
	//INLOG FORM
	$("#resultformlogin").hide();
	$("#forminlog").click(function(e){
		//RESET FORM COLOR
		$("#login #hnlogo").css("color", "rgba(55,55,55,1.00)");
		$("#login #wwlogo").css("color", "rgba(55,55,55,1.00)");
		$("#login #hn").css("border-bottom", "1px solid rgba(55,55,55,1.00)");
		$("#login #ww").css("border-bottom", "1px solid rgba(55,55,55,1.00)");
		document.getElementById("hninput").style.color = "rgba(55,55,55,1.00)";
		document.getElementById("wwinput").style.color = "rgba(55,55,55,1.00)";
		$("#resultformlogin").hide();
		$.ajax({
			type: 'POST',
			data: $('#loginform').serialize(),
			dataType: "html",
			url: 'login.php',
			success: function(antwoordform) {
				var jsonverzoek = JSON.parse(antwoordform);
				//HELEMAAL LEGE FORM
				if(jsonverzoek.msg === "formleeg"){
					$("#resultformlogin").show();
					document.getElementById("resultformlogin").innerHTML = "Vul alles in aub.";
					$("#login #hnlogo").css("color", "rgba(200,16,16,1.00)");
					$("#login #wwlogo").css("color", "rgba(200,16,16,1.00)");
					$("#login #hn").css("border-bottom", "1px solid rgba(200,16,16,1.00)");
					$("#login #ww").css("border-bottom", "1px solid rgba(200,16,16,1.00)");
					document.getElementById("hninput").style.color = "rgba(200,16,16,1.00)";
					document.getElementById("wwinput").style.color = "rgba(200,16,16,1.00)";
				}
				//LEGE GEBRUIKERSNAAM
				else if(jsonverzoek.msg === "formleegusr"){
					$("#resultformlogin").show();
					document.getElementById("resultformlogin").innerHTML = "Vul uw gebruikersnaam in aub.";
					document.getElementById("hninput").style.color = "rgba(200,16,16,1.00)";
					$("#login #hnlogo").css("color", "rgba(200,16,16,1.00)");
					$("#login #hn").css("border-bottom", "1px solid rgba(200,16,16,1.00)");
				}
				//LEGE WACHTWOORD
				else if(jsonverzoek.msg === "formleegpsw"){
					$("#resultformlogin").show();
					document.getElementById("resultformlogin").innerHTML = "Vul uw wachtwoord in aub.";
					document.getElementById("wwinput").style.color = "rgba(200,16,16,1.00)";
					$("#login #wwlogo").css("color", "rgba(200,16,16,1.00)");
					$("#login #ww").css("border-bottom", "1px solid rgba(200,16,16,1.00)");
				}
				//VERKEERDE GEBRUIKERSNAAM
				else if(jsonverzoek.msg === "usr"){
					$("#resultformlogin").show();
					document.getElementById("resultformlogin").innerHTML = "Gebruikersnaam niet gevonden";
					document.getElementById("hninput").style.color = "rgba(200,16,16,1.00)";
					$("#login #hnlogo").css("color", "rgba(200,16,16,1.00)");
					$("#login #hn").css("border-bottom", "1px solid rgba(200,16,16,1.00)");
				}
				//VERKEERDE WACHTWOORD
				else if(jsonverzoek.msg === "psw"){
					$("#resultformlogin").show();
					document.getElementById("resultformlogin").innerHTML = "Verkeerde wachtwoord";
					document.getElementById("wwinput").style.color = "rgba(200,16,16,1.00)";
					$("#login #wwlogo").css("color", "rgba(200,16,16,1.00)");
					$("#login #ww").css("border-bottom", "1px solid rgba(200,16,16,1.00)");
				}
				//ALLES GOED
				else if(jsonverzoek.success === true){
					window.location.href = "admin";
				}
				//FOUT
				else {
					$("#resultformlogin").show();
					document.getElementById("resultformlogin").innerHTML = "Iets ging mis, probeer het opnieuw of neem contact op met de beheerder.";
				}
			}
		});
		event.preventDefault();
	});
	//CONTACT FORM
	$("#contactbtn").click(function(){
		$.ajax({
			type: 'POST',
			url: 'login.php',
			success: function(output) {
				swal(output);
			}
		});
		event.preventDefault();
	});
	//HAMBURGER MENU CLICK FUNCTION
	var navmobilecontent = document.getElementById("navmobilecontent");
	$("#navmobilecontent").hide();
	$("#navmobiletext").hide();
	$("#hamburger-menu").click(function(){
		var navmobilecontent = document.getElementById("navmobilecontent");
		$("#navmobilecontent").toggleClass("navmobilecontentToggle");
		$("#hamburger-menu").toggleClass('open');
		$("#navmobilecontent").toggle(400);
		setTimeout(function(){ 
			$("#navmobiletext").fadeIn();
		}, 200);
	});
	$(function() {
  		$('#hamburger-menu').hover(function() {
    		$('#hamburger-menu span').css('background-color', 'rgba(192, 216, 224, 1)');
  		}, function() {
    		$('#hamburger-menu span').css('background-color', '');
  		});
	});
	//CLOSE NAVMOBILECONTENT ON RESIZE
	function reportWindowSize() {
		if ($(window).width() > 575) {
			navmobilecontent.style.display = "none";
			$('#hamburger-menu').removeClass('open');
		 }
		 else {}
	}
	window.onresize = reportWindowSize;
	//HOME
	$("#homenavmobile").click(function() {
		$('html,body').animate({
			scrollTop: $("#banner").offset().top
		},'slow');
		$("#navmobilecontent").toggleClass("navmobilecontentToggle");
		$('#hamburger-menu').toggleClass('open');
		$("#navmobilecontent").toggle(400);
	});
	//OVER ONS NAV
	$("#overnavmobile").click(function() {
		$('html,body').animate({
			scrollTop: $("#overons").offset().top-62
		},'slow');
		$("#navmobilecontent").toggleClass("navmobilecontentToggle");
		$('#hamburger-menu').toggleClass('open');
		$("#navmobilecontent").toggle(400);
	});
	//VRAGEN NAV
	$("#vragennavmobile").click(function() {
		$('html,body').animate({
			scrollTop: $("#vragen").offset().top-75
		},'slow');
		$("#navmobilecontent").toggleClass("navmobilecontentToggle");
		$('#hamburger-menu').toggleClass('open');
		$("#navmobilecontent").toggle(400);
	});
	//CONTACT NAV
	$("#contactnavmobile").click(function() {
		$('html,body').animate({
			scrollTop: $("#contact").offset().top-75
		},'slow');
		$("#navmobilecontent").toggleClass("navmobilecontentToggle");
		$('#hamburger-menu').toggleClass('open');
		$("#navmobilecontent").toggle(400);
	});
});