<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>Second Adams International Limited</title>
    
    <meta name="description" content="Second Adams International Limited" />
    <meta name="author" content="Tomiwa Ijaware" />

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:regular,semibold,italic,italicsemibold|PT+Sans:400,700,400italic,700italic|PT+Serif:400,700,400italic,700italic" rel="stylesheet" />
    <link href="css/impress-demo.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" />
    
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <style>
    	body{
    		background: url(img/body-bg.png), url(img/bg.png) repeat;
    		background-size: cover;
			background-attachment: fixed;
			position: relative;
			z-index: 1;
    	}
    	body:after {
			opacity: .9;
			content: "";
			position: fixed;
			z-index: -1;
			width: 100%;
			height: 100%;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			background-repeat: repeat;
			background-image: url(img/bg.png) !important;
		}
		.nav li {
			line-height: 30px;
		}
    </style>
</head>
<body class="impress-not-supported">
<div class="fallback-message">
    <p>Your browser <b>doesn't support the features required</b> by impress.js, so you are presented with a simplified version of this presentation.</p>
    <p>For the best experience please use the latest <b>Chrome</b>, <b>Safari</b> or <b>Firefox</b> browser.</p>
</div>
<?php include 'partials/nav.php';?>
<div id="impress">
    <div id="home" class="step slide" data-x="-1000" data-y="-1500">
    	<img class="featurette-image pull-right" src="img/rig.png">
    	<b>Second Adams International was incorporated</b> in 1996 as a limited liability company to provide specialist services in marine and terrestrial environment..
    	Our core business is in Engineering Design, Procurement and Construction in the Upstream and Downstream sectors of the Oil and Gas Industry.</p>
    </div>
    <div class="step slide" data-x="0" data-y="-1500">
    	<q>Mission Statement</q>
        <p>To provide services that will enhance the production efficiency of our customers in
		accordance with established standards and procedures within cost and schedule, while
		on continuous basis seek to improve on these standards, invest in research, training
		and provide healthy environment for the benefit of the host community and members of
		the company. Through these we shall keep the tradition and deliver good returns to our
		stakeholders.</p>
    </div>

    <div class="step slide" data-x="1000" data-y="-1500">
        <q>Our Vision</q>
        <p>To provide solutions to TOMORROW’S problems TODAY, through the application of
		innovative and appropriate technologies by our team of experienced engineers and
		craftsmen.</p>
    </div>
    <div id="title" class="step" data-x="0" data-y="0" data-scale="8">
        <h1>Our Services</h1>
        <img class=" pull-right" src="img/oim_rig.png">
    </div>
    <div id="its" class="step" data-x="850" data-y="3000" data-rotate="90" data-scale="5">        
    	<p><small>Engineering Design</small></p>
    	<p><small>Laser Scanning and As Built Documentation</small></p>
    	<p><small>Design, Welding And Fabrication</small></p>		
    	<p><small>Refurbishment and Inspection Services</small></p>
    </div>

    <div id="big" class="step" data-x="3500" data-y="2100" data-rotate="180" data-scale="6">
        <p><small>Diving / ROV Services</small></p>
    	<p><small>Jetties, Ports and Harbor Works</small></p>
    	<p><small>Oil & Gas construction</small></p>		
    	<p><small>Manpower Supply</small></p>
    </div>
    <div id="tiny" class="step" data-x="2825" data-y="2325" data-z="-3000" data-rotate="300" data-scale="1">
		<p><small>Procurement</small></p>
    	<p><small>Special Crossings</small></p>
    	<p><small>Mining Services</small></p>		
    	<p><small>Dredging</small></p>
    </div>
    
    <div id="overview" class="step" data-x="3000" data-y="1500" data-scale="10">
    </div>

</div>
<!-- <div class="hint">
    <p>Use a spacebar or arrow keys to navigate</p>
</div> -->
<script>
// if ("ontouchstart" in document.documentElement) { 
    // document.querySelector(".hint").innerHTML = "<p>Tap on the left or right to navigate</p>";
// }
</script>
<script src="js/impress.js"></script>
<script>impress().init();</script>
</body>
</html>