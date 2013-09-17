<?php

########################################################################
# Extension Manager/Repository config file for ext "green_cars".
#
# Auto generated 04-03-2012 23:31
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
    'title' => 'gruene-autos.org',
    'description' => 'Database for cars with focus on environmental aspects. Case study for the Extension Browser - the TYPO3 Frontend Engine',
    'category' => 'plugin',
    'shy' => 0,
    'version' => '1.3.3',
    'dependencies' => 'browser,cps_tcatree',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'state' => 'stable',
    'uploadfolder' => 1,
    'createDirs' => '',
    'modify_tables' => '',
    'clearcacheonload' => 0,
    'lockType' => '',
    'author' => 'Dirk Wildt (Die Netzmacher)',
    'author_email' => 'http://wildt.at.die-netzmacher.de',
    'author_company' => '',
    'CGLcompliance' => '',
    'CGLcompliance_note' => '',
    'constraints' => array(
        'depends' => array(
            'browser' => '3.9.9-0.0.0',
            'cps_tcatree' => '0.3.0-0.0.0',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
    '_md5_values_when_last_written' => 'a:15:{s:9:"ChangeLog";s:4:"79ba";s:12:"ext_icon.gif";s:4:"6704";s:14:"ext_tables.php";s:4:"8a50";s:14:"ext_tables.sql";s:4:"7f4a";s:16:"locallang_db.xml";s:4:"8b48";s:7:"tca.php";s:4:"d45d";s:19:"doc/fall_studie.pdf";s:4:"b221";s:25:"doc/fall_studie_0.0.2.pdf";s:4:"b221";s:14:"doc/manual.pdf";s:4:"408c";s:14:"doc/manual.sxw";s:4:"6e4a";s:15:"res/default.css";s:4:"6d7f";s:16:"res/default.tmpl";s:4:"f805";s:15:"res/favicon.ico";s:4:"db3f";s:28:"static/browser/constants.txt";s:4:"d41d";s:24:"static/browser/setup.txt";s:4:"0fca";}',
    'suggests' => array(
    ),
);

?>