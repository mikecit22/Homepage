<!DOCTYPE html>
<html>
<head>
	<?php  include('./partials/header.php');?>
</head>
<body>
	<?php  include('./partials/navbar.php');?>
	<div class="ui grid body" style="margin-top:60px;">
		<div class="sixteen wide column">
			<?php include('./partials/banner.php'); ?>
		</div>
		<?php include('./partials/postset1.php'); ?>
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