<?php
$pagetitle ="Dashboard home"; 
$h1 = "My first mobile project name";
$breadcrumb = "Project Dashboard";

// All of the following are 0 for no and 1 for yes

$share_link = 1;
$back = 1;
$comments = 0;

// Either $screen_number or $company can equal 1. 
// If both are given value of 1 will make header look buggy.

$screen_number = 1;
$company = 0; 

// Same goes for $operating_system and $user

$operating_system = 1;
$user = 0;

include('partials/header.php'); 
?>
			<div class="left grid_9 prefix_1">
				<section class="dashboard-cards blue-hover">
					<div class="empty">
						<a href="#fb-resources" class="entypo fancybox">&#10133;</a>
					</div>
					<div class="landscape">
						<span class="top">
							<a href="">1</a>
							<strong>Screenshot-32-updatedApr-20-2013.png</strong>
						</span>
						<img src="http://placehold.it/284x160&text=landscape" alt="">
						<span class="bottom">
							<ul class="numbers">
								<li>0</li>
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
						</span>
						<span>
							<a href="" class="entypo option-top-right">&#10060;</a>
							<a href="" class="entypo option-bottom-right">&#128229;</a>
						</span>
					</div>
					<div class="portrait">
						<span class="top">
							<a href="">2</a>
							<strong>Filename1.png</strong>
						</span>
						<img src="http://placehold.it/160x284&text=portrait" alt="">
						<span class="bottom">
							<ul class="numbers">
								<li>0</li>
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
						</span>
						<span>
							<a href="" class="entypo option-top-right">&#10060;</a>
							<a href="" class="entypo option-bottom-right">&#128229;</a>
						</span>
					</div>
					<div class="portrait">
						<span class="top">
							<a href="">3</a>
							<strong>Photo(1).png</strong>
						</span>
						<img src="http://placehold.it/160x284&text=portrait" alt="">
						<span class="bottom">
							<ul class="numbers">
								<li>0</li>
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
						</span>
						<span>
							<a href="" class="entypo option-top-right">&#10060;</a>
							<a href="" class="entypo option-bottom-right">&#128229;</a>
						</span>
					</div>
				</section>
			</div>
			<div class="grid_4 right suffix_1">
				<section class="to-do blue-hover">
					<h2>To Do</h2>
					<a href="#fb-to-do" class="view-all orange-link fancybox">View all</a>
					<ul>
						<li>
							<span class="numbers">25%</span>
							<span class="right-text">
								<p>Congratulations! The overview is 25% done.  Make it 50% today.</p>
								<div>
									<span class="entypo">&#10060;</span>
								</div>
							</span>
						</li>
						<li>
							<span class="numbers">3</span>
							<span class="right-text">
								<p>You linked 3 UI elements ot the screeen "Unnamed". Continue adding more UI elements.</p>
								<div>
									<span class="entypo">&#10060;</span>
								</div>
							</span>
						</li>
						<li>
							<span class="numbers">3</span>
							<span class="right-text">
								<p>You added thre screenshots.  Continue adding more screenshots.</p>
								<div>
									<span class="entypo">&#10060;</span>
								</div>
							</span>
						</li>
					</ul>
				</section>
				<section class="recent-activity">
					<h2>Recent Activity</h2>
					<a href="#fb-recent-activity" class="view-all orange-link fancybox">View all</a>
					<ul>
						<li>
							<span class="initials leader">PG</span>
							<span class="right-text">
								<p>uploaded resources</p>
								<p class="datetime">May 5 at 10:05am</p>
							</span>
						</li>
						<li>
							<span class="initials">JV</span>
							<span class="right-text">
								<p>updated overview</p>
								<p class="datetime">May 1 at 1:05pm</p>
							</span>
						</li>
						<li>
							<span class="initials">JV</span>
							<span class="right-text">
								<p>Viewed the UI for <a href="#">3 Screens</a></p>
								<p class="datetime">May 1 at 1:05pm</p>
							</span>
						</li>
						<li>
							<span class="initials leader">PG</span>
							<span class="right-text">
								<p>uploaded resources</p>
								<p class="datetime">Apr 30 at 3:22pm</p>
							</span>
						</li>
						<li>
							<span class="initials leader">PG</span>
							<span class="right-text">
								<p>uploaded resources</p>
								<p class="datetime">Apr 30 at 3:22pm</p>
							</span>
						</li>
					</ul>
				</section>
				<section class="resources blue-hover">
					<h2>Resources</h2>
					<a href="#fb-resources" class="view-all orange-link fancybox">View all</a>
					<!-- Thumbnails have to be compressed into one line so there is no space between each list item -->
					<ul>
						<li>
						<div class="empty"><a href="#fb-resources" class="entypo fancybox">&#10133;</a></div></li><li><img src="http://placehold.it/148x148&text=img+2" alt=""></li><li><img src="http://placehold.it/148x148&text=img+3" alt=""></li><li><img src="http://placehold.it/148x148&text=img+4" alt=""></li><li><img src="http://placehold.it/148x148&text=img+5" alt=""></li><li><img src="http://placehold.it/148x148&text=img+6" alt=""></li>
					</ul>
				</section>
			</div>
			<br class="clear">
		</div>

