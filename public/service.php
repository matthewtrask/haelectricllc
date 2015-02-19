<?php
$pageTitle = "Services"; 
include('includes/head.php'); 
include('includes/nav.php');

?>
<main class="body">

    <div class="container" id="ServicesTop">

        <div class="row">

        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        		<h2>What can we help you illuminate?</h2>
            	<h4>We do electrical wiring, LED lighting, as well as incorporating unique lighting into restauants and bars.</h4>
            	<h4>Click on the service you are looking for to get more information.</h4>
            	
            	<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	            	<ul id="pageLinks">
	            		<li><a href="#">Electircal Wiring<a/></li>
	            		<li><a href="#">LED Lighting</a></li>
	            		<li><a href="#">Bar/Restaurant Enhancement</a></li>
	            	</ul>
	            </div>-->
	            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	            	<p class="text-center"><span class="text-center"><a href="#Electric" id="clickElectric">Electrical Wiring</a></span></p>
	            </div>
	            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	            	<p class="text-center"><span><a href="#LED">LED Lighting</a></span></p>
	            </div>
	            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
	            	<p class="text-center"><span><a href="#Bar">Bar/Restaurant Enhancement</a></span></p>
	            </div>

            </div>
            
        </div>

    </div>

    <div class="container" id="Electric">
    	<div id="box">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="text-left"><i class="fa fa-bolt"></i>Electrical Services</h2><hr />
                    <h4 class="text-left">HA Electric LLC provides a wide range of residential and commercial electrical services</h4>
                    <h4 class="text-left">If you don’t see what you are looking for here, contact us. We will be happy to answer any of your service questions.</h4>
                    <div class="row"> 
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">  
                            <ul id="ee">
                                <li>Upgrade and repair for new houses and remodels</li>
                                <li>Appliance hook ups and lighting installations</li>
                                <li>Electrical circuit installations to latest electrical code requirements</li>
                                <li>Architectural lighting design</li>
                                <li>Installation of fixtures to meet any mood or highlight decor</li>
                                <li>Security lighting and pole lighting</li>
                                <li>Ceiling fans and bathroom fans</li>
                                <li>GFIC Receptacles, Dimmers</li>
                                <li>Transformers</li>
                                <li>Low Voltage</li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <ul id="ee">
                                <li>Pool lighting &amp; Landscape lighting</li>
                                <li>Power meter and electrical panel service</li>
                                <li>Service upgrades and replacements for safety and reliability.</li>
                                <li>Code compliant circuit installation, shock protection, GFI circuit installations</li>
                                <li>Exterior lighting</li>
                                <li>Troubleshooting</li>
                                <li>Electrical panels and sub panels</li>
                                <li>Recessed Lighting – Can lights</li>
                                <li>European Appliances and equipment installation</li>
                                <li>Demo</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    	</div>
    	<a href="#ServicesTop" color="grey">Back to the Top</a>
    </div>

    <div class="container" id="LED">
        <div class="box">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="text-left">LED Lighting</h2>
                </div>
            </div>
        </div>
    	<a href="#ServicesTop" color="grey">Home</a>
    </div>

    <div class="container" id="Bar">
    	<div id="box2">
    	</div>
    	<a href="#ServicesTop" color="grey">Home</a>
    </div>




</main>

<script>
$("#clickElectric").click(function(){
    $("#Electric").toggle();
});


// $("#clickElectric").click(function(){
//     $("#Electric").show();
// });

</script>

<script>

 $("#ee li").prepend('<i class="fa fa-lightbulb-o"></i>');

</script>

<?php
include('includes/footer.php');
include('includes/bottom.php');
?>

