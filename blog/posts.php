<!DOCTYPE html>
<html>
<head>
	<?php  include('./partials/header.php');?>
</head>
<body>
	<?php  include('./partials/navbar.php');?>
	<div class="ui centered grid body">
		<div class="sixteen wide column">
			<?php include('./partials/banner.php'); ?>
		</div>
		<div class="sixteen wide column">
			<h1 class="ui horizontal divider header">
			  Posts
			</h1>
		</div>
		<div class="sixteen wide column" style="padding: 0px 35px 0px 35px;">
	
		</p>
		</div>
	</div>

	<footer>
		<div class="ui footer" style="margin-top:15px;">
			<div class="fb-comments" data-href="https://citrosystems.com/Homepage/blog/posts.php" data-numposts="5"></div>
			<p style="text-align:center;"><small>&copy; 2016. Michael Citro. All Rights Reserverd.</small></p>
		</div>
		<?php  include('./partials/footer.php');?>
		<script type="text/javascript">$(".posts").addClass("active");</script>
	</footer>
</body>
</html>