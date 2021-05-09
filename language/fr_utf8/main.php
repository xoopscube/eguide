<?php
// Event Guide Module Administration message catalogue
// French UTF-8 @gigamaster

if ( defined( '_MD_RESERV_FORM' ) ) {
	return;
}

define('_MD_RESERV_FORM','Réserver ici');
define('_MD_RESERVATION','Faire une réservation');
define('_MD_NAME',' 	 /^Nom\*?$/ ');
define( '_MD_SDATE_FMT', 'D, j M Y' );
define( '_MD_STIME_FMT', 'H:i' );
// Localization Translate Weekly date name
//global $ev_week;
//$ev_week = array('Sun'=>'S', 'Mon'=>'M','Tue'=>'T', 'Wed'=>'W','Thu'=>'U','Fri'=>'F', 'Sat'=>'A');
define( "_MD_POSTED_FMT", "j M Y H:i" );
define( "_MD_TIME_FMT", "j M Y H:i" );
define('_MD_READMORE','Plus...');
define('_MD_EMAIL','Adresse Email');
define('_MD_EMAIL_CONF','Confirmer Adresse Email');
define('_MD_EMAIL_CONF_DESC','Entrer à nouveau l\'adresse email pour confirmer');
define('_MD_UNAME','Nom d\'utilisateur');
define('_MD_SUBJECT',' Confirmer - {EVENT_DATE} {EVENT_TITLE}');
define('_MD_NOTIFY_EVENT','Notification des nouveaux événements');
define('_MD_NOTIFY_REQUEST','Notifier par email quand de nouveaux événements sont postés');
define( '_MD_REQUIRE_MARK', '<em>*</em>' );
define( '_MD_LISTITEM_FMT', '[%s]' );
define( "_MD_ORDER_NOTE1", "'" . _MD_REQUIRE_MARK . "' éléments requis." );
define('_MD_ORDER_NOTE2',' \'[ ]\' objet affiché pour la liste de participants.');
define('_MD_ORDER_SEND','Réservation');
define('_MD_ORDER_CONF','Confirmer');

define('_MD_EVENT_NONE','Il n\'y a pas de guide d\'événement');
define('_MD_BACK','Retour');
define('_MD_RESERVED','Il n\'y a qu\'une réservation');
define('_MD_RESERV_NUM','Nombre de places max %d ');
define('_MD_RESERV_REG','Places déjà réservées %d');
define('_PRINT','Imprimer');

define('_MD_NOITEM_ERR','Pas d\'entrée, ajouter une valeur');
define('_MD_NUMITEM_ERR','Uniquement des nombres');
define('_MD_MAIL_ERR','Erreur du format d\'adresse email');
define('_MD_MAIL_CONF_ERR','L\'adresse email n\'est pas la même');
define('_MD_SEND_ERR','Échec de l\'envoi du mail');
define('_MD_DUP_ERR','Une réservation existe déjà avec ce courriel');
define('_MD_DATE_ERR','La date est passée');
define('_MD_DATEDELETE_ERR','Il y a déjà des réservations, ne pas supprimer la date.');
define('_MD_DUP_REGISTER','La notification par email est déjà enregistrée');
define('_MD_REGISTERED','Notification par email enregistrée');

define('_MD_RESERV_ACCEPT','Envoi du mail de confirmation');
define('_MD_RESERV_STOP','Les réservations sont interrompues');
define('_MD_RESERV_CONF','Information de la Commande');
define('_MD_RESERV_ADMIN','Liste des Réservations');
define('_MD_RESERV_REGISTER','Réservations enregistrées');

define('_MD_RESERV_ACTIVE',' est accepté.');
define('_MD_RESERV_REFUSE',' est refusé.');

define('_AM_MAILGOOD','Succès : %s');
define('_AM_SENDMAILNG','Échec : %s');

