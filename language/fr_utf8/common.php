<?php
// Event Guide Module Administration message catalogue
// French UTF-8 @gigamaster

define('_MD_ORDER_DATE','Ordonner par date');
define('_MD_CSV_OUT','Format CSV');
define('_MD_EXTENT_DATE','Date Ouverte');
define('_MD_RESERV_PERSONS','Nombre max de personnes');
define('_MD_INFO_REQUEST','Notifier les uilisateurs enregistrés');
define('_MD_INFO_COUNT','compte %d ');

global $expire_set, $edit_style, $ev_stats, $ev_extents, $rv_stats;

$expire_set = array(
	""        => "-- Use text --",
	"+0"      => "Same Day",
	"+3600"   => "an hour",
	"+86400"  => "Next Day",
	"+172800" => "2 days",
	"+259200" => "3 days",
	"+604800" => "1 week"
);

$edit_style = array(
	0 => "only XOOPS tags",
	1 => "New line makes tag &lt;br&gt;",
	2 => "disable HTML tags"
);

$ev_stats = array(
	0 => "display",
	1 => "waiting",
	4 => "deleted"
);

$rv_stats = array(
	0 => "waiting",
	1 => "reserved",
	2 => "refused"
);

$ev_extents = array(
	'none'    => 'Once',
	'daily'   => 'Daily',
	'weekly'  => 'Weekly',
	'monthly' => 'Monthly'
);

