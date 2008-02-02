<?php
// Event Guide Module
// $Id: xoops_version.php,v 1.45 2008/02/02 11:12:02 nobu Exp $

# for duplicatable (not D3, old style)
include dirname(__FILE__)."/mydirname.php";

$modversion['name'] = _MI_EGUIDE_NAME;
$modversion['version'] = "2.32";
$modversion['description'] = _MI_EGUIDE_DESC;
$modversion['credits'] = "Nobuhiro Yasutomi";
$modversion['author'] = "Nobuhiro Yasutomi";
$modversion['help'] = "help.html";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 0;
$modversion['image'] = (file_exists("$mydirpath/{$myprefix}_slogo2.png")?$myprefix."_slogo2.png":"module_icon.php");
$modversion['dirname'] = $mydirname;

// Sql file
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = ($myprefix=='eguide'?"sql/mysql.sql":"sql/mysql_{$mypostfix}.sql");

// Tables created by sql file (without prefix!)
$modversion['tables'][0] = $myprefix;
$modversion['tables'][1] = $myprefix."_opt";
$modversion['tables'][2] = $myprefix."_reserv";
$modversion['tables'][3] = $myprefix."_category";
$modversion['tables'][4] = $myprefix."_extent";

// OnUpdate - upgrade DATABASE 
$modversion['onUpdate'] = "onupdate.php";

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Templates
$modversion['templates'][]=array('file' => $myprefix.'_item.html',
				 'description' => _MI_EGUIDE_EVENT_ITEM_TPL);
$modversion['templates'][]=array('file' => $myprefix.'_index.html',
				 'description' => _MI_EGUIDE_INDEX_TPL);
$modversion['templates'][]=array('file' => $myprefix.'_event.html',
				 'description' => _MI_EGUIDE_EVENT_TPL);
$modversion['templates'][]=array('file' => $myprefix.'_entry.html',
				 'description' => _MI_EGUIDE_ENTRY_TPL);
$modversion['templates'][]=array('file' => $myprefix.'_receipt.html',
				 'description' => _MI_EGUIDE_RECEIPT_TPL);
$modversion['templates'][]=array('file' => $myprefix.'_admin.html',
				 'description' => _MI_EGUIDE_ADMIN_TPL);
$modversion['templates'][]=array('file' => $myprefix.'_receipt_print.html',
				 'description' => _MI_EGUIDE_RECEIPT_PRINT_TPL);
$modversion['templates'][]=array('file' => $myprefix.'_event_print.html',
				 'description' => _MI_EGUIDE_EVENT_PRINT_TPL);
$modversion['templates'][]=array('file' => $myprefix.'_confirm.html',
				 'description' => _MI_EGUIDE_EVENT_CONF_TPL);
$modversion['templates'][]=array('file' => $myprefix.'_mylist.html',
				 'description' => _MI_EGUIDE_EVENT_LIST_TPL);
$modversion['templates'][]=array('file' => $myprefix.'_confirm.html',
				 'description' => _MI_EGUIDE_EVENT_CONFIRM_TPL);
$modversion['templates'][]=array('file' => $myprefix.'_editdate.html',
				 'description' => _MI_EGUIDE_EDITDATE_TPL);
$modversion['templates'][]=array('file' => $myprefix.'_collect.html',
				 'description' => _MI_EGUIDE_COLLECT_TPL);
$modversion['templates'][]=array('file' => $myprefix.'_excel.xml',
				 'description' => _MI_EGUIDE_EXCEL_TPL);
// Blocks
$modversion['blocks'][1]=array('file' => "ev_top.php",
			       'name' => _MI_EGUIDE_HEADLINE,
			       'description' => _MI_EGUIDE_HEADLINE_DESC,
			       'show_func' => "b_${myprefix}_top_show",
			       'edit_func' => 'b_event_top_edit',
			       'options' => '0|10|19|0|',
			       'template' => $myprefix.'_block_top.html');

$modversion['blocks'][2]=array('file' => "ev_top.php",
			       'name' => _MI_EGUIDE_HEADLINE2,
			       'description' => _MI_EGUIDE_HEADLINE2_DESC,
			       'show_func' => "b_${myprefix}_top_show",
			       'edit_func' => 'b_event_top_edit',
			       'options' => '0|10|19|1|',
			       'can_clone' => true,
			       'template' => $myprefix.'_block_top.html');
// Menu
$module_handler =& xoops_gethandler('module');
$module =& $module_handler->getByDirname($modversion['dirname']);

