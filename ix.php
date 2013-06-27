<?php
$pagetitle ="IX"; 
$h1 = "My first mobile project name";
$breadcrumb = "IX--Interactions";

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
			<section class="prefix_1 grid_6 ix-interface">
				<a href="#fb-ix-first-overlay" class="fancybox"><div><img <?php randomOrientation(); ?> alt=""></div></a>
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
				<strong style="top:18%;left:40%;">T1</strong>
				<strong style="top: 39%;left: 69%;">T2</strong>
				<span>Click anywhere on the screenshot to add a new action</span>
			</section>
			<section class="grid_7 interactions blue-hover suffix_1">
				<h2>Link images to screenshot</h2>
				<br/>
				<br/>
				<div>
					<a href="#" class="entypo option-top-right">&#10060;</a>
					<a href="#" class="entypo option-bottom-left">&#59212;</a>
					<a href="#" class="entypo option-bottom-right">&#128279;</a>
					<strong>T1</strong>
					<span>Opens up action sheet from the bottom with the buttons Share,..</span>
				</div>
				<div>
					<a href="#" class="entypo option-top-right">&#10060;</a>
					<a href="#" class="entypo option-bottom-left">&#59212;</a>
					<a href="#" class="entypo option-bottom-right">&#128279;</a>
					<strong>T2</strong>
					<span>Auto-scroll to top</span>
				</div>
			</section>

<!-- First IX Overlay -->
<div id="fb-ix-first-overlay" style="display:none">
	<h1>Interaction</h1>
	<div>
		<h2>User Action</h2>	
		<br>
	</div>
	<div class="header">
		<h2>Result</h2>
		<a href="" class="view-all">edit</a>
		<a href="#fb-ix-second-overlay" class="view-all fancybox">link to screen</a>
		<br>
	</div>
	<div class="header">
		<a href="#" class="entypo add">&#10133;</a><a class="custom-action fancybox"  href="#fb-ix-fourth-overlay"><span class="entypo">&#9998;</span><span class="action-text">Custom Action...</span></a>
		<ul class="user-action">
			<li><a href="#">T</a></li>
			<li><a href="#">HS</a></li>
			<li><a href="#">DT</a></li>
			<li><a href="#">SU</a></li>
			<li><a href="#">TH</a></li>
			<li><a href="#">SD</a></li>
			<li><a href="#">PZ</a></li>
			<li><a href="#">SL</a></li>
			<li><a href="#">DR</a></li>
			<li><a href="#">SR</a></li>
		</ul>
	</div>
	<div>

		<textarea name="" id="" cols="48" rows="10" placeholder="Start typing or link to an existing / placeholder screen"></textarea>
	</div>
	<br>
	<a href="#" class="done">Done</a>
	<a href="#fb-ix-third-overlay" class="done gray fancybox">Set Transition</a>
</div>

<!-- Second IX Overlay -->
<div id="fb-ix-second-overlay" style="display:none">
	<h1>Interaction</h1>
	<div>
		<h2>User Action</h2>	
		<br>
	</div>
	<div class="header">
		<h2>Result</h2>
		<a href="" class="view-all">Type free text</a>
		<br>
	</div>
	<div class="header">
		<a href="#" class="entypo add">&#10133;</a><a  class="custom-action fancybox" href="#fb-ix-fourth-overlay"><span class="entypo">&#9998;</span><span class="action-text">Custom Action...</span></a>
		<ul class="user-action">
			<li><a href="#">T</a></li>
			<li><a href="#">HS</a></li>
			<li><a href="#">DT</a></li>
			<li><a href="#">SU</a></li>
			<li><a href="#">TH</a></li>
			<li><a href="#">SD</a></li>
			<li><a href="#">PZ</a></li>
			<li><a href="#">SL</a></li>
			<li><a href="#">DR</a></li>
			<li><a href="#">SR</a></li>
		</ul>
	</div>
	<div>
	<div class="thumbnails">
		<span class="item"><img src="http://placehold.it/59x103&text=img+1" alt=""></span>
		<span class="item"><img src="http://placehold.it/59x103&text=img+2" alt=""></span>
		<span class="item"><img src="http://placehold.it/59x103&text=img+3" alt=""></span>
		<span class="item"><img src="http://placehold.it/59x103&text=img+4" alt=""></span>	
	</div>
	</div>
	<br>
	<a href="#" class="done">Done</a>
	<a href="#fb-ix-third-overlay" class="done gray fancybox">Set Transition</a>
