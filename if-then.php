<?php
$pagetitle ="IF"; 
$h1 = "My first mobile project name";
$breadcrumb = "IF -- If-then scenarios";

// All of the following are 0 for no and 1 for yes

$share_link = 1;
$back = 1;
$comments = 1;

// Either $screen_number or $company can equal 1. 
// If both are given value of 1 will make header look buggy.

$screen_number = 1;
$company = 0; 

// Same goes for $operating_system and $user

$operating_system = 1;
$user = 0;

include('partials/header.php'); 
?>
			<section class="prefix_1 grid_6 if-then-interface">
				<div><img <?php randomOrientation(); ?> alt="">
				</div>
				<ul class="numbers">
					<li>3</li>
					<li>0</li>
					<li>0</li>
					<li>0</li>
				</ul>
				<ul class="components">
					<li>UI</li>
					<li>IX</li>
					<li>IF</li>
					<li>DD</li>
				</ul>
				<a href="#" class="entypo left">&#58541;</a>
				<a href="#" class="entypo right">&#58542;</a>
			</section>
			<section class="grid_7 if-then-scenarios blue-hover suffix_1">
				<h2>If-Then Scenarios</h2>
				<br/>
				<br/>
				<div class="empty">
					<a href="#fb-if-then-scenario" class="entypo fancybox">&#10133;</a>
				</div>
				<div>
					<a href="#" class="entypo option-top-right">&#10060;</a>
					<a href="#" class="entypo option-bottom-left">&#59212;</a>
					<p>No internet connection</p>
				</div>
				<div>
					<a href="#" class="entypo option-top-right">&#10060;</a>
					<a href="#" class="entypo option-bottom-left">&#59212;</a>
					<p>Active call or hotspot</p>
				</div>
				<div>
					<a href="#" class="entypo option-top-right">&#10060;</a>
					<a href="#" class="entypo option-bottom-left">&#59212;</a>
					<p>User not logged in</p>
				</div>
				<div>
					<a href="#" class="entypo option-top-right">&#10060;</a>
					<a href="#" class="entypo option-bottom-left">&#59212;</a>
					<p>App recieves low memory warning from OS</p>
				</div>
			</section>
		<!-- Close container -->
		</div>
<div id="fb-if-then-scenario" style="display:none">
	<h1>If-then Scenario</h1>
	<h2>Scenario</h2>
	<a href="" class="view-all">edit</a>
	<br>
	<textarea name="" id="" cols="45" rows="2" placeholder="Describe the scenario"></textarea>
	<br>
	<h2>Behavior</h2>
	<a href="" class="view-all">edit</a>
	<br>
	<textarea name="" id="" cols="45" rows="7" placeholder="Describe how your app must behave in response to each scenario"></textarea>
	<br>
	<a href="" class="done">Done</a>
</div>

<?php include('partials/footer.php');?>