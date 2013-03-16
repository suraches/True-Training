<?php

/**
 * Common theme.
 */
View::name('layouts.common', 'common');

View::composer('layouts.common', function($view)
{
	$view->nest('footer', 'layouts.common.partials.footer');
});