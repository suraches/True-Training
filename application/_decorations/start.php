<?php

Autoloader::directories(array(
	path('app').'loads/helpers'
));

Autoloader::map(array(
	'Umm' => path('app').'loads/umm.php'
));

Autoloader::namespaces(array(
	'Foo' => path('app').'loads/foo'
));

Autoloader::underscored(array(
	'Foo' => path('app').'loads/foo'
));

/**
 * Themes
 */
require 'themes/themes.php';