global $xoopsUser,$xoopsDB;
$modversion['hasMain'] = 1;
$configs = null;
if (is_object($module)&&$module->getVar('isactive')) {
    $config_handler =& xoops_gethandler('config');
    $configs =& $config_handler->getConfigsByCat(0, $module->getVar('mid'));
    // category submenu
    $res = $xoopsDB->query('SELECT * FROM '.$xoopsDB->prefix($myprefix.'_category').' ORDER BY catid');
    if ($xoopsDB->getRowsNum($res)>1) {
	while ($data = $xoopsDB->fetchArray($res)) {
	    $modversion['sub'][] =
		array('name' => _MI_EGUIDE_CATEGORY_MARK.$data['catname'],
		      'url' => 'index.php?cat='.$data['catid']);
	}
    }
}
// register notify
if ($configs) {
    if (!empty($configs['user_notify'])) {
	$modversion['sub'][] =
	    array('name' => _MI_EGUIDE_REG, 'url' => 'reserv.php?op=register');
    }
}
// login users
if (is_object($xoopsUser)) {
    $modversion['sub'][]=
	array('name' => _MI_EGUIDE_MYLIST, 'url' => 'mylist.php');
    // poster administration
    if (!empty($configs) && in_array($configs['group'], $xoopsUser->getGroups())) {
	$modversion['sub'][] =
	    array('name' => _MI_EGUIDE_SUBMIT, 'url' => 'admin.php');
	$modversion['sub'][] =
	    array('name' => _MI_EGUIDE_COLLECT, 'url' => 'collect.php');
    }
}

// Search
$modversion['hasSearch'] = 1;
$modversion['search']['file'] = "include/search.inc.php";
$modversion['search']['func'] = $myprefix."_search";

// Comments
$modversion['hasComments'] = 1;
$modversion['comments']['pageName'] = 'event.php';
$modversion['comments']['itemName'] = 'eid';

// Config
$modversion['hasconfig'] = 1;
$modversion['config'][]=array('name' => 'group',
			      'title' => '_MI_EGUIDE_POSTGROUP',
			      'description' => '_MI_EGUIDE_POSTGROUP_DESC',
			      'formtype' => 'group',
			      'valuetype' => 'int',
			      'default' => 2);
$modversion['config'][]=array('name' => 'notify',
			      'title' => '_MI_EGUIDE_NOTIFYADMIN',
			      'description' => '_MI_EGUIDE_NOTIFYADMIN_DESC',
			      'formtype' => 'select',
			      'valuetype' => 'int',
			      'options'=>array(_NO=>0,_YES=>1,_MI_EGUIDE_NOTIFY_ALWAYS=>2),
			      'default' => 1);
$modversion['config'][]=array('name' => 'notify_group',
			      'title' => '_MI_EGUIDE_NOTIFYGROUP',
			      'description' => '_MI_EGUIDE_NOTIFYGROUP_DESC',
			      'formtype' => 'group',
			      'valuetype' => 'int',
			      'default' => 1);
$modversion['config'][]=array('name' => 'auth',
			      'title' => '_MI_EGUIDE_NEEDPOSTAUTH',
			      'description' => '_MI_EGUIDE_NEEDPOSTAUTH_DESC',
			      'formtype' => 'yesno',
			      'valuetype' => 'int',
			      'default' => 0);
$modversion['config'][]=array('name' => 'max_item',
			      'title' => '_MI_EGUIDE_MAX_LISTITEM',
			      'description' => '_MI_EGUIDE_MAX_LISTITEM_DESC',
			      'formtype' => 'text',
			      'valuetype' => 'int',
			      'default' => 3);
$modversion['config'][]=array('name' => 'max_list',
			      'title' => '_MI_EGUIDE_MAX_LISTLINES',
			      'description' => '_MI_EGUIDE_MAX_LISTLINES_DESC',
			      'formtype' => 'text',
			      'valuetype' => 'int',
			      'default' => 50);
$modversion['config'][]=array('name' => 'max_event',
			      'title' => '_MI_EGUIDE_MAX_EVENT',
			      'description' => '_MI_EGUIDE_MAX_LISTITEM_DESC',
			      'formtype' => 'text',
			      'valuetype' => 'int',
			      'default' => 10);
$modversion['config'][]=array('name' => 'show_extents',
			      'title' => '_MI_EGUIDE_SHOW_EXTENTS',
			      'description' => '_MI_EGUIDE_SHOW_EXTENTS_DESC',
			      'formtype' => 'yesno',
			      'valuetype' => 'int',
			      'default' => 1);
$modversion['config'][]=array('name' => 'user_notify',
			      'title' => '_MI_EGUIDE_USER_NOTIFY',
			      'description' => '_MI_EGUIDE_USER_NOTIFY_DESC',
			      'formtype' => 'yesno',
			      'valuetype' => 'int',
			      'default' => 1);
$modversion['config'][]=array('name' => 'member_only',
			      'title' => '_MI_EGUIDE_MEMBER',
			      'description' => '_MI_EGUIDE_MEMBER_DESC',
			      'formtype' => 'yesno',
			      'valuetype' => 'int',
			      'default' => 0);
$modversion['config'][]=array('name' => 'has_confirm',
			      'title' => '_MI_EGUIDE_ORDERCONF',
			      'description' => '_MI_EGUIDE_ORDERCONF_DESC',
			      'formtype' => 'yesno',
			      'valuetype' => 'int',
			      'default' => 0);
$modversion['config'][]=array('name' => 'label_persons',
			      'title' => '_MI_EGUIDE_LAB_PERSONS',
			      'description' => '_MI_EGUIDE_LAB_PERSONS_DESC',
			      'formtype' => 'text',
			      'valuetype' => 'text',
			      'default' => '');