define('_MD_RESERV_NOTFOUND','Pas de réservations ou déjà annulées');
define('_MD_RESERV_CANCEL','Annuler définitivement ?');
define('_MD_RESERV_CANCELED','Les réservations ont été annulées');
define('_MD_RESERV_NOCANCEL','Impossible d\'annuler une réservation après la fermeture.');
//define( "_MD_RESERV_NOTIFY", "%s\n\nOrdering Email: %s\nReservation Event: %s\n  %s\n" );
define('_MD_RESERV_NOTIFY','%s Ordre Email : %s Réservation Événement : %s %s ');
define('_MD_RESERV_FULL','Les réservations ne sont plus disponibles car l\'événement est complet.');
//define( '_MD_RESERV_TOMATCH', ' %d is too match (%d left)' );
define('_MD_RESERV_TOMATCH',' %d dépasse la limite (%d restant) ');
define('_MD_RESERV_CLOSE','Finir la réservation');
define('_MD_RESERV_NEEDLOGIN','Il faut <a href="' . XOOPS_URL . '/user.php">se connecter</a>pour réserver.');
define( '_MD_RESERV_PLUGIN_FAIL', 'Not enough condition for reservation' );
define('_MD_CANCEL_FAIL','Échec de l\'annulation');
define('_MD_NODATA','Il n\'y a pas de données');
define('_MD_NOEVENT','Pas d\'Événements listés');
define('_MD_SHOW_PREV','Événements Précédents');
define('_MD_SHOW_NEXT','Événements à venir');

define('_MD_POSTERC','Auteur');
define('_MD_POSTDATE','Enregistré');
define('_MD_STARTTIME','Événement qui commence');
define('_MD_CLOSEDATE','Réservation fermée');
define('_MD_CLOSEBEFORE','Fermer l\'inscription avant');
define('_MD_CLOSEBEFORE_DESC','avant le début (e.g.: 3days, 2hour, 50min)');
define('_MD_TIME_UNIT','jours,heure,min');
define('_MD_TIME_REG',' j(our)?s?,h(eure)?,min ');
define('_MD_CALENDAR','Aller au Calendrier');
define('_MD_CAL','Calendrier');
define('_MD_CAL_MONDAY_FIRST','1');
define('_MD_REFER',' %d visites');
define('_MD_RESERV_LIST','Liste des participants');

define('_MD_NEED_UPGRADE','Le module doit être mise à jour');

//%%%%%%	File Name receiept.php 	%%%%%
define('_MD_RESERV_EDIT','Éditer les Réservations');
define('_MD_OPERATION','Opération');
define('_MD_STATUS','Status');
define('_MD_RESERV_RETURN','Retour à la liste');
define('_MD_RESERV_REC','Registre des Réservations');
define('_MD_RVID','ID de Réservation');
define('_MD_ORDER_COUNT','nombre de commandes');
define('_MD_PRINT_DATE','Date d\'impression');
define('_MD_SAVECHANGE','Sauvegarder les changements');
define('_MD_RESERV_DEL','Supprimer la réservation');
define('_MD_DETAIL','Détail');
define('_MD_RESERV_MSG_H','Envoi d\'un message de réservation');
define('_MD_ACTIVATE','Approuvé');
define('_MD_REFUSE','Refusé');
define('_MD_EXPORT_OUT','Format Excel');
define( '_MD_EXPORT_CHARSET', 'UTF-8' );
define('_MD_INFO_MAIL','Envoi du mail');
define('_MD_SUMMARY','Description');
define('_MD_SUM_ITEM','Elément de la description');
define('_MD_SUM','Résumé');

