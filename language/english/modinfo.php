<?php
// $Id: modinfo.php,v 1.27 2010/10/10 06:30:12 nobu Exp $
// Module Info

if ( defined( '_MI_EGUIDE_NAME' ) ) {
	return;
}

// The name of this module
define( "_MI_EGUIDE_NAME", "Event Guide" );

// A brief description of this module
define( "_MI_EGUIDE_DESC", "Event Management, Guidance and Reservation system" );

// Names of blocks for this module (Not all module has blocks)
define( "_MI_EGUIDE_MYLIST", "My booked events" );
define( "_MI_EGUIDE_SUBMIT", "Create New Event" );
define( "_MI_EGUIDE_COLLECT", "Management" );
define( "_MI_EGUIDE_REG", "&#9993; Notify me of new events" );
define( "_MI_EGUIDE_HEADLINE", "Event Guide" );
define( "_MI_EGUIDE_HEADLINE_DESC", "Upcomming Event List" );
define( "_MI_EGUIDE_HEADLINE2", "New Events" );
define( "_MI_EGUIDE_HEADLINE2_DESC", "Newer Posted Event List" );
define( "_MI_EGUIDE_HEADLINE3", "Finished Events" );
define( "_MI_EGUIDE_HEADLINE3_DESC", "List of closed events." );
define( "_MI_EGUIDE_CATBLOCK", "Event Category" );
define( "_MI_EGUIDE_CATBLOCK_DESC", "Choose event category" );

define( "_MI_EGUIDE_EVENTS", "Event Management" );
define( "_MI_EGUIDE_NOTIFIES", "&#9993; Notify New registers" );
define( "_MI_EGUIDE_CATEGORY", "Event Categories" );
define( "_MI_EGUIDE_SUMMARY", "Reservation Summary" );
define( "_MI_EGUIDE_CATEGORY_MARK", "Category - " );
define( "_MI_EGUIDE_ABOUT", "about eguide" );

// Configuration variable for this module
define( "_MI_EGUIDE_POSTGROUP", "&#9919; Group Permissions" );
define( "_MI_EGUIDE_POSTGROUP_DESC", "Select a group with the required  permissions to manage its own events." );
define( "_MI_EGUIDE_NOTIFYADMIN", "&#9993; Notify the Admin by email" );
define( "_MI_EGUIDE_NOTIFYADMIN_DESC", "Notification sent to the administrator when a new event is registered." );
define( "_MI_EGUIDE_NOTIFY_ALWAYS", "Always" );
define( "_MI_EGUIDE_NOTIFYGROUP", "Group of administrators for the notification" );
define( "_MI_EGUIDE_NOTIFYGROUP_DESC", "The group of administrators to send a notification email to." );
define( "_MI_EGUIDE_NEEDPOSTAUTH", "Event Approval Process" );
define( "_MI_EGUIDE_NEEDPOSTAUTH_DESC", "New events must be approved by the site administrator" );
define( "_MI_EGUIDE_MAX_LISTITEM", "Show additional items in the list" );
define( "_MI_EGUIDE_MAX_LISTITEM_DESC", "Display additional items in the list, additional input order form." );
define( "_MI_EGUIDE_MAX_LISTLINES", "Display list items in a page" );
define( "_MI_EGUIDE_MAX_LISTLINES_DESC", "How many rows of elements in a page" );
define( "_MI_EGUIDE_MAX_EVENT", "Show events on the Top page" );
define( "_MI_EGUIDE_MAX_EVENT_DESC", "Number of events listed on the Top page" );
define( "_MI_EGUIDE_SHOW_EXTENTS", "Show multiple entries" );
define( "_MI_EGUIDE_SHOW_EXTENTS_DESC", "When the event has multiple entries, display each entry. YES - show every entry. NO - Show only the last entry." );
define( "_MI_EGUIDE_USER_NOTIFY", "User requested notification of new event" );
define( "_MI_EGUIDE_USER_NOTIFY_DESC", "YES - Enable notification mail, NO - disable." );
define( "_MI_EGUIDE_MEMBER", "Require LOGIN" );
define( "_MI_EGUIDE_MEMBER_DESC", "Only login user can be reservation event. (Not use email address)" );
define( "_MI_EGUIDE_MEMBER_RELAX", "Both" );
define( "_MI_EGUIDE_ORDERCONF", "Confirmation page" );
define( "_MI_EGUIDE_ORDERCONF_DESC", "Display the confirmation page when submitting the reservation form." );
define( "_MI_EGUIDE_CLOSEBEFORE", "&#127915; check-in time before the event (min)" );
define( "_MI_EGUIDE_CLOSEBEFORE_DESC", "Set the closing time for event check-in in minutes" );
define( "_MI_EGUIDE_LAB_PERSONS", "Additional item options" );
define( "_MI_EGUIDE_LAB_PERSONS_DESC", "Additional item optional settings, like a field label for how many persons. Example: 'label_persons=Persons'. See <a href=\"../../eguide/admin/help.php#form_options\">about eguide page</a> more details." );
define( "_MI_EGUIDE_DATE_FORMAT", "Date Format" );
define( "_MI_EGUIDE_DATE_FORMAT_DESC", "Format for displaying the date (time) of an open event. Use of the PHP date function format.." );
define( "_MI_EGUIDE_DATE_FORMAT_DEF", "D, d M Y" );
define( "_MI_EGUIDE_EXPIRE_AFTER", "&#9201; Expires after the time" );
define( "_MI_EGUIDE_EXPIRE_AFTER_DESC", "The event is expired on the first page when the start time of the event is exceeded by a few minutes." );
define( "_MI_EGUIDE_PERSONS", "Persons default value" );
define( "_MI_EGUIDE_PERSONS_DESC", "Default value of participants " );
define( "_MI_EGUIDE_PLUGINS", "Use reservation control plugins" );
define( "_MI_EGUIDE_PLUGINS_DESC", "Internal control accept entry form plugins" );
define( "_MI_EGUIDE_COMMENT", "&#128490; Allow Comments" );
define( "_MI_EGUIDE_COMMENT_DESC", "Allow commnets to event" );
define( "_MI_EGUIDE_MARKER", "Current entry level mark" );
define( "_MI_EGUIDE_MARKER_DESC", "The mark mean of how many entry in current. Show mark correspond percentage. (xx,yy mean less than xx% showup yy. And '0,yy' mean out of date mark)" );
define( "_MI_EGUIDE_MARKER_DEF", "0,[Close]\n50,[Vacant]\n100,[Many]\n101,[Full]\n" );
define( "_MI_EGUIDE_TIME_DEFS", "Time Table Labels" );
define( "_MI_EGUIDE_TIME_DEFS_DESC", "Set starting time in Settings collection page. e.g.: 08:00,14:00,16:00" );
define( "_MI_EGUIDE_EXPORT_LIST", "Item List in export reservations" );
define( "_MI_EGUIDE_EXPORT_LIST_DESC", "Item `name' or `number' seperated comma(,). Astarisk(*) mean left items. e.g.: 3,4,0,2,*" );
define( "_MI_EGUIDE_EDITOR", "HTML Editor" );
define( "_MI_EGUIDE_EDITOR_DESC", "<em>What You See Is What You Get</em> - this feature requires the module CKEditor" );
define( "_MI_EGUIDE_BREADCRUMBS", "BREADCRUMBS" );
define( "_MI_EGUIDE_BREADCRUMBS_DESC", "BREADCRUMBS_DESC" );

