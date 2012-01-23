<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_greencars_manufacturer'] = array (
	'ctrl' => $TCA['tx_greencars_manufacturer']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,title,uid_parent'
	),
	'feInterface' => $TCA['tx_greencars_manufacturer']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'title' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_manufacturer.title',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'required',
			)
		),
    		'uid_parent' => array (
      			'exclude'   => 0,
			'label' => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_manufacturer.uid_parent',		
      			'config'    => array (
        			'type'          => 'select',
        			'form_type'     => 'user',
        			'userFunc'      => 'tx_cpstcatree->getTree',
        			'foreign_table' => 'tx_greencars_manufacturer',
        			'treeView'      => 1,
        			'expandable'    => 1,
        			'expandFirst'   => 0,
        			'expandAll'     => 0,
        			'size'          => 1,
        			'minitems'      => 0,
        			'maxitems'      => 2,
        			'trueMaxItems'  => 1,
      			),
    		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, title;;;;2-2-2,uid_parent')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);



$TCA['tx_greencars_type'] = array (
	'ctrl' => $TCA['tx_greencars_type']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,title'
	),
	'feInterface' => $TCA['tx_greencars_type']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'title' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_type.title',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'required',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, title;;;;2-2-2')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);



$TCA['tx_greencars_pricebracket'] = array (
	'ctrl' => $TCA['tx_greencars_pricebracket']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,title'
	),
	'feInterface' => $TCA['tx_greencars_pricebracket']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'title' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_pricebracket.title',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'required',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, title;;;;2-2-2')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);



$TCA['tx_greencars_engine'] = array (
	'ctrl' => $TCA['tx_greencars_engine']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,title'
	),
	'feInterface' => $TCA['tx_greencars_engine']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'title' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_engine.title',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'required',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, title;;;;2-2-2')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);



