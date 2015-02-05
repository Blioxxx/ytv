<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'ModuleYTVList' => 'system/modules/ytv/modules/ModuleYTVList.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_ytv_list' => 'system/modules/ytv/templates',
));
