<?php
/**
 * Configuration for Hide Page
 *
 * Users are able to reference the template file they are using to redirect pages.
 *
 */

$config = array(
  'pageTemplate' => array(
		'type' => 'text',  // can be any Inputfield module name
		'label' => 'Page Template',
		'description' => 'Reference the Template you use to create the pages you want to hide:',
    'notes' => 'Use name of template-file without filename extension.',
		'value' => 'redirect-page', // default value
		'required' => true,
	),
);