$TCA['tx_greencars_main'] = array (
	'ctrl' => $TCA['tx_greencars_main']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,manufacturer,title,type,engine,pricebracket,price,speed,consumption_in_town,consumption_outof_town,consumption_average,co2,image,imagecaption,imagealttext,imagetitletext'
	),
	'feInterface' => $TCA['tx_greencars_main']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'manufacturer' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_main.manufacturer',		
			'config' => array (
				'type' => 'select',
          // treeview, dwildt-
//				'items' => array (
//					array('',0),
//				),
          // treeview, dwildt-
				'minitems'            => 0,
				'foreign_table'       => 'tx_greencars_manufacturer',
          // treeview, dwildt-
//				'foreign_table_where' => 'AND tx_greencars_manufacturer.pid=###CURRENT_PID### ORDER BY tx_greencars_manufacturer.uid',
//				'size'                => 1,
//				'maxitems'            => 1,
          // treeview, dwildt-
          // treeview, dwildt+
				'foreign_table_where' => 'AND 1 ORDER BY tx_greencars_manufacturer.uid',
				'size'                => 3,
				'maxitems'            => 5,
        'form_type'     => 'user',
        'userFunc'      => 'tx_cpstcatree->getTree',
        'treeView'      => 1,
        'expandable'    => 1,
        'expandFirst'   => 1,
        'expandAll'     => 0,
          // treeview, dwildt+
        'suppress_icons'      => 1,
        'wizards'             => array(
					'_PADDING'  => 2,
					'_VERTICAL' => 0,
					'add' => array(
						'type'   => 'script',
						'title'  => 'Create new record',
						'icon'   => 'add.gif',
						'params' => array(
							'table'    => 'tx_greencars_manufacturer',
							'pid'      => '###CURRENT_PID###',
							'setValue' => 'prepend'
						),
						'script' => 'wizard_add.php',
					),
					'list' => array(
						'type'   => 'script',
						'title'  => 'List',
						'icon'   => 'list.gif',
						'params' => array(
							'table' => 'tx_greencars_manufacturer',
							'pid'   => '###CURRENT_PID###',
						),
						'script' => 'wizard_list.php',
					),
					'edit' => array(
						'type'                     => 'popup',
						'title'                    => 'Edit',
						'script'                   => 'wizard_edit.php',
						'popup_onlyOpenIfSelected' => 1,
						'icon'                     => 'edit2.gif',
						'JSopenParams'             => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
				),
			)
		),
		'title' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_main.title',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'required',
			)
		),
		'type' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_main.type',		
			'config' => array (
				'type' => 'select',	
				'items' => array (
					array('',0),
				),
				'foreign_table' => 'tx_greencars_type',	
				'foreign_table_where' => 'AND tx_greencars_type.pid=###CURRENT_PID### ORDER BY tx_greencars_type.uid',
        'suppress_icons'      => 1,
				'size' => 1,	
				'minitems' => 0,
				'maxitems' => 1,	
				'wizards' => array(
					'_PADDING'  => 2,
					'_VERTICAL' => 0,
					'add' => array(
						'type'   => 'script',
						'title'  => 'Create new record',
						'icon'   => 'add.gif',
						'params' => array(
							'table'    => 'tx_greencars_type',
							'pid'      => '###CURRENT_PID###',
							'setValue' => 'prepend'
						),
						'script' => 'wizard_add.php',
					),
					'list' => array(
						'type'   => 'script',
						'title'  => 'List',
						'icon'   => 'list.gif',
						'params' => array(
							'table' => 'tx_greencars_type',
							'pid'   => '###CURRENT_PID###',
						),
						'script' => 'wizard_list.php',
					),
					'edit' => array(
						'type'                     => 'popup',
						'title'                    => 'Edit',
						'script'                   => 'wizard_edit.php',
						'popup_onlyOpenIfSelected' => 1,
						'icon'                     => 'edit2.gif',
						'JSopenParams'             => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
				),
			)
		),
		'engine' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_main.engine',		
			'config' => array (
				'type' => 'select',	
				'items' => array (
					array('',0),
				),
				'foreign_table' => 'tx_greencars_engine',	
				'foreign_table_where' => 'AND tx_greencars_engine.pid=###CURRENT_PID### ORDER BY tx_greencars_engine.uid',
        'suppress_icons'      => 1,
				'size' => 1,	
				'minitems' => 0,
				'maxitems' => 1,	
				'wizards' => array(
					'_PADDING'  => 2,
					'_VERTICAL' => 0,
					'add' => array(
						'type'   => 'script',
						'title'  => 'Create new record',
						'icon'   => 'add.gif',
						'params' => array(
							'table'    => 'tx_greencars_engine',
							'pid'      => '###CURRENT_PID###',
							'setValue' => 'prepend'
						),
						'script' => 'wizard_add.php',
					),
					'list' => array(
						'type'   => 'script',
						'title'  => 'List',
						'icon'   => 'list.gif',
						'params' => array(
							'table' => 'tx_greencars_engine',
							'pid'   => '###CURRENT_PID###',
						),
						'script' => 'wizard_list.php',
					),
					'edit' => array(
						'type'                     => 'popup',
						'title'                    => 'Edit',
						'script'                   => 'wizard_edit.php',
						'popup_onlyOpenIfSelected' => 1,
						'icon'                     => 'edit2.gif',
						'JSopenParams'             => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
				),
			)
		),
		'pricebracket' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_main.pricebracket',		
			'config' => array (
				'type' => 'select',	
				'items' => array (
					array('',0),
				),
				'foreign_table' => 'tx_greencars_pricebracket',	
				'foreign_table_where' => 'AND tx_greencars_pricebracket.pid=###CURRENT_PID### ORDER BY tx_greencars_pricebracket.uid',
        'suppress_icons'      => 1,
				'size' => 1,	
				'minitems' => 0,
				'maxitems' => 1,	
				'wizards' => array(
					'_PADDING'  => 2,
					'_VERTICAL' => 0,
					'add' => array(
						'type'   => 'script',
						'title'  => 'Create new record',
						'icon'   => 'add.gif',
						'params' => array(
							'table'    => 'tx_greencars_pricebracket',
							'pid'      => '###CURRENT_PID###',
							'setValue' => 'prepend'
						),
						'script' => 'wizard_add.php',
					),
					'list' => array(
						'type'   => 'script',
						'title'  => 'List',
						'icon'   => 'list.gif',
						'params' => array(
							'table' => 'tx_greencars_pricebracket',
							'pid'   => '###CURRENT_PID###',
						),
						'script' => 'wizard_list.php',
					),
					'edit' => array(
						'type'                     => 'popup',
						'title'                    => 'Edit',
						'script'                   => 'wizard_edit.php',
						'popup_onlyOpenIfSelected' => 1,
						'icon'                     => 'edit2.gif',
						'JSopenParams'             => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
				),
			)
		),
		'price' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_main.price',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'double2',
			)
		),
		'speed' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_main.speed',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'range' => array ('lower'=>0,'upper'=>1000),	
				'eval' => 'int',
			)
		),
		'consumption_in_town' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_main.consumption_in_town',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'double2',
			)
		),
		'consumption_outof_town' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_main.consumption_outof_town',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'double2',
			)
		),
		'consumption_average' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_main.consumption_average',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'double2',
			)
		),
		'co2' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_main.co2',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'int',
			)
		),
		'image' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_main.image',		
			'config' => array (
				'type' => 'group',
				'internal_type' => 'file',
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],	
				'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],	
				'uploadfolder' => 'uploads/tx_greencars',
				'show_thumbs' => 1,	
				'size' => 10,	
				'minitems' => 0,
				'maxitems' => 10,
			)
		),
		'imagecaption' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_main.imagecaption',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
			)
		),
		'imagealttext' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_main.imagealttext',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
			)
		),
		'imagetitletext' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:green_cars/locallang_db.xml:tx_greencars_main.imagetitletext',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, manufacturer, title;;;;2-2-2, type;;;;3-3-3, engine, pricebracket, price, speed, consumption_in_town, consumption_outof_town, consumption_average, co2, image, imagecaption, imagealttext, imagetitletext')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);
?>
