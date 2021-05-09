## /////////////////////// — Event Guide :: Changelog

**Module Name**  : Eguide

**Module Version**  : 2.74 ( XCL 2.3.x )

**Description** : Eguide is an event management app (XCL module) to create and manage guidance and booking/reservations for events.

**Author** : Nobuhiro YASUTOMI (aka nbuy)

**Maintainer** : Gigamaster, XCL PHP7  
Changes from help.html,v 1.74 2021/05/08 13:00:21 gigamaster
---

**2021-05-08 [ XCL PHP7 - bug fix ]**  

✅ Add changelog.md  
✅ Add Editor WYSIWYG  
✅ Add admin UI preferences UI CKEditor  
✅ Add admin UI preferences breadcrumbs.md  
✅ Add constant language breadcrumbs  
✅ Add moduleConfig to eguide_breadcrumbs  
✅ Add new template breadcrumbs.html   
✅ Add new module svg icon  
✅ Add form input type (search, number)  
✅ Add French translation  
✅ Add jQuery UI calendar  
✅ Fix English typos  
✅ Fix event form Array ( $uid parameter missing )  
✅ Fix module Admin breadcrumbs  
✅ Fix smarty in admin template  
✅ Fix smarty tags in templates  
✅ Remove CSS and deprecated HTML tags  
✅ Remove fckeditor  
✅ Remove deprecated calendar.js  
✅ Remove 'changes' from help.html  
  
  
**2021-05-07 [ XCL PHP7 - bug fix ]**  
  
✅ Code refactoring ( identify global issues )  
✅ Update the module for XCL 2.3.x PHP7  
✅ SQL Engine InnoDB utf4  
✅ Fix int and dir  
✅ Fix split (deprecated)  
✅ Fix object pass by reference  
✅ Encode pt_UTF8


### Version XOOPS 2.xx
Author : Nobuhiro Yasutomi <nobuhiro.yasutomi@nifty.ne.jp>  
Website : MySite Users : <//myht.org/>  
$Id: help.html,v 1.70 2011/09/10 02:45:21 nobu Exp $  


**2013/10/05 eguide 2.71 released**  
- Reservation username display format customizabled (display_username)

**2013/05/30 eguide 2.70 released**  

- Not display cancel reservation form when past event time.
- Use &lt;label&gt; tag in checkbox/radio type item.
- Fix to show email field when guest and both accept mode.
- Add option variable (enable_past_register), that allow register to event which past closed date
- Register reservation bind for user account

**2011/09/10 eguide 2.64 released**  

- Fix notification email register/cancel not work  
  
**2010/10/10 eguide 2.63 released**  

- Fix replace for month/week name by local language string (2.63a)
- Add email confirm options (email_repeat_check)
- Support altsys language manager
- Fix miscalculate in reservation summary
- Fix redirect_header out absolute path (for mobile)  
  
**2010/05/16 eguide 2.62 released**  

- Fix version string (2.62a)
- Enable localization for month name in event date
- Fix block function conflict when module duplicated
- Fix Excel(XML) format malfunction over 40 records  
  
**2010/04/04 eguide 2.61 released**  

- Show reservation data when cancel confirm
- Add language/portuguese resouces (thx leco1)
- Add select option "Both" for "Event entry need to LOGIN" in preferences
- Remove limitation for excel(XML) format download.  
  
**2010/02/27 eguide 2.6 released**  

- add list type select in block options
- change admin.php form to hide some fields
- fix new event notification email tags not set
- option variables "reply_tpl_suffix" added
- redirect make to handle option variables
- add description for "Reservation limit plugins" in help.html
- add blocks for expired event
- add for "dlimit" plugins to limit total reservations (max_register_in_future)
- Reservation button label to change by action
- Allow {X_NAME} replace by user varibale
- add option variable "module_css" for assign module local stylesheet  
  
**2009/12/24 eguide 2.56 released**  

- fix EVENT_TITLE mail variable setting
- dlimit plugins support bound_time options
- blocks support bound_time
- add enable_copy options  
  
**2009/12/20 eguide 2.55 released**  

- More "Additional item options"  
- bound_time=01:00 : Bound time as last day  
- reply_subject=Subject : Replay email subject  
- from_name=Sender : Reply from name  
- Email subject redefine with email vars.
- Reply email variable EVENT_DATE defined  
  
**2009/10/04 eguide 2.54 released**  

