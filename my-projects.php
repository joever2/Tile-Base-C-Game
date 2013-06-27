<?php
$pagetitle ="My projects"; 
$h1 = "Pranav Garg";
$breadcrumb = "Project Dashboard";

// All of the following are 0 for no and 1 for yes

$share_link = 0;
$back = 0;
$comments = 0;

// Either $screen_number or $company can equal 1. 
// If both are given value of 1 will make header look buggy.

$screen_number = 0;
$company = 1; 

// Same goes for $operating_system and $user

$operating_system = 0;
$user = 1;

include('partials/header.php'); 
?>
			<section class="my-projects prefix_1 grid_13 suffix_1 blue-hover">
				<div class="empty">
					<a href="#fb-project-overview" class="entypo fancybox">&#10133;</a>
				</div>
				<div>
					<p>Last updated Mon, May 20, 2013</p>
					<img src="http://placehold.it/50x50&text=OS" alt="">
					<h3>My first mobile project name -- in 2 lines then truncated now.</h3>
					<h2>Members</h2>
					<a href="#" class="view-all">View all</a>
						<ul>
							<li><span class="initials entypo">&#10133;</span></li>
							<li><span class="initials leader">PG</span></li>
						</ul>
					<h2>To Do</h2>
					<a href="#" class="view-all">View all</a>
					<ul>
						<li>
							<span class="numbers">1</span>
							<span class="right-text">
								<p>You're the 1st member.  Add other members to your project.</p>
							</span>
							<div>
								<span class="entypo option-top-right">&#10060;</span>
							</div>
						</li>
						<li>
							<span class="numbers">0</span>
							<span class="right-text">
								<p>Upload resources (screenshots, other images, documents, etc) that you've created so far..</p>
							</span>
							<div>
								<span class="entypo option-top-right">&#10060;</span>
							</div>
						</li>
					</ul>
					<a href="#" class="entypo option-top-right">&#10060;</a>
					<a href="#" class="entypo option-bottom-right">&#9998;</a>
					<a href="#" class="entypo option-bottom-left">&#59190;</a>
				</div>
				<div>
					<p>Last updated Mon, May 20, 2013</p>
					<img src="http://placehold.it/50x50&text=OS" alt="">
					<h3>My first mobile project name -- in 2 lines then truncated now.</h3>
					<h2>Members</h2>
					<a href="#" class="view-all">View all</a>
					<ul>
						<li><span class="initials entypo">&#10133;</span></li>
						<li><span class="initials leader">PG</span></li>
						<li><span class="initials">JV</span></li>
					</ul>
					<h2>To Do</h2>
					<a href="#" class="view-all">View all</a>
					<ul>
						<li>
							<span class="numbers">25%</span>
							<span class="right-text">
								<p>Congratulations! The overview is 25% done.  Make it 50% today.</p>
							</span>
							<div>
								<span class="entypo option-top-right">&#10060;</span>
							</div>
						</li>
						<li>
							<span class="numbers">3</span>
							<span class="right-text">
								<p>You linked 3 UI to the screen "Unnamed". Continue adding more UI elements.</p>
							</span>
							<div>
								<span class="entypo option-top-right">&#10060;</span>
							</div>
						</li>
					</ul>
					<a href="#" class="entypo option-top-right">&#10060;</a>
					<a href="#" class="entypo option-bottom-right">&#9998;</a>
					<a href="#" class="entypo option-bottom-left">&#59190;</a>
				</div>
			</section>
		<!-- Close container -->
		</div>
<!-- Overlay for when user wants to add a new product -->
<div id="fb-project-overview" class="blue-hover" style="display:none">
	<h1>Project overview</h1>
	<div>
		<h2>Platform (pick one)</h2>
		<ul class="platform">
			<li><a href="#"><img src="http://placehold.it/50x50x&text=OS" alt=""><span>iOS</span></a></li>
			<li><a href="#"><img src="http://placehold.it/50x50x&text=OS" alt=""><span>Android</span></a></li>
			<li><a href="#"><img src="http://placehold.it/50x50x&text=OS" alt=""><span>WP</span></a></li>
			<li><a href="#"><img src="http://placehold.it/50x50x&text=OS" alt=""><span>BB</span></a></li>
		</ul>
	</div>
	<div>
		<h2>Project name</h2>
		<a href="" class="view-all">edit</a>
		<br>
		<textarea name="" id="" cols="45" rows="10" placeholder="Start typing"></textarea>
	</div>
	<br>
	<a href="#" class="done">Done</a>
</div>
<?php include('partials/footer.php');?>