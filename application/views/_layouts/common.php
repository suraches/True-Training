<!DOCTYPE html>
<html>
	<head>
		<title><?php echo Section::yield('title'); ?></title>
	</head>
	<body>

		<?php echo Section::yield('sidebar'); ?>
		<div id="container">
			<?php echo $content; ?>
		</div>

		<footer><?php echo $footer; ?></footer>
	</body>
</html>