<?php
// Event Guide Module Administration message catalogue
// French UTF-8 @gigamaster

if ( defined( '_MI_EGUIDE_NAME' ) ) {
	return;
}

// The name of this module
//define( "_MI_EGUIDE_NAME", "Event Guide" );
define('_MI_EGUIDE_NAME','Gestion d\'Événements');

// A brief description of this module
define('_MI_EGUIDE_DESC','Affichage des détails de l\'événement et système de Réservation');

// Names of blocks for this module (Not all module has blocks)
define('_MI_EGUIDE_MYLIST','Événements réservés');
define('_MI_EGUIDE_SUBMIT','Enregistrer un nouvel événement');
define('_MI_EGUIDE_COLLECT','Réglages de la collection');
define('_MI_EGUIDE_REG','Notifier des nouveaux événements');
define('_MI_EGUIDE_HEADLINE','Guide pour les Événements');
define('_MI_EGUIDE_HEADLINE_DESC','Listes des événements récents à venir');
define('_MI_EGUIDE_HEADLINE2','Nouveaux Événements');
define('_MI_EGUIDE_HEADLINE2_DESC','Liste des événements postés récemment');
define('_MI_EGUIDE_HEADLINE3','Événements terminés');
define('_MI_EGUIDE_HEADLINE3_DESC','Liste des événements déjà terminés');
define('_MI_EGUIDE_CATBLOCK','Catégorie d\'événement');
define('_MI_EGUIDE_CATBLOCK_DESC','Choisir une catégorie d\'événement');

define( "_MI_EGUIDE_EVENTS", "Gestion" );
define('_MI_EGUIDE_NOTIFIES','Notifier les nouveaux enregistrés');
define('_MI_EGUIDE_CATEGORY','Catégories de l\'événement');
define('_MI_EGUIDE_SUMMARY','Résumé des réservations');
define('_MI_EGUIDE_CATEGORY_MARK','Catégorie -');
define('_MI_EGUIDE_ABOUT','a propos de Eguide');

