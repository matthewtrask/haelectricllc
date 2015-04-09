// Javascript file 
// Site: haelectricllc.com
// Author: Matt Trask
// Twitter: @matthewtrask


// This function removes the banner image
// Replaces banner image with image specific to the content divs

// Electric Image
$("#clickElectric").click(function (){
	$("#carousel").hide();
});

$("#clickElectric").click(function(){
    $("#Electric").show();
});

// LED Image
$("#clickLED").click(function (){
    $("#carousel").hide();
});

$("#clickLED").click(function(){
    $('#LED').show();
});

// Data Image
$("#clickData").click(function (){
	$("#carousel").hide();
});

$("#clickData").click(function() {
    $('#Data').show();
});

// Bar/Restaurant Image
$("#clickBar").click(function (){
	$("#carousel").hide();
});

$("#clickBar").click(function(){
    $("#Bar").show();
});

// Make main image reappear
$("#backToTop").click(function () {
	$("#carousel").show();
});

$("#backToTop").click(function () {
	$("divme.services").hide();
});








