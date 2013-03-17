<!DOCTYPE html>
<html>
	<head>
		<title><?php echo Section::yield('title'); ?></title>
		<meta http-equiv="content-type" type="text/html; charset=<?php echo Config::get('application.encoding'); ?>">
		<?php //echo HTML::script('js/something.js'); ?>

		<?php echo Asset::scripts(); ?>
		<?php echo Asset::styles(); ?>
		<?php //echo Asset::container('harlemshake')->scripts(); ?>
	</head>
	<body>

		<?php echo isset($header) ? $header : ''; ?>

		<div id="container">
			<?php echo isset($content) ? $content : ''; ?>
		</div>

		<?php echo isset($footer) ? $footer : ''; ?>


		<?php echo Asset::container('footer')->scripts(); ?>
	</body>
</html>