<?php

if(defined('TYPO3') === false) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Ps14Address',
	'Record',
	[
		\Ps14\Address\Controller\AddressController::class => 'record',
	],
	[]
);