</div>

<!-- Third IX Overlay  -->
<div id="fb-ix-third-overlay" style="display:none">
	<h1>Interaction</h1>
	<div class="header">
		<h2>Link to this screen</h2>	
		<br>
	</div>
	<div class="header">
		<h2>Via Transition</h2>
		<br>
	</div>
	<div>
		<span class="box"><a href="#fb-ix-fifth-overlay" class="fancybox"><img src="http://placehold.it/60x120" alt=""></a></span>
	</div>
	<div class="text-squares">
		<span class="text-square"><a href="#" class="entypo">&#10133;</a></span>
		<span class="text-square"><b>Flip</b></span>
		<span class="text-square"><b>Zoom</b></span>
		<span class="text-square"><b>Curl</b></span>	
		<span class="text-square"><b>Reveal</b></span>
		<span class="text-square"><b>Cover</b></span>
		<span class="text-square"><b>Fade</b></span>	
		<span class="text-square"><b>Push</b></span>
		<span class="text-square"><b>None</b></span>
	</div>
	<br>
	<a href="#" class="done">Done</a>
</div>

<!-- Fourth IX Overlay  -->

<div id="fb-ix-fourth-overlay" style="display:none">
	<h1>Interaction</h1>
	<div class="header">
		<h2>Link to this screen</h2>	
		<br>
	</div>
	<div class="header">
		<h2>Via custom Transition</h2><a href="#" class="view-all">standard</a>
		<br>
	</div>
	<div style="height:347px;">
		<span class="box"><a href="#fb-ix-fifth-overlay" class="fancybox"><img src="http://placehold.it/60x120" alt=""></a></span>
	</div>
	<div>
		<h2>Short name</h2>
		<a href="" class="view-all">edit</a>
		<textarea name="" id="" cols="45" rows="3" placeholder="Give it a short name"></textarea>
		<h2>Description</h2>
		<a href="" class="view-all">edit</a>
		<textarea name="" id="" cols="45" rows="8" placeholder="Describe your custom transition.."></textarea>
	</div>
	<div>

	</div>
	<br>
	<a href="#" class="done">Done</a>
</div>

<!-- Fifth IX Overlay  -->

<div id="fb-ix-fifth-overlay" style="display:none">
	<h1>Link one or more media files (images, video, sound)</h1>
	<div class="tagline">
		<p>Link to any transient UI elements to be displayed during this IX</p><a href="">Done</a>
	</div>
	<div class="thumbnails blue-hover">
		<span class="item"><img src="http://placehold.it/59x103&text=img+1" alt=""></span>
		<span class="item"><img src="http://placehold.it/59x103&text=img+2" alt=""></span>
		<span class="item"><img src="http://placehold.it/59x103&text=img+3" alt=""></span>
		<span class="item"><img src="http://placehold.it/59x103&text=img+4" alt=""></span>	
		<span class="item"><img src="http://placehold.it/59x103&text=img+1" alt=""></span>
		<span class="item"><img src="http://placehold.it/59x103&text=img+2" alt=""></span>
		<span class="item"><img src="http://placehold.it/59x103&text=img+3" alt=""></span>
		<span class="item"><img src="http://placehold.it/59x103&text=img+4" alt=""></span>	
	</div>
</div>
		<!-- Close container -->
		</div>
<?php include('partials/footer.php');?>