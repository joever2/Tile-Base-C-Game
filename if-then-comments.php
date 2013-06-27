<?php
$pagetitle ="If then-comments"; 
$h1 = "My first mobile project name";
$breadcrumb = "IF Comments";

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

<?php include('partials/left-comments.php') ?>

<?php include('partials/right-comments.php') ?>
		<!-- Close container -->
		</div>
<?php include('partials/footer.php');?>