// Templates
define( "_MI_EGUIDE_EVENT_BREADCRUMBS_TPL", "Module Breadcrumb navigation" );
define( "_MI_EGUIDE_INDEX_TPL", "Event Guide Top page list" );
define( "_MI_EGUIDE_EVENT_TPL", "Detail of Event" );
define( "_MI_EGUIDE_ENTRY_TPL", "Reservation entry" );
define( "_MI_EGUIDE_USERSSEL_TPL", "User select for operators entry" );
define( "_MI_EGUIDE_EVENT_PRINT_TPL", "Detail of Event for Print" );
define( "_MI_EGUIDE_RECEIPT_TPL", "Reservations List" );
define( "_MI_EGUIDE_ADMIN_TPL", "Event Entry Form" );
define( "_MI_EGUIDE_RECEIPT_PRINT_TPL", "Reservations List for Print" );
define( "_MI_EGUIDE_EVENT_ITEM_TPL", "Item of Event Showup" );
define( "_MI_EGUIDE_EVENT_CONF_TPL", "Event Confirmation Form" );
define( "_MI_EGUIDE_EVENT_LIST_TPL", "Reserved Event List" );
define( "_MI_EGUIDE_EVENT_CONFIRM_TPL", "Reservation Confirmation" );
define( "_MI_EGUIDE_EDITDATE_TPL", "Edit Open Date" );
define( "_MI_EGUIDE_COLLECT_TPL", "Reservation setting collection" );
define( "_MI_EGUIDE_EXCEL_TPL", "Excel (XML) file format in exporting" );

// Notifications
define( '_MI_EGUIDE_GLOBAL_NOTIFY', 'Global in module' );
define( '_MI_EGUIDE_GLOBAL_NOTIFY_DESC', 'Notification in Event Guide module' );
define( '_MI_EGUIDE_CATEGORY_NOTIFY', 'Current category' );
define( '_MI_EGUIDE_CATEGORY_NOTIFY_DESC', 'Notification at category in Event Guide module' );
define( '_MI_EGUIDE_CATEGORY_BOOKMARK', 'Current event' );
define( '_MI_EGUIDE_CATEGORY_BOOKMARK_DESC', 'Notifcation at current event in Event Guide module' );

define( '_MI_EGUIDE_NEWPOST_SUBJECT', 'New Event - {EVENT_DATE} {EVENT_TITLE}' );
define( '_MI_EGUIDE_NEWPOST_NOTIFY', 'New event post' );
define( '_MI_EGUIDE_NEWPOST_NOTIFY_CAP', 'Notify when new event posted' );
define( '_MI_EGUIDE_CNEWPOST_NOTIFY', 'New event post in category' );
define( '_MI_EGUIDE_CNEWPOST_NOTIFY_CAP', 'Notify when new event posted in current category' );

// for altsys
if ( ! defined( '_MD_A_MYMENU_MYTPLSADMIN' ) ) {
	define( '_MD_A_MYMENU_MYTPLSADMIN', 'Templates' );
	define( '_MD_A_MYMENU_MYBLOCKSADMIN', 'Blocks/Permissions' );
	define( '_MD_A_MYMENU_MYLANGADMIN', 'Languages' );
	define( '_MD_A_MYMENU_MYPREFERENCES', 'Preferences' );
}

