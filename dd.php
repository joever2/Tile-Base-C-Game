<?php
$pagetitle ="DD"; 
$h1 = "My first mobile project name";
$breadcrumb = "DD--Dynamic Data";

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
			<section class="prefix_1 grid_6 dd-interface">
				<div><a href="#fb-select-from-existing" class="fancybox"><img <?php randomOrientation(); ?> alt=""></a></div>
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
				<span>Click anywhere on the screenshot to add a new dynamic data item</span>
			</section>
			<section class="grid_7 dynamic-data blue-hover suffix_1">
				<h2>Dynamic Data</h2>
				<br/>
				<br/>
				<div>
					<a href="#" class="entypo option-top-right">&#10060;</a>
					<strong>T1 (O)</strong>
					<span>Full name of the month e.g. September</span>
				</div>
				<div>
					<a href="#" class="entypo option-top-right">&#10060;</a>
					<strong>T2 (O)</strong>
					<span>4 digit year</span>
				</div>
				<div>
					<a href="#" class="entypo option-top-right">&#10060;</a>
					<strong>T3 (O)</strong>
					<span>To do item list - titles of each item in the to do list</span>
				</div>
				<div>
					<a href="#" class="entypo option-top-right">&#10060;</a>
					<strong>I4 (O)</strong>
					<span>Monthly calendar view for the selected month and year combination</span>
				</div>
			</section>
		<!-- Close container -->
		</div>

<!-- First Dynamic data overlay -->
<div id="fb-select-from-existing" style="display:none">
	<article>
		<h1>Screenshot</h1>
		<span>	
			<div class="box">
				<img <?php randomOrientation(); ?> alt="">
			</div>
		</span>
	</article>
	<article>
		<h1>Select from Existing Items or Add a New Item</h1>
		<br>
		<aside class="blue-hover">
			<div class="empty">
				<a href="#fb-dynamic-data-type" class="entypo fancybox">&#10133;</a>
			</div>
			<div>
				<u>Text</u>
				<p>(Output)</p>
				<strong>Month</strong>
				<a href="#" class="entypo option-bottom-right">&#9998;</a>
				<a href="#" class="entypo option-top-right">&#10060;</a>
			</div>
			<div>
				<u>Text</u>
				<p>(Output)</p>
				<strong>Month</strong>
				<a href="#" class="entypo option-bottom-right">&#9998;</a>
				<a href="#" class="entypo option-top-right">&#10060;</a>
			</div>
			<div>
				<u>Text</u>
				<p>(Output)</p>
				<strong>Month</strong>
				<a href="#" class="entypo option-bottom-right">&#9998;</a>
				<a href="#" class="entypo option-top-right">&#10060;</a>
			</div>
			<div>
				<u>Text</u>
				<p>(Output)</p>
				<strong>Month</strong>
				<a href="#" class="entypo option-bottom-right">&#9998;</a>
				<a href="#" class="entypo option-top-right">&#10060;</a>
			</div>
			<div>
				<u>Text</u>
				<p>(Output)</p>
				<strong>Month</strong>
				<a href="#" class="entypo option-bottom-right">&#9998;</a>
				<a href="#" class="entypo option-top-right">&#10060;</a>
			</div>
		</aside>
	</article>
	<br>
</div>

<!-- Second Dynamic data overlay -->
<div id="fb-dynamic-data-type" style="display:none">
	<h1>Dynamic Data</h1>
	<h2>Type</h2>
	<br>
	<a href="">Input</a>
	<a href="">Output</a>
	<a href="">Text</a>
	<a href="">Image</a>
	<a href="">Video</a>
	<a href="">Audio</a>
	<a href="">HTML</a>
	<a href="">Bool</a>
	<a href="">Other</a>
	<br>
	<h2>Title</h2><a href="" class="view-all">edit</a>
	<br>
	<input type="text" placeholder="Short title for the data item">
	<br>
	<h2>Detailed Description (Format, Constraints)</h2><a href="" class="view-all">edit</a>
	<br>
	<textarea name="" id="" cols="120" rows="8" placeholder="Describe the standard format in which to display or collect the data item (e.g. mmddYYYY for date). Also 
type any constraints, such as constraints on length or characters in the password ﬁeld."></textarea>
	<br>
	<div class="squares">
		<a href="">1</a>
		<a href="">2</a>
		<a href="">3</a>
		<a href="">4</a>
		<a href="">5</a>
		<a href="">6</a>
		<a href="">7</a>
		<a href="">8</a>
		<a href="">9</a>
		<a href="">10</a>
		<a href="">11</a>
		<a href="">12</a>
		<a href="">13</a>
		<a href="">14</a>
		<a href="">15</a>
		<a href="">16</a>
		<a href="">17</a>
		<a href="">18</a>
		<a href="">19</a>
		<a href="">20</a>
	</div>
</div>

<?php include('partials/footer.php')?>