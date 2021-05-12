<?php
// $Id: menu.php,v 1.9 2010/10/10 06:30:12 nobu Exp $

$adminmenu[] = array(
	'title' => html_entity_decode(_MI_EGUIDE_SUMMARY),
	'link'  => "admin/index.php?op=summary"
);
$adminmenu[] = array(
	'title' => html_entity_decode(_MI_EGUIDE_CATEGORY),
	'link'  => "admin/index.php?op=category"
);
$adminmenu[] = array(
	'title' => html_entity_decode(_MI_EGUIDE_EVENTS),
	'link'  => "admin/index.php?op=events"
);
$adminmenu[] = array(
	'title' => html_entity_decode(_MI_EGUIDE_NOTIFIES),
	'link'  => "admin/index.php?op=notifies"
);

$adminmenu[] = array(
	'title' => html_entity_decode(_MI_EGUIDE_ABOUT),
	'link'  => "admin/help.php"
);



$path = dirname( __FILE__, 2 ) . '/options/menu.php';

if ( file_exists( $path ) ) {
	include $path;
}

$adminmenu4altsys[] =
	array(
		'title' => html_entity_decode(_MD_A_MYMENU_MYTPLSADMIN),
		'link'  => 'admin/index.php?mode=admin&lib=altsys&page=mytplsadmin'
	);
$adminmenu4altsys[] =
	array(
		'title' => html_entity_decode(_MD_A_MYMENU_MYBLOCKSADMIN),
		'link'  => 'admin/index.php?mode=admin&lib=altsys&page=myblocksadmin'
	);
$adminmenu4altsys[] =
	array(
		'title' => html_entity_decode(_MD_A_MYMENU_MYLANGADMIN),
		'link'  => 'admin/index.php?mode=admin&lib=altsys&page=mylangadmin'
	);
$adminmenu4altsys[] =
	array(
		'title' => html_entity_decode(_MD_A_MYMENU_MYPREFERENCES),
		'link'  => 'admin/index.php?mode=admin&lib=altsys&page=mypreferences'
	);
