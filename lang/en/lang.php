<?php

return [
	'component' => [
		'name' => 'GA Code',
		'description' => 'Insert Google Analytics tracking code inside any pages'
	],

	'properties' => [
		'title' => 'Google Analytics tracking code',
		'description' => 'Your Google Analytics tracking code, can be found in your Google Analytics dashboard',
		'validationMessage' => 'Not a tracking code'
	],

	'plugin' => [
        'name'	=> 'Google Analytics Code',
    	'description' => 'Track website with Google Analytics'
	],

	'model' => [
		'label' => 'Your Google Analytics ID'
	],

	'settings' => [
		'label'         => 'Google Analytics Code',
        'description'   => 'Manage Google Analytics Settings'
	]
];

?>