<?php include('head.php'); ?>
	<body>
		<div class="container_15">
			<header>
				<div class="grid_6 prefix_1 primary-link">
					<span>
						<?php if ($operating_system==1){
							echo '<img src="http://placehold.it/50x50&text=mac"/>';
						}
						?>
						<?php if ($user==1) {
							echo '<a href="" class="user">PG</a>';
							}
						?>
						<h1><?php echo $h1; ?></h1>
						<?php if ($screen_number==1) {
							echo '<a href="" class="screen-number">1</a><p>Screenshot-32-update.pr-20-2013.png</p>';
							}
						?>
						<?php if ($company==1)
							echo '<h2>Codelight Education, Inc.</h2>';
							?>
					</span>				
				</div>
				<div class="grid_7 suffix_1 login">
					<?php if ($share_link==1) {
						echo '<p>Share link:	
					<a href="" class="project-link orange-link">http://1234myproject.codelight.com/ljre</a><a href="#" class="entypo">&#128279;</a></p>';
					}?>					
					<span>Welcome, Pranav <a href="" class="orange-link">Logout</a></span>					
				</div>
			</header>
			<div class="clear"></div>
			<!-- Navigation links -->
			<nav class="grid_13 prefix_1 suffix_1">
				<a href="" class="main-nav"><?php echo $breadcrumb; ?></a>
				<?php if ($back==1) {
					echo "<a href='' class='orange-link'>back</a>";
				}?>
				<?php if ($comments==1) {
					echo '<a href="" class="comments">Comments</a>';
				}?>
			</nav>

<?php 
	// To generate random or portrait placeholder images
	function randomOrientation() {
		$comment_img_orientation = rand(0,1);
		if ($comment_img_orientation == 0) {
			echo "src='http://placehold.it/450x253&text=landscape'";
		} else {
			echo "src='http://placehold.it/253x450&text=portrait'";
		}
	}
?>