// Configuration variable for this module
define('_MI_EGUIDE_POSTGROUP','Post du groupe de l\'événement');
define('_MI_EGUIDE_POSTGROUP_DESC','Définir un groupe qui pourra administrer l\'événement');
define('_MI_EGUIDE_NOTIFYADMIN','Notifier l\'admin par mail');
define('_MI_EGUIDE_NOTIFYADMIN_DESC','Notifier l\'admin par mail quand un nouvel événement est enregistré');
define('_MI_EGUIDE_NOTIFY_ALWAYS','Toujours');
define('_MI_EGUIDE_NOTIFYGROUP','Groupe d\'amin pour les notifications');
define('_MI_EGUIDE_NOTIFYGROUP_DESC','Le groupe reçoit les notifications d\'admin par mail');
define('_MI_EGUIDE_NEEDPOSTAUTH','Le nouvel événement doit être approuvé');
define('_MI_EGUIDE_NEEDPOSTAUTH_DESC','Le nouvel événement doit être approuvé par un administrateur.');
define('_MI_EGUIDE_MAX_LISTITEM','Afficher plus d\'objet dans la liste');
define( "_MI_EGUIDE_MAX_LISTITEM_DESC", "Display items entry order additional form" );
define('_MI_EGUIDE_MAX_LISTLINES','Afficher la liste des objets sur une page');
define('_MI_EGUIDE_MAX_LISTLINES_DESC','Nombre de lignes d\'objet par ligne sur une page');
define('_MI_EGUIDE_MAX_EVENT','Affichier les événements sur la top page');
define('_MI_EGUIDE_MAX_EVENT_DESC','Nombre d\'événements listés sur la top page');
define('_MI_EGUIDE_SHOW_EXTENTS','Montrer les entrées multiples');
define('_MI_EGUIDE_SHOW_EXTENTS_DESC','Si un événement a plusieurs entrées, montrer chaque entrée. <br>
Oui - afficher chaque entrée.<br>
Non - Ne montrer que les entrées récentes.');
define('_MI_EGUIDE_USER_NOTIFY','L\'utilisateur a demandé les notifications pour un nouvel événement');
define('_MI_EGUIDE_USER_NOTIFY_DESC','OUI - Permet les notifications par mail<br> 
NON -  Désactiver');
define( '_MI_EGUIDE_MEMBER','Pour participer à l\'événement, requiert la connexion de l\'utilisateur');
define( '_MI_EGUIDE_MEMBER_DESC','Seuls les utilisateurs enregistrés peuvent réserver des événements. (pas d\'adresse email)');
define( '_MI_EGUIDE_MEMBER_RELAX','Les deux');
define( '_MI_EGUIDE_ORDERCONF','page de confirmation');
define( '_MI_EGUIDE_ORDERCONF_DESC','Afficher la page de confirmation quand un réservation est soumise.');
define( '_MI_EGUIDE_CLOSEBEFORE','Fermeture des inscriptions (min) ');
define( '_MI_EGUIDE_CLOSEBEFORE_DESC', 'Event entry close time before setting minits.' );
define( '_MI_EGUIDE_LAB_PERSONS','Options des objets supplémentaires');
define( '_MI_EGUIDE_LAB_PERSONS_DESC', "Additional item optional settings, like a field label for how many persons. Example: 'label_persons=Persons'. See <a href=\"../../eguide/admin/help.php#form_options\">about eguide page</a> more details." );
define( '_MI_EGUIDE_DATE_FORMAT','Format de la date');
define( '_MI_EGUIDE_DATE_FORMAT_DESC', "Format de la date affichée pour les événements. Utiliser le format de la date PHP." );
define( '_MI_EGUIDE_DATE_FORMAT_DEF', "D, d M Y" );
define( '_MI_EGUIDE_EXPIRE_AFTER','Temps d\'expiration');
define( '_MI_EGUIDE_EXPIRE_AFTER_DESC', 'Event expired on top page when after event start time in minites.' );
define( '_MI_EGUIDE_PERSONS','Valeur par défaut des personnes');
define( '_MI_EGUIDE_PERSONS_DESC', 'Reservation persons in event post form' );
define( '_MI_EGUIDE_PLUGINS','Utiliser le plugin de contrôle des réservations');
define( '_MI_EGUIDE_PLUGINS_DESC', 'Internal control accept entry form plugins' );
define( '_MI_EGUIDE_COMMENT','Permettre les commentaires');
define( '_MI_EGUIDE_COMMENT_DESC','Permettre de commenter les événements');
define( '_MI_EGUIDE_MARKER', 'Current entry level mark' );
define( '_MI_EGUIDE_MARKER_DESC', 'The mark mean of how many entry in current. Show mark correspond percentage. (xx,yy mean less than xx% showup yy. And "0,yy" mean out of date mark)' );
define( '_MI_EGUIDE_MARKER_DEF', "0,[Close]\n50,[Vacant]\n100,[Many]\n101,[Full]\n" );
define( '_MI_EGUIDE_TIME_DEFS', 'Time Table Labels' );
define( '_MI_EGUIDE_TIME_DEFS_DESC', 'Set starting time in Settings collection page. e.g.: 08:00,14:00,16:00' );
define( '_MI_EGUIDE_EXPORT_LIST', 'Item List in export reservations' );
define( '_MI_EGUIDE_EXPORT_LIST_DESC', "Item `name' or `number' seperated comma(,). Astarisk(*) mean left items. e.g.: 3,4,0,2,*" );
define( '_MI_EGUIDE_EDITOR', 'Editeur visuel' );
define( '_MI_EGUIDE_EDITOR_DESC', 'WYSIWYG semblable aux outils d\'édition de bureau (OpenOffice, Word) - cette option requiert l\'installation du module CKEditor.' );
define( '_MI_EGUIDE_BREADCRUMBS', 'BREADCRUMBS' );
define( '_MI_EGUIDE_BREADCRUMBS_DESC', 'BREADCRUMBS_DESC' );

// Templates
define( "_MI_EGUIDE_EVENT_BREADCRUMBS_TPL", "Module Breadcrumb navigation" );
define( "_MI_EGUIDE_INDEX_TPL", "Event Guide Top page list" );
define('_MI_EGUIDE_EVENT_TPL','Détails de l\'événement');
define( "_MI_EGUIDE_ENTRY_TPL", "Reservation entry" );
define( "_MI_EGUIDE_USERSSEL_TPL", "User select for operators entry" );
define( "_MI_EGUIDE_EVENT_PRINT_TPL", "Detail of Event for Print" );
define('_MI_EGUIDE_RECEIPT_TPL','Liste des réservations');
define('_MI_EGUIDE_ADMIN_TPL','Formulaire d\'entrée des événements');
define( "_MI_EGUIDE_RECEIPT_PRINT_TPL", "Reservations List for Print" );
define( "_MI_EGUIDE_EVENT_ITEM_TPL", "Item of Event Showup" );
define('_MI_EGUIDE_EVENT_CONF_TPL','Formulaire de confirmation des événements');
define('_MI_EGUIDE_EVENT_LIST_TPL','Liste des événements réservés');
define('_MI_EGUIDE_EVENT_CONFIRM_TPL','Confirmation de la réservation');
define( "_MI_EGUIDE_EDITDATE_TPL", "Edit Open Date" );
define( "_MI_EGUIDE_COLLECT_TPL", "Reservation setting collection" );
define('_MI_EGUIDE_EXCEL_TPL','Format Excel (XML) à l\'exportation');

// Notifications
define( '_MI_EGUIDE_GLOBAL_NOTIFY', 'Grobal in module' );
define( '_MI_EGUIDE_GLOBAL_NOTIFY_DESC', 'Notification in Event Guide module' );
define('_MI_EGUIDE_CATEGORY_NOTIFY','Catégorie Actuelle');
define( '_MI_EGUIDE_CATEGORY_NOTIFY_DESC', 'Notification at category in Event Guide module' );
define('_MI_EGUIDE_CATEGORY_BOOKMARK','Événement actuel');
define( '_MI_EGUIDE_CATEGORY_BOOKMARK_DESC', 'Notifcation at current event in Event Guide module' );

define('_MI_EGUIDE_NEWPOST_SUBJECT','Nouvel événement - {EVENT_DATE} {EVENT_TITLE} ');
define('_MI_EGUIDE_NEWPOST_NOTIFY','Nouveau post d\'événement');
define('_MI_EGUIDE_NEWPOST_NOTIFY_CAP','Notifier lors d\'un nouveau post d\'événement');
define('_MI_EGUIDE_CNEWPOST_NOTIFY','Nouveau post d\'événement dans la catégorie');
define('_MI_EGUIDE_CNEWPOST_NOTIFY_CAP','Notifier lors d\'un nouveau post d\'événement dans la catégorie actuelle');

// for altsys
if ( ! defined( '_MD_A_MYMENU_MYTPLSADMIN' ) ) {
	define( '_MD_A_MYMENU_MYTPLSADMIN', 'Templates' );
define('_MD_A_MYMENU_MYBLOCKSADMIN','Blocs/permissions');
define('_MD_A_MYMENU_MYLANGADMIN','Langues');
define('_MD_A_MYMENU_MYPREFERENCES','Préférences');
}