//%%%%%%	File Name admin.php 	%%%%%
define('_MD_EDITARTICLE','Éditer un Événement');
define('_MD_NEWTITLE','Nouvel Événement');
define('_MD_NEWSUB','Nouvel Événement - {EVENT_DATE} {EVENT_TITLE} ');
define('_MD_TITLE','Titre');
define('_MD_EVENT_DATE','Date de l\'Événement');
define('_MD_EVENT_EXPIRE','Terminer l\'Affichage');
define('_MD_EVENT_EXTENT','Réouvrir');
define('_MD_EVENT_CATEGORY','Catégorie');
define('_MD_EDIT_EXTENT','Éditer la date d\'ouverture');
define('_MD_EXTENT_REPEAT','Répéter');
define('_MD_ADD_EXTENT','Ajouter une date d\'ouverture');
define('_MD_ADD_EXTENT_DESC','Additional Open Date Time in \"AAAA-MM-JJ HH:MM\" format (Entrées multiples séparées par une nouvelle ligne) ');
define('_MD_INTROTEXT','Text d\'introduction');
define('_MD_EXTEXT','Description');
define('_MD_EVENT_STYLE','Style de l\'évenment');
define('_MD_RESERV_SETTING','Réservation');
define('_MD_RESERV_DESC','Permettre les réservations');
define('_MD_RESERV_STOPFULL','Arrêter les réservations lorsque la limite est atteinte');
define('_MD_RESERV_AUTO','Accepter automatiquement les réservations (pas d\'approbation requise)');
define('_MD_RESERV_NOTIFYPOSTER','Notifer les réservations par mail');
define( '_MD_RESERV_UNIT', 'Unité' );
define('_MD_RESERV_ITEM','Objets supplémentaires');
define('_MD_RESERV_LAB','Nom de l\'objet');
define('_MD_RESERV_LABREQ','Renseigner le nom d\'objet');
define('_MD_RESERV_REQ','Requis');
define('_MD_RESERV_ADD','Ajouter');
define( '_MD_RESERV_OPTREQ', 'Need option argument' );
define('_MD_RESERV_ITEM_DESC','<a href=\"language/english/help.html#form\" target=\"help\">A propos du format des objets</a> ');
define('_MD_RESERV_LABEL_DESC','Utiliser le nom d\'objet "%s" en cas de réservation de plusieurs personnes');
define('_MD_OPTION_VARS','Option Variables');
define('_MD_OPTION_OTHERS','Autres');
define('_MD_RESERV_REDIRECT','URL de redirection après la réservation');
//define( '_MD_RESERV_REDIRECT_DESC', 'Set a number waiting seconds (e.g.: "4;http://..."). variables: {X_EID}, {X_SUB}, {X_RVID}' );
define('_MD_RESERV_REDIRECT_DESC','Ajouter un nombre de secondes d\'attente  (e.g.: "4;http://..."). variables : {X_EID}, {X_SUB}, {X_RVID} ');
define('_MD_APPROVE','Valider l\'Affichage');
define('_MD_PREVIEW','Prévisualiser');
define('_MD_SAVE','Sauvegarder');
define('_MD_UPDATE','Mettre à jour');
define('_MD_DBUPDATED','Base de données mise à jour');
define('_MD_DBDELETED','Événement Supprimé');

define('_MD_EVENT_DEL_DESC','Supprimer cet événement');
define('_MD_EVENT_DEL_ADMIN','Supprimer les données y compris les réservations');

define('_MD_TIMEC','Temps');
// Localization Transrate Month name
//global $ev_month;
//$ev_month = array("Jan"=>"Jan", "Feb"=>"Feb", "Mar"=>"Mar", "Apr"=>"Apr",
//                  "May"=>"May", "Jun"=>"Jun", "Jul"=>"Jul", "Aug"=>"Aug",
//                  "Sep"=>"Sep", "Oct"=>"Oct", "Nov"=>"Nov", "Dec"=>"Dec");

//define( '_MD_RESERV_DEFAULT_ITEM', "Name*,size=40\nAddress\n" );
define('_MD_RESERV_DEFAULT_ITEM',"Name*,size=40\nAddress\n");
define( '_MD_RESERV_DEFAULT_MEMBER', "Utilisateur par défaut" );

// notification message
define('_MD_APPROVE_REQ','Confirmer l\'événement et l\'approuver');
//%%%%%%	File Name sendinfo.php 	%%%%%
define('_MD_INFO_TITLE','Mail d\'information à envoyer');
define('_MD_INFO_CONDITION','Envoyer à');
define('_MD_INFO_NODATA','pas de DONNÉES');
define('_MD_INFO_SELF',"Envoyer  à soi (%s) ");
define('_MD_INFO_DEFAULT',"-messages-\n\n\nÉvénement réservé\n    {EVENT_URL}\n");
define('_MD_INFO_MAILOK','Mail envoyé');
define('_MD_INFO_MAILNG','Échec de l\'envoi du mail');
define('_MD_UPDATE_SUBJECT','Événement mis à jour');
define('_MD_UPDATE_DEFAULT','Par défaut');

//%%%%%%	File Name print.php 	%%%%%

define('_MD_URLFOREVENT','URL de cet Événement :');
// %s represents your site name
define('_MD_THISCOMESFROM','Plus d\'information sur %s ');

//%%%%%%	File Name mylist.php 	%%%%%
define('_MD_MYLIST','Réservation des Événements');
define('_MD_CANCEL','Annuler');
define('_MD_CANCEL_SUBJ','Annuler - {EVENT_DATE} {EVENT_TITLE} ');
