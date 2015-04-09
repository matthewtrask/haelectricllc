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

//Hide Electric/Show Slider
$("#backToTop").click(function () {
	$("#carousel").show();
});

$("#backToTop").click(function () {
	$("#Electric").hide();
});

//Hide LED/Show Slider
$("#backToTop1").click(function () {
	$("#carousel").show();
});


$("#backToTop1").click(function () {
	$("#LED").hide();
});

//Hide Data/Show Slider
$("#backToTop2").click(function () {
	$("#carousel").show();
});


$("#backToTop2").click(function () {
	$("#Data").hide();
});

//Hide Bar/Show Slider
$("#backToTop3").click(function () {
	$("#carousel").show();
});


$("#backToTop3").click(function () {
	$("#Bar").hide();
});



