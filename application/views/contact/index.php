<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta http-equiv="content-type" type="text/html; charset=UTF-8">
	</head>
	<body>
		<form method="post" action="<?php echo URL::to('contact'); ?>">
			<p>
				<label>Name</label>
				<input type="text" name="name" value="<?php echo $name; ?> ">
			</p>
			<p>
				<label>Email</label>
				<input type="text" name="email" value="<?php echo $email; ?>">
			</p>
			<p>
				<textarea name="detail"><?php echo $detail; ?></textarea>
			</p>
			<p>
				<input type="submit" value="Send">
			</p>
		</form>
	</body>
</html>