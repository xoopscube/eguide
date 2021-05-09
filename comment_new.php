<?php
include 'header.php';

$com_itemid = isset( $_GET['com_itemid'] ) ? (int) $_GET['com_itemid'] : 0;
$eid        = $com_itemid;
$exid       = 0;
if ( preg_match( '/sub=(\d+)/', $_SERVER['HTTP_REFERER'], $d ) ) {
	$exid = $d[1];
}

$result = $xoopsDB->query( 'SELECT * FROM ' . EGTBL . ' e LEFT JOIN ' . OPTBL . ' o ON e.eid=o.eid LEFT JOIN ' . CATBL . ' ON topicid=catid LEFT JOIN ' . EXTBL . " ON e.eid=eidref AND exid=$exid WHERE e.eid=$eid AND status=" . STAT_NORMAL );

$data = $xoopsDB->fetchArray( $result );
edit_eventdata( $data );
$com_replytext = _POSTEDBY . '&nbsp;<b>' . $data['uname'] . '</b>&nbsp;' . _DATE . '&nbsp;<b>' . $data['postdate'] . '</b><br><br>' . $data['disp_summary'];

$com_replytext  .= "<br/><br/>" . $data['disp_body'] . "<br/>";
$com_replytitle = $data['date'] . ': ' . $data['title'];

include XOOPS_ROOT_PATH . '/include/comment_new.php';
