<div id="register-form">

	<?php var_dump($errors->all()); ?>


	{{ Form::open(null, 'POST') }}
	<p>
		{{ Form::label('username', 'Username') }}
		{{ Form::text('username', Input::old('username')) }}

		@if ($errors->has('username'))
		{{ $errors->first('username', '<span class="error">:message</span>') }}
		@endif
	</p>
	<p>
		{{ Form::label('password', 'Password') }}
		{{ Form::password('password') }}

		@if ($errors->has('password'))
		{{ $errors->first('password', '<span class="error">:message</span>') }}
		@endif
	</p>
	<p>
		{{ Form::label('password_confirmation', 'Password Confirm') }}
		{{ Form::password('password_confirmation') }}
	</p>
	<p>
		{{ Form::label('first_name', 'First Name') }}
		<?php echo Form::text('first_name', Input::old('first_name')); ?>

		@if ($errors->has('first_name'))
		{{ $errors->first('first_name', '<span class="error">:message</span>') }}
		@endif
	</p>
	<p>
		{{ Form::label('last_name', 'Last Name') }}
		{{ Form::text('last_name', null) }}

		@if ($errors->has('last_name'))
		{{ $errors->first('last_name', '<span class="error">:message</span>') }}
		@endif
	</p>
	<p>
		{{ Form::label('addresses', 'Addresses') }}
		<?php echo Form::text_append('addresses', null); ?>
	</p>
	<p>
		{{ Form::submit('Register') }}
	</p>
	{{ Form::close() }}
</div>