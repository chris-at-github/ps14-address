<?php
// ---------------------------------------------------------------------------------------------------------------------
// Plugin Record
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Ps14Address',
	'Record',
	'LLL:EXT:ps14_address/Resources/Private/Language/locallang_plugin.xlf:record.title',
	'ps14-module-address'
);

// Flexform Address Plugin
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['ps14address_record'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('ps14address_record', 'FILE:EXT:ps14_address/Configuration/FlexForms/Record.xml');