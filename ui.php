<?php
$pagetitle ="UI"; 
$h1 = "My first mobile project name";
$breadcrumb = "UI--User Interface";

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
			<section class="prefix_1 grid_6 ui-interface">
				<div><img <?php randomOrientation(); ?> alt=""></div>
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
			<section class="grid_7 link-to-screenshot blue-hover suffix_1">
				<h2>Link images to screenshot</h2>
				<br/>
				<div class="empty">
					<a href="#fb-link-to-screenshot" class="entypo fancybox">&#10133;</a>
				</div>
				<div>
					<img src="http://placehold.it/25x25&text=item" alt="">
					<a href="#" class="entypo option-top-right">&#10060;</a>
					<a href="#" class="entypo option-bottom-right option-gold-hover">&#9733;</a>
				</div>
				<div>
					<img src="http://placehold.it/50x50&text=item" alt="">
					<a href="#" class="entypo option-top-right">&#10060;</a>
					<a href="#" class="entypo option-bottom-right option-gold-hover">&#9733;</a>
				</div>
				<div>
					<img src="http://placehold.it/66x100&text=item" alt="">
					<a href="#" class="entypo option-top-right">&#10060;</a>
					<a href="#" class="entypo option-bottom-right option-gold-hover">&#9733;</a>
				</div>
				<div>
					<img src="http://placehold.it/30x90&text=item" alt="">
					<a href="#" class="entypo option-top-right">&#10060;</a>
					<a href="#" class="entypo option-bottom-right option-gold-hover">&#9733;</a>
				</div>
				<div>
					<img src="http://placehold.it/25x25&text=item" alt="">
					<a href="#" class="entypo option-top-right">&#10060;</a>
					<a href="#" class="entypo option-bottom-right option-gold-hover">&#9733;</a>
				</div>
				<div>
					<img src="http://placehold.it/100x66&text=item" alt="">
					<a href="#" class="entypo option-top-right">&#10060;</a>
					<a href="#" class="entypo option-bottom-right option-gold-hover">&#9733;</a>
				</div>
				<div>
					<img src="http://placehold.it/66x100&text=item" alt="">
					<a href="#" class="entypo option-top-right">&#10060;</a>
					<a href="#" class="entypo option-bottom-right option-gold-hover">&#9733;</a>
				</div>
				<div>
					<img src="http://placehold.it/100x54&text=item" alt="">
					<a href="#" class="entypo option-top-right">&#10060;</a>
					<a href="#" class="entypo option-bottom-right option-gold-hover">&#9733;</a>
				</div>
			</section>
		<!-- Close container -->
		</div>

<!-- First Overlay -->
<div id="fb-link-to-screenshot" style="display:none">
	<article>
		<h1>Screenshot</h1>
		<span>	
			<div class="box">
				<img <?php randomOrientation(); ?> alt="">
			</div>
		</span>
	</article>
	<article>
		<h1>Link Images to Screenshot</h1>
		<br>
		<div class="tagline">
			<p>Click on images needed to produce this images</p><a href="#" class="done">Done</a>
		</div>
		<aside class="blue-hover">
			<div>
				<img src="http://placehold.it/25x25&text=item" alt="">
			</div>
			<div>
				<img src="http://placehold.it/50x50&text=item" alt="">
			</div>
			<div>
				<img src="http://placehold.it/66x100&text=item" alt="">
			</div>
			<div>
				<img src="http://placehold.it/30x90&text=item" alt="">
			</div>
			<div>
				<img src="http://placehold.it/25x25&text=item" alt="">
			</div>
			<div>
				<img src="http://placehold.it/100x66&text=item" alt="">
			</div>
		</aside>
	</article>
	<br>
</div>
<?php include('partials/footer.php');?>