- Time Table Labels apply to event date time selection
- FCKeditor (use_fckeditor={Basic|Default}) option added
- fix cancel page for new event mail notification
- fix in additional item at printable comment with comma
- event editing start time accept "HH:MM" format
- reservation control plugins control by option variable
- fix my reservation page ancker mistake
- fix block descption edit style mistake
- fix mutiple date editing template  
  
**2009/05/24 eguide 2.53 released**  

- Add context value for XOOPS Search module (thx tes)
- Add description to variable in block template  
  
**2009/03/09 eguide 2.52 released**  

- Describe more "REFERER errors" in reservation failer.
- Add detail show reservation. (thx uhouho)
- Fix repeat opening event mistake datetime. (thx uhouho)  
  
**2009/03/09 eguide 2.52 released**  

- Describe more "REFERER errors" in reservation failer.
- Add detail show reservation. (thx uhouho)
- Fix repeat opening event mistake datetime. (thx uhouho)  
  
**2008/10/19 eguide 2.51 released**  

- Add {RVID} tags in reply mail template (accept.tpl)
- Add CSV output coding system options (export_charset)
- follow altsys 0.6 template/blocks admin
- Revised Admin Interface by Gigamaster
- Fix category image field not stored (thx Gigamaster)
- Fix event active editing not work in admin list (thx Gigamaster)
- Assign category discription in smarty variable  
  
**2008/07/22 eguide 2.5 released**  

- Add item options "reply_extension" as switch reply mail template
- Apply "Additional item options" in defaults
- Change preferences "Label of persons" to "Additional item options"
- Not display category select button if there is no categires
- Add no data language resources for admin page
- Fix using template set mistake.  
  
**2008/02/16 eguide 2.42 released**  

- fix checkbox failer
- Add addtional field input helper (JavaScript)
- Fix admin menu link  
  
**2008/02/11 eguide 2.41 released**  

- Fix conflict with pico module  
  
**2008/02/05 eguide 2.4 released**  

- Categories enhancement (two level, sort order, importer, block)
- Fix JavaScript check failer
- Enable confirm page in default
- Add duplicatable function
- Fix excel template (remove hard code kanji)
- Using newer altsys (0.5later) function
- Arrangement of language resource (Separation main/common)
- add resource language/spanish (thx Gerardo)  
  
**2007/12/31 eguide 2.31 released**  

- text field quote(') handle bug fixed
- add const type
- variables handle in redirect URL
- multiple category selecting in index.php (e.g. cat=1,2,3)
- fix JavaScript mistake (thx souhalt)
- fix rendering mistake when occurrence errors (thx souhalt)
- Ignore mail sending status except reservation user
- Using altsys module when exists
- Internal Reservation data format changes (refactoring)
- Fix extra date editing failer when after start time (thx Jens)
- add breadcrumbs (xoops_breadcrumbs) smarty variable setting  
  
**2007/03/03 eguide 2.3 released**  

- Add setting notifiy to operation user self.
- Add update notification to admin with poster
- fix stop admin mail when disable setting in preference
- fix notification mail for register users
- eguide 2.24 released
- fix compat in PHP5/MySQL5 (mylist.php failer, etc)
- fix complex value-label behavier item in checkbox/radio
- update tchinese resources (thanks jax)
- suppress space(nbsp) when setting value at additional items typed checkbox/radio  
  
**2006/10/14 eguide 2.23 released**  

- fix month name index typo in japanese/german/tchinese  
  
**2006/10/14 eguide 2.21 released**  

- fix some language resources
- add language/tchinese resources (by jimmy9522 at twpug.net)
- fix poster uname mistake when summary CSV output  
  
**2006/08/29 eguide 2.2 released**  

- make display simple uname CSV format output
- add category filter in blocks
- add filling mark in block when show details
- new event block shows next event in multiple
- fix template: not display _MD_RESERV_FORM (as "Reservation Here") when reservation disable
- add language/german resources (from Jens Havelberg)  
  
**2006/08/17 eguide 2.1 released**  

- add redirect url setting after reservation
- revised escape in additional items and extent "prop" attribute (from Craig Taylor)
- fix template: not display close time when reservation disable  
  
**2006/08/13 eguide 2.01 released**  

- fix mistake resources
- fix cancel fail when login user do cancel  
  
**2006/08/03 eguide 2.0 released**  
