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