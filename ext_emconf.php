<?php

$EM_CONF[$_EXTKEY] = [
	'title' => 'Ps14 Address',
	'description' => 'TYPO3 Extension for enhanced address functionality and output based on tt_address',
	'category' => 'distribution',
	'author' => 'Christian Pschorr',
	'author_email' => 'pschorr.christian@gmail.com',
	'author_company' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'clearCacheOnLoad' => 0,
	'version' => '1.0.0',
	'constraints' => [
		'depends' => [
			'typo3' => '12.0.0-12.4.99',
			'ps14_foundation' => '2.0.0-2.9.99',
			'tt_address' => '9.0.0-9.9.99',
		],
		'conflicts' => [],
		'suggests' => [],
	],
];