<!-- Static content for Fancybox resource panel -->
<div id="fb-resources" class="blue-hover" style="display:none;">
	<h2>Add Resources & Select Screenshots</h2>
	<div class="tagline">
		<p>Click on images needed to produce this screenshot</p><a href="">Add to Project</a>
	</div>
	<div class="thumbnails">
		<span class="item"><img src="http://placehold.it/124x124&text=img+1" alt="">
			<a href="#" class="entypo option-top-right">&#10060;</a>
			<a href="" class="entypo option-bottom-right">&#128229;</a>
		</span>
		<span class="item"><img src="http://placehold.it/124x124&text=img+2" alt="">
			<a href="#" class="entypo option-top-right">&#10060;</a>
			<a href="" class="entypo option-bottom-right">&#128229;</a>
		</span>
		<span class="item"><img src="http://placehold.it/124x124&text=img+3" alt="">
			<a href="#" class="entypo option-top-right">&#10060;</a>
			<a href="" class="entypo option-bottom-right">&#128229;</a>
		</span>
		<span class="item"><img src="http://placehold.it/124x124&text=img+4" alt="">
			<a href="#" class="entypo option-top-right">&#10060;</a>
			<a href="" class="entypo option-bottom-right">&#128229;</a>
		</span>
		<span class="item"><img src="http://placehold.it/124x124&text=img+5" alt="">
			<a href="#" class="entypo option-top-right">&#10060;</a>
			<a href="" class="entypo option-bottom-right">&#128229;</a>
		</span>		
	</div>
</div>

<!-- Static content for Fancybox To Do -->
<div id="fb-to-do" class="blue-hover" style="display:none;">
	<h2>To Do</h2>
	<div class="tagline">
		<p>View or archive a to do from your list</p>
	</div>
	<ul>
		<li>
			<span class="numbers">50%</span>
			<span class="right-text">
				<p>Congratulations! The overview is 50% done. Make it 100% today.</p>
			</span>
			<div>
				<span class="entypo">&#10060;</span>
			</div>
		</li>
		<li>
			<span class="numbers">3</span>
			<span class="right-text">
				<p>You linked 3 UI elements to the screen "Unnamed". Continue adding more UI elements.</p>
			</span>
			<div>
				<span class="entypo">&#10060;</span>
			</div>
		</li>
		<li>
			<span class="numbers">3</span>
			<span class="right-text">
				<p>You added 3 screenshots. Continue adding more screenshots.</p>
			</span>
			<div>
				<span class="entypo">&#10060;</span>
			</div>
		</li>
		<li>
			<span class="numbers">1</span>
			<span class="right-text">
				<p>This is just a test sentence to see what the to do list looks like through the project</p>
			</span>
			<div>
				<span class="entypo">&#10060;</span>
			</div>
		</li>
		<a href="" class="archive">Archived to Dos</a>
		<a href="" class="done">Done</a>
	</ul>
</div>

<!-- Static content for Fancybox Recent Activity -->
<div id="fb-recent-activity" class="blue-hover" style="display:none;">
	<h2>Recent activity</h2>
	<div class="tagline">
		<p>View recent activity for your project</p>
	</div>
		<ul>
			<li>
				<span class="initials leader">PG</span>
				<span class="right-text">
					<p>uploaded resources</p>
					<p class="datetime">May 5 at 10:05am</p>
				</span>
			</li>
			<li>
				<span class="initials">JV</span>
				<span class="right-text">
					<p>updated overview</p>
					<p class="datetime">May 1 at 1:05pm</p>
				</span>
			</li>
			<li>
				<span class="initials">JV</span>
				<span class="right-text">
					<p>Viewed the UI for <a href="#">3 Screens</a></p>
					<p class="datetime">May 1 at 1:05pm</p>
				</span>
			</li>
			<li>
				<span class="initials leader">PG</span>
				<span class="right-text">
					<p>uploaded resources</p>
					<p class="datetime">Apr 30 at 3:22pm</p>
				</span>
			</li>
			<li>
				<span class="initials leader">PG</span>
				<span class="right-text">
					<p>uploaded resources</p>
					<p class="datetime">Apr 30 at 3:22pm</p>
				</span>
			</li>
		</ul>
	<a href="" class="done">Done</a>
</div>

<?php include('partials/footer.php'); ?>