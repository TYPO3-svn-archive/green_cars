<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}
  ////////////////////////////////////////////////////////////////////////////
  //
  // INDEX

  // TCA tables
  // Enables the Include Static Templates
  // Add pagetree icons



  ////////////////////////////////////////////////////////////////////////////
  //
  // TCA tables

$TCA['tx_greencars_manufacturer'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_manufacturer',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY title',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icon.gif',
	),
);

$TCA['tx_greencars_type'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_type',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY title',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icon.gif',
	),
);

$TCA['tx_greencars_pricebracket'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_pricebracket',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'sortby' => 'sorting',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icon.gif',
	),
);

$TCA['tx_greencars_engine'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_engine',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY title',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icon.gif',
	),
);

$TCA['tx_greencars_main'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_main',		
		'label'     => 'title',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY title',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icon.gif',
	),
);
  // TCA tables



  ////////////////////////////////////////////////////////////////////////////
  //
  // Enables the Include Static Templates

t3lib_extMgm::addStaticFile($_EXTKEY,'static/browser/', 'Browser');
  // Enables the Include Static Templates



  ////////////////////////////////////////////////////////////////////////////
  //
  // Add pagetree icons

$TCA['pages']['columns']['module']['config']['items'][] =
  array('Green Cars', 'green_cars', t3lib_extMgm::extRelPath($_EXTKEY).'ext_icon.gif');
$ICON_TYPES['green_cars'] = array('icon' => t3lib_extMgm::extRelPath($_EXTKEY).'ext_icon.gif');
  // Add pagetree icons

?>