$modversion['config'][]=array('name' => 'close_before',
			      'title' => '_MI_EGUIDE_CLOSEBEFORE',
			      'description' => '_MI_EGUIDE_CLOSEBEFORE_DESC',
			      'formtype' => 'text',
			      'valuetype' => 'int',
			      'default' => 60);
$modversion['config'][]=array('name' => 'expire_after',
			      'title' => '_MI_EGUIDE_EXPIRE_AFTER',
			      'description' => '_MI_EGUIDE_EXPIRE_AFTER_DESC',
			      'formtype' => 'text',
			      'valuetype' => 'int',
			      'default' => 60*24);
$modversion['config'][]=array('name' => 'default_persons',
			      'title' => '_MI_EGUIDE_PERSONS',
			      'description' => '_MI_EGUIDE_PERSONS_DESC',
			      'formtype' => 'text',
			      'valuetype' => 'int',
			      'default' => 10);
$modversion['config'][]=array('name' => 'date_format',
			      'title' => '_MI_EGUIDE_DATE_FORMAT',
			      'description' => '_MI_EGUIDE_DATE_FORMAT_DESC',
			      'formtype' => 'text',
			      'valuetype' => 'text',
			      'default' => _MI_EGUIDE_DATE_FORMAT_DEF);
$modversion['config'][]=array('name' => 'use_plugins',
			       'title' => '_MI_EGUIDE_PLUGINS',
			       'description' => '_MI_EGUIDE_PLUGINS_DESC',
			       'formtype' => 'yesno',
			       'valuetype' => 'int',
			       'default' => 0);
$modversion['config'][]=array('name' => 'maker_set',
			      'title' => '_MI_EGUIDE_MARKER',
			      'description' => '_MI_EGUIDE_MARKER_DESC',
			      'formtype' => 'textarea',
			      'valuetype' => 'text',
			      'default' => _MI_EGUIDE_MARKER_DEF);
$modversion['config'][]=array('name' => 'time_defs',
			      'title' => '_MI_EGUIDE_TIME_DEFS',
			      'description' => '_MI_EGUIDE_TIME_DEFS_DESC',
			      'formtype' => 'text',
			      'valuetype' => 'text',
			      'default' => '');
$modversion['config'][]=array('name' => 'export_field',
			      'title' => '_MI_EGUIDE_EXPORT_LIST',
			      'description' => '_MI_EGUIDE_EXPORT_LIST_DESC',
			      'formtype' => 'text',
			      'valuetype' => 'text',
			      'default' => '*');
$modversion['config'][]=array('name' => 'use_comment',
			      'title' => '_MI_EGUIDE_COMMENT',
			      'description' => '_MI_EGUIDE_COMMENT_DESC',
			      'formtype' => 'yesno',
			      'valuetype' => 'int',
			      'default' => 1);

// Notification

$modversion['hasNotification'] = 1;
$modversion['notification']['lookup_file'] = 'include/notification.inc.php';
$modversion['notification']['lookup_func'] = 'eguide_notify_iteminfo';

$modversion['notification']['category'][1] =
    array('name' => 'global',
	  'title' => _MI_EGUIDE_GLOBAL_NOTIFY,
	  'description' => _MI_EGUIDE_GLOBAL_NOTIFY_DESC,
/*	  'item_name' => 'cat',*/
	  'subscribe_from' => array('index.php','event.php')
	);
$modversion['notification']['category'][2] =
    array('name' => 'category',
	  'title' => _MI_EGUIDE_CATEGORY_NOTIFY,
	  'description' => _MI_EGUIDE_CATEGORY_NOTIFY_DESC,
	  'item_name' => 'cat',
	  'subscribe_from' => array('index.php','event.php')
	);
$modversion['notification']['category'][3] =
    array('name' => 'event',
	  'title' => _MI_EGUIDE_CATEGORY_BOOKMARK,
	  'description' => _MI_EGUIDE_CATEGORY_BOOKMARK_DESC,
	  'item_name' => 'eid',
	  'subscribe_from' => 'event.php',
	  'allow_bookmark'=> 1
	);
$modversion['notification']['event'][1]=
    array('name' => 'new',
	  'category' => 'global',
	  'title' => _MI_EGUIDE_NEWPOST_NOTIFY,
	  'caption' => _MI_EGUIDE_NEWPOST_NOTIFY_CAP,
	  'description' => '',
	  'mail_template' => 'notify',
	  'mail_subject' => _MI_EGUIDE_NEWPOST_SUBJECT);
$modversion['notification']['event'][2]=
    array('name' => 'new',
	  'category' => 'category',
	  'title' => _MI_EGUIDE_NEWPOST_NOTIFY,
	  'caption' => _MI_EGUIDE_CNEWPOST_NOTIFY_CAP,
	  'description' => '',
	  'mail_template' => 'notify',
	  'mail_subject' => _MI_EGUIDE_NEWPOST_SUBJECT);

?>