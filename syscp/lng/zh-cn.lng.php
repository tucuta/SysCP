<?php
/**
 * filename: $Source$
 * begin: Saturday, Nov 20, 2004
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version. This program is distributed in the
 * hope that it will be useful, but WITHOUT ANY WARRANTY; without even the
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * @author Wang Changyi <wangchangyi@hotmail.com>, Patrick Brueckner <patrick_brueckner@yahoo.de>, Ke Zhang <windflowerflower@hotmail.com>
 * @copyright (C) 2004 Wang Changyi <wangchangyi@hotmail.com>, Patrick Brueckner <patrick_brueckner@yahoo.de>, Ke Zhang <windflowerflower@hotmail.com>
 * @package Language
 * @version $Id$
 */

 
/**
 * Global
 */
$lng['panel']['edit'] = '&#32534;&#36753;';
$lng['panel']['delete'] = '&#21024;&#38500;';
$lng['panel']['create'] = '&#21019;&#24314;';
$lng['panel']['save'] = '&#20445;&#23384;';
$lng['panel']['yes'] = '&#26159;';
$lng['panel']['no'] = '&#21542;';
$lng['panel']['emptyfornochanges'] = '&#26080;&#25913;&#21464;&#28165;&#31354;';
$lng['panel']['emptyfordefault'] = '&#40664;&#35748;&#20540;&#28165;&#31354;';
$lng['panel']['path'] = '&#36335;&#24452;';
$lng['panel']['toggle'] = '&#35302;&#21457;&#22120;';

/**
 * Login
 */
$lng['login']['username'] = '&#29992;&#25143;&#21517;';
$lng['login']['password'] = '&#23494;&#30721;';
$lng['login']['language'] = '&#35821;&#35328;';
$lng['login']['login'] = '&#30331;&#38470;';
$lng['login']['logout'] = '&#30331;&#20986;';
 
/**
 * Customer
 */
$lng['customer']['login'] = '&#29992;&#25143;&#21517;';
$lng['customer']['documentroot'] = '&#26681;&#30446;&#24405;';
$lng['customer']['name'] = '&#22995;';
$lng['customer']['surname'] = '&#21517;';
$lng['customer']['company'] = '&#20844;&#21496;';
$lng['customer']['street'] = '&#34903;&#36947;';
$lng['customer']['zipcode'] = '&#37038;&#25919;&#32534;&#30721;';
$lng['customer']['city'] = '&#22478;&#24066;';
$lng['customer']['phone'] = '&#30005;&#35805;';
$lng['customer']['fax'] = '&#20256;&#30495;';
$lng['customer']['email'] = '&#30005;&#23376;&#37038;&#20214;';
$lng['customer']['customernumber'] = '&#39038;&#23458;&#21495;';
$lng['customer']['diskspace'] = '&#30913;&#30424;&#31354;&#38388;(MB)';
$lng['customer']['traffic'] = '&#27969;&#37327;(GB)';
$lng['customer']['mysqls'] = 'MySQL&#25968;&#25454;&#24211;';
$lng['customer']['emails'] = '&#30005;&#23376;&#37038;&#20214;&#22320;&#22336;';
$lng['customer']['accounts'] = '&#30005;&#23376;&#37038;&#20214;&#24080;&#25143;';
$lng['customer']['forwarders'] = '&#30005;&#23376;&#37038;&#20214;&#36716;&#21457;';
$lng['customer']['ftps'] = 'FTP&#25991;&#20214;&#26684;&#24335;';
$lng['customer']['subdomains'] = '&#23376;&#22495;';
$lng['customer']['domains'] = '&#22495;';
$lng['customer']['unlimited'] = '&#26080;&#38480;&#30340;';
 
/**
 * Customermenue
 */
$lng['menue']['main']['main'] = '&#20027;&#35201;&#30340;';
$lng['menue']['main']['changepassword'] = '&#26356;&#25913;&#23494;&#30721;';
$lng['menue']['email']['email'] = '&#30005;&#23376;&#37038;&#20214;';
$lng['menue']['email']['emails'] = '&#22320;&#22336;';
$lng['menue']['email']['webmail'] = '&#32593;&#32476;&#37038;&#20214;';
$lng['menue']['mysql']['mysql'] = 'MySQL';
$lng['menue']['mysql']['databases'] = '&#25968;&#25454;&#24211;';
$lng['menue']['mysql']['phpmyadmin'] = 'phpMyAdmin';
$lng['menue']['domains']['domains'] = '&#22495;';
$lng['menue']['domains']['settings'] = '&#35774;&#32622;';
$lng['menue']['ftp']['ftp'] = 'FTP';
$lng['menue']['ftp']['accounts'] = '&#36134;&#25143;';
$lng['menue']['ftp']['webftp'] = '&#32593;&#32476;FTP&#22320;&#22336;';
$lng['menue']['extras']['extras'] = '&#19987;&#29992;';
$lng['menue']['extras']['directoryprotection'] = '&#30446;&#24405;&#20445;&#25252;';
$lng['menue']['extras']['pathoptions'] = '&#36335;&#24452;&#36873;&#25321;';
 
/**
 * Index
 */
$lng['index']['customerdetails'] = '&#29992;&#25143;&#25968;&#25454;';
$lng['index']['accountdetails'] = '&#36134;&#25143;&#25968;&#25454;';
 
/**
 * Change Password
 */
$lng['changepassword']['old_password'] = '&#26087;&#23494;&#30721;';
$lng['changepassword']['new_password'] = '&#26032;&#23494;&#30721;';
$lng['changepassword']['new_password_confirm'] = '&#26032;&#23494;&#30721;(&#30830;&#35748;)';
$lng['changepassword']['new_password_ifnotempty'] = $lng['changepassword']['new_password'] . '(' . $lng['panel']['emptyfornochanges'] . ')' ;
$lng['changepassword']['also_change_ftp'] = '&#25913;&#21464;&#20027;FTP&#20837;&#21475;&#30340;&#23494;&#30721;';
 
/**
 * Domains
 */
$lng['domains']['description'] = '&#36825;&#37324;&#24744;&#21487;&#20197;&#35774;&#32622;&#22495;&#20197;&#21450;&#26356;&#25913;&#36335;&#24452;<br/>&#22312;&#27599;&#27425;&#26356;&#25913;&#21518;&#31995;&#32479;&#38656;&#35201;&#19968;&#20123;&#26102;&#38388;&#37325;&#26032;&#35835;&#21462;&#35774;&#32622;';
$lng['domains']['domainsettings'] = '&#22495;&#35774;&#32622;';
$lng['domains']['domainname'] = '&#22495;&#21517;';
$lng['domains']['subdomain_add'] = '&#28155;&#21152;&#23376;&#22495;';
$lng['domains']['subdomain_edit'] = '&#32534;&#36753;&#23376;&#22495;';
$lng['domains']['wildcarddomain'] = '&#20570;&#20026;&#21407;&#22987;&#22495;&#30331;&#35760;';
 
/**
 * eMails
 */
$lng['emails']['description'] = '&#36825;&#37324;&#24744;&#21487;&#20197;&#21019;&#24314;&#24744;&#30340;&#30005;&#23376;&#37038;&#20214;&#22320;&#22336;<br />POP&#36134;&#25143;&#22914;&#21516;&#24744;&#38376;&#21069;&#30340;&#37038;&#31665;&#65292;&#27599;&#24403;&#26377;&#20154;&#32473;&#24744;&#20889;&#30005;&#23376;&#37038;&#20214;&#65292;&#30005;&#23376;&#37038;&#20214;&#20415;&#20250;&#34987;&#25918;&#32622;&#22312;POP&#36134;&#25143;&#20013;<br/><br/>&#24744;&#37038;&#20214;&#31243;&#24207;&#30340;&#36827;&#20837;&#25968;&#25454;&#22914;&#19979;&#25152;&#31034;&#65306;<i>&#26012;&#20307;&#23383;</i>&#30340;&#35828;&#26126;&#20250;&#34987;&#27599;&#27425;&#30340;&#30331;&#35760;&#32780;&#26367;&#20195;<br><b>&#20027;&#26426;&#21517;<b><i>&#22495;&#21517;</i></b><br>&#29992;&#25143;&#21517;):<b><i>&#36134;&#25143;&#21517;/&#30005;&#23376;&#37038;&#20214;&#22320;&#22336;</i></b><br>&#23494;&#30721;:<b><i>&#34987;&#36873;&#23494;&#30721;</i></b>';
$lng['emails']['emailaddress'] = '&#30005;&#23376;&#37038;&#20214;&#22320;&#22336;';
$lng['emails']['emails_add'] = '&#21019;&#24314;&#30005;&#23376;&#37038;&#20214;&#22320;&#22336;';
$lng['emails']['emails_edit'] = '&#32534;&#36753;&#30005;&#23376;&#37038;&#20214;&#22320;&#22336;';
$lng['emails']['catchall'] = '&#30005;&#37038;&#25143;&#21475;';
$lng['emails']['iscatchall'] = '&#35774;&#32622;&#25104;&#30005;&#37038;&#25143;&#21475;?';
$lng['emails']['account'] = '&#24080;&#25143;';
$lng['emails']['account_add'] = '&#21019;&#24314;&#24080;&#25143;';
$lng['emails']['account_delete'] = '&#21024;&#38500;&#24080;&#25143;';
$lng['emails']['from'] = '&#20174;';
$lng['emails']['to'] = '&#21040;';
$lng['emails']['forwarders'] = '&#20195;&#36816;&#20154;';
$lng['emails']['forwarder_add'] = '&#21019;&#24314;&#20195;&#36816;&#20154;';
 
/**
 * FTP
 */
$lng['ftp']['description'] = '&#36825;&#37324;&#24744;&#21487;&#20197;&#21019;&#24314;&#39069;&#22806;&#30340;FTP&#36134;&#25143;<br />&#26356;&#25913;&#31435;&#21051;&#29983;&#25928;&#24182;&#19988;FTP&#36134;&#25143;&#31435;&#21051;&#21487;&#20197;&#20351;&#29992;';
$lng['ftp']['account_add'] = '&#28155;&#21152;&#36134;&#25143;';
 
/**
 * MySQL
 */
$lng['mysql']['description'] = '&#36825;&#37324;&#24744;&#21487;&#20197;&#28155;&#21152;&#21644;&#21024;&#38500;MySQL&#25968;&#25454;&#24211;<br>&#26356;&#25913;&#31435;&#21051;&#29983;&#25928;&#24182;&#19988;&#25968;&#25454;&#24211;&#31435;&#21051;&#21487;&#20197;&#20351;&#29992;<br>&#22312;&#33756;&#21333;&#20013;&#24744;&#21487;&#20197;&#25214;&#21040;&#21435;&#24448;phpMyAdmin&#30340;&#38142;&#25509;&#65292;&#22312;&#27492;&#24744;&#21487;&#20197;&#36731;&#26494;&#32534;&#36753;&#24744;&#25968;&#25454;&#24211;&#20013;&#30340;&#20869;&#23481;<br><br>php&#21407;&#25991;&#20214;&#30340;&#36827;&#20837;&#25968;&#25454;&#22914;&#19979;&#25152;&#31034;:<i>&#26012;&#20307;&#23383;</i>&#30340;&#35828;&#26126;&#20250;&#34987;&#27599;&#27425;&#30340;&#30331;&#35760;&#32780;&#26367;&#20195;<br>&#20027;&#26426;&#21517;:<b>localhost</b><br>&#29992;&#25143;&#21517;:<b><i>&#25968;&#25454;&#24211;&#21517;</i></b><br>&#23494;&#30721;:<b><i>&#34987;&#36873;&#23494;&#30721;</i></b><br>&#25968;&#25454;&#24211;:<b><i>&#25968;&#25454;&#24211;&#21517;';
$lng['mysql']['databasename'] = '&#29992;&#25143;&#21517;/&#25968;&#25454;&#24211;&#21517;';
$lng['mysql']['databasedescription'] = '&#25968;&#25454;&#24211;&#25551;&#36848;';
$lng['mysql']['database_create'] = '&#21019;&#24314;&#25968;&#25454;&#24211;';

/**
 * Extras
 */
$lng['extras']['description'] = '&#36825;&#37324;&#24744;&#21487;&#20197;&#21019;&#24314;&#39069;&#22806;&#30340;&#19987;&#29992;&#65292;&#35692;&#22914;&#30446;&#24405;&#20445;&#25252;<br/>&#26356;&#25913;&#22312;&#19968;&#23450;&#26102;&#38388;&#21518;&#25165;&#29983;&#25928;';
$lng['extras']['directoryprotection_add'] = '&#28155;&#21152;&#30446;&#24405;&#20445;&#25252;';
$lng['extras']['view_directory'] = '&#26174;&#31034;&#35760;&#24405;';
$lng['extras']['pathoptions_add'] = '&#37197;&#32622;&#36335;&#24452;';
$lng['extras']['directory_browsing'] = '&#26174;&#31034;&#35760;&#24405;&#20869;&#23481;';
$lng['extras']['pathoptions_edit'] = '&#36335;&#24452;&#35774;&#32622;&#22788;&#29702;';
$lng['extras']['error404path'] = '404';
$lng['extras']['error403path'] = '403';
$lng['extras']['error500path'] = '500';
$lng['extras']['error401path'] = '401';
$lng['extras']['errordocument404path'] = '&#38169;&#35823;&#25991;&#20214;404&#36335;&#24452;';
$lng['extras']['errordocument403path'] = '&#38169;&#35823;&#25991;&#20214;403&#36335;&#24452;';
$lng['extras']['errordocument500path'] = '&#38169;&#35823;&#25991;&#20214;500&#36335;&#24452;';
$lng['extras']['errordocument401path'] = '&#38169;&#35823;&#25991;&#20214;401&#36335;&#24452;';

/**
 * Errors
 */
$lng['error']['error'] = '&#38169;&#35823;&#25253;&#21578;';
$lng['error']['directorymustexist'] = '&#24744;&#24050;&#32463;&#36755;&#20837;&#30340;&#30446;&#24405;&#24517;&#39035;&#23384;&#22312;&#12290;&#35831;&#29992;&#24744;FTP&#31243;&#24207;&#21019;&#24314;&#23427;';
$lng['error']['filemustexist'] = '&#24744;&#36755;&#20837;&#30340;&#25991;&#20214;&#24517;&#39035;&#23384;&#22312;';
$lng['error']['allresourcesused'] = '&#24744;&#24050;&#32463;&#20351;&#29992;&#20102;&#25152;&#26377;&#30340;&#36164;&#28304;';
$lng['error']['domains_cantdeletemaindomain'] = '&#24744;&#19981;&#33021;&#21024;&#38500;&#24050;&#32463;&#20316;&#20026;&#30005;&#37038;&#22495;&#20351;&#29992;&#36807;&#30340;&#22495;';
$lng['error']['firstdeleteallsubdomains'] = '&#22312;&#24744;&#21019;&#24314;&#19968;&#20010;&#26032;&#30340;&#21407;&#22987;&#22495;&#20043;&#21069;&#65292;&#24517;&#39035;&#20808;&#21024;&#38500;&#25152;&#26377;&#30340;&#23376;&#22495;&#12290;';
$lng['error']['youhavealreadyacatchallforthisdomain'] = '&#24744;&#24050;&#32463;&#20026;&#36825;&#39033;&#22495;&#21517;&#35774;&#32622;&#20102;&#19968;&#20010;&#30005;&#37038;&#25143;&#21475;';
$lng['error']['ftp_cantdeletemainaccount'] = '&#24744;&#19981;&#33021;&#21024;&#38500;&#24744;&#30340;&#20027;&#36134;&#25143;';
$lng['error']['login'] = '&#34987;&#36755;&#20837;&#30340;&#29992;&#25143;&#21517;/&#23494;&#30721;&#38169;&#35823;';
$lng['error']['login_blocked'] = '&#30001;&#20110;&#22810;&#27425;&#38169;&#35823;&#30340;&#23581;&#35797;&#36825;&#20010;&#36134;&#25143;&#23558;&#34987;&#20851;&#38381;&#65281;<br/>&#35831;&#24744;&#22312;'.$settings['login']['deactivatetime'].'&#31186;&#21518;&#37325;&#26032;&#23581;&#35797;&#12290;';
$lng['error']['notallreqfieldsorerrors'] = '&#24744;&#27809;&#26377;&#22635;&#20889;&#25152;&#26377;&#30340;&#25991;&#26412;&#26639;&#25110;&#32773;&#26377;&#19968;&#20010;&#25991;&#26412;&#26639;&#34987;&#38169;&#35823;&#22635;&#20889;';
$lng['error']['oldpasswordnotcorrect'] = '&#26087;&#23494;&#30721;&#19981;&#27491;&#30830;';
$lng['error']['youcantallocatemorethanyouhave'] = '&#24744;&#19981;&#33021;&#20998;&#37197;&#27604;&#24744;&#29616;&#26377;&#30340;&#26356;&#22810;&#30340;&#36164;&#28304;&#12290;';
$lng['error']['youcantdeletechangemainadmin'] = '&#20986;&#20110;&#20445;&#23494;&#21407;&#22240;&#65292;&#24744;&#19981;&#33021;&#21024;&#38500;&#25110;&#32773;&#32534;&#36753;&#20027;&#22495;&#12290;';
 
/**
 * Questions
 */
$lng['question']['question'] = '&#23433;&#20840;&#38382;&#39064;';
$lng['question']['admin_customer_reallydelete'] = '&#24744;&#30495;&#30340;&#24819;&#35201;&#21024;&#38500;&#36825;&#20010;&#23458;&#25143;&#21527;&#65311;<br/>&#27880;&#24847;&#65281;&#25152;&#26377;&#30340;&#25968;&#25454;&#23558;&#19981;&#21487;&#25405;&#22238;&#30340;&#20002;&#22833;&#65281;&#22312;&#25805;&#20316;&#21518;&#24744;&#24517;&#39035;&#36824;&#35201;&#29992;&#25163;&#25226;&#25968;&#25454;&#20174;&#25968;&#25454;&#31995;&#32479;&#20013;&#21024;&#38500;';
$lng['question']['admin_domain_reallydelete'] = '&#24744;&#30495;&#30340;&#24819;&#21024;&#38500;&#22495;&#21527;&#65311;';
$lng['question']['admin_domain_reallydisablesecuritysetting'] = '&#24744;&#30495;&#30340;&#24819;&#20851;&#38381;&#36825;&#20123;&#37325;&#35201;&#30340;&#23433;&#20840;&#35774;&#32622;&#21527;&#65311;';
$lng['question']['admin_admin_reallydelete'] = '&#24744;&#30495;&#30340;&#35201;&#21024;&#38500;&#20027;&#35201;&#31649;&#29702;&#21592;&#65311;&#25152;&#26377;&#30340;&#23458;&#25143;&#21644;&#22495;&#21487;&#37117;&#26159;&#30001;&#23427;&#20998;&#37197;&#30340;&#65281;'; 
$lng['question']['domains_reallydelete'] = '&#24744;&#30495;&#30340;&#24819;&#21024;&#38500;&#22495;&#21527;&#65311;';
$lng['question']['email_reallydelete'] = '&#24744;&#30495;&#30340;&#24819;&#21024;&#38500;&#30005;&#23376;&#37038;&#20214;&#21527;&#65311;';
$lng['question']['email_reallydelete_account'] = '&#24744;&#30495;&#30340;&#24819;&#21024;&#38500;&#30005;&#23376;&#37038;&#20214;&#24080;&#25143;&#21527;&#65311;';
$lng['question']['email_reallydelete_forwarder'] = '&#24744;&#30495;&#30340;&#24819;&#21024;&#38500;&#20195;&#36816;&#20154;&#21527;&#65311;';
$lng['question']['extras_reallydelete'] = '&#24744;&#30495;&#30340;&#24819;&#21024;&#38500;&#30446;&#24405;&#20445;&#25252;&#21527;&#65311;';
$lng['question']['extras_reallydelete_pathoptions'] = '&#24744;&#30495;&#30340;&#24819;&#21024;&#38500;&#36825;&#20010;&#36335;&#24452;&#30340;&#37197;&#32622;&#21527;&#65311;';
$lng['question']['ftp_reallydelete'] = '&#24744;&#30495;&#30340;&#24819;&#21024;FTP&#36134;&#25143;&#21527;&#65311;';
$lng['question']['mysql_reallydelete'] = '&#24744;&#30495;&#30340;&#24819;&#21024;&#38500;&#25968;&#25454;&#24211;&#21527;&#65311;&#27880;&#24847;&#65281;&#25152;&#26377;&#30340;&#25968;&#25454;&#23558;&#19981;&#21487;&#25405;&#22238;&#30340;&#20002;&#22833;&#65281;)';
 
/**
 * Mails
 */
$lng['mails']['pop_success']['mailbody'] = '&#20320;&#22909;&#20197;&#34987;&#25104;&#21151;&#21019;&#24314;&#36825;&#26159;&#19968;&#20010;&#33258;&#21160;&#29983;&#25104;&#30340;&#36825;&#26159;&#19968;&#20010;&#33258;&#21160;&#29983;&#25104;&#30340;&#37038;&#20214;&#65292;&#35831;&#19981;&#29992;&#31572;&#22797;&#36825;&#20010;&#36890;&#30693;&#24744;&#30340;&#26381;&#21153;&#23567;&#32452;';
$lng['mails']['pop_success']['subject'] = 'POP3&#36134;&#25143;&#25104;&#21151;&#34987;&#21019;&#24314;';
$lng['mails']['createcustomer']['mailbody'] = '&#24744;&#22909;{SURNAME} {NAME},\n\n&#36825;&#37324;&#26159;&#24744;&#30340;&#36134;&#25143;&#20449;&#24687;:\n\n&#29992;&#25143;&#21517;: {USERNAME}\n&#23494;&#30721;: {PASSWORD}\n\n&#38750;&#24120;&#24863;&#35874;&#65292;&#24744;&#30340;&#26381;&#21153;&#23567;&#32452;';
$lng['mails']['createcustomer']['subject'] = '&#36134;&#25143;&#20449;&#24687;';
 
/**
 * Admin
 */
$lng['admin']['overview'] = '&#27010;&#35201;';
$lng['admin']['ressourcedetails'] = '&#34987;&#20351;&#29992;&#30340;&#36164;&#28304;';
$lng['admin']['systemdetails'] = '&#31995;&#32479;&#35814;&#24773;';
$lng['admin']['syscpdetails'] = 'SysCP-&#35814;&#24773;';
$lng['admin']['installedversion'] = '&#23433;&#35013;&#29256;&#26412;';
$lng['admin']['latestversion'] = '&#26368;&#26032;&#29256;&#26412;';
$lng['admin']['lookfornewversion']['clickhere'] = '&#36890;&#36807;&#32593;&#32476;&#26381;&#21153;&#35810;&#38382;';
$lng['admin']['lookfornewversion']['error'] = '&#22312;&#25361;&#36873;&#19978;&#20986;&#29616;&#38169;&#35823;';
$lng['admin']['resources'] = '&#36164;&#28304;';
$lng['admin']['customer'] = '&#23458;&#25143;';
$lng['admin']['customers'] = '&#23458;&#25143;&#32676;';
$lng['admin']['customer_add'] = '&#28155;&#21152;&#23458;&#25143;&#32676;';
$lng['admin']['customer_edit'] = '&#32534;&#36753;&#23458;&#25143;&#32676;';
$lng['admin']['domains'] = '&#32452;&#22495;';
$lng['admin']['domain_add'] = '&#28155;&#21152;&#22495;';
$lng['admin']['domain_edit'] = '&#32534;&#36753;&#22495;';
$lng['admin']['admin'] = '&#20027;&#31649;';
$lng['admin']['admins'] = '&#31649;&#29702;';
$lng['admin']['admin_add'] = '&#21152;&#20837;&#26032;&#30340;&#20027;&#31649;';
$lng['admin']['admin_edit'] = '&#23545;&#20027;&#31649;&#36827;&#34892;&#32534;&#36753;';
$lng['admin']['customers_see_all'] = '&#25152;&#26377;&#30340;&#23458;&#25143;&#37117;&#33021;&#30475;&#21040;&#21527;&#65311;';
$lng['admin']['domains_see_all'] = '&#25152;&#26377;&#30340;&#22495;&#37117;&#33021;&#30475;&#21040;&#21527;&#65311;';
$lng['admin']['change_serversettings'] = '&#26381;&#21153;&#35774;&#32622;&#33021;&#34987;&#20462;&#25913;&#21527;&#65311;';
$lng['admin']['server'] = '&#26381;&#21153;&#22120;';
$lng['admin']['serversettings'] = '&#35774;&#32622;';
$lng['admin']['stdsubdomain'] = '&#40664;&#35748;&#23376;&#22495;';
$lng['admin']['stdsubdomain_add'] = '&#28155;&#21152;&#40664;&#35748;&#23376;&#22495;';
$lng['admin']['deactivated'] = '&#34987;&#31105;&#27490;';
$lng['admin']['deactivated_user'] = '&#23553;&#38145;&#29992;&#25143;';
$lng['admin']['sendpassword'] = '&#23492;&#20986;&#23494;&#30721;';
$lng['admin']['configfiles']['serverconfiguration'] = '&#37197;&#32622;';
$lng['admin']['ownvhostsettings'] = '&#33258;&#24049;&#30340;&#20027;&#26426;&#35774;&#32622;(vHost)';
$lng['admin']['configfiles']['files'] = '<b>&#32534;&#36753;&#25968;&#25454;:</b>&#35831;&#24744;&#26356;&#25913;&#25104;&#30456;&#31526;&#30340;&#32534;&#36753;&#25968;&#25454;&#12290;<br>&#22914;&#26524;&#23427;&#20204;&#19981;&#23384;&#22312;&#65292;&#23601;&#35831;&#24744;&#36755;&#20837;&#19979;&#38754;&#30340;&#20869;&#23481;&#12290;<br><b>&#35831;&#24744;&#27880;&#24847;&#65306;</b>&#30001;&#20110;&#20445;&#23494;&#21407;&#22240;,MySQL&#30340;&#23494;&#30721;&#23558;&#19981;&#34987;&#26367;&#25442;&#12290;&#65289;<br>&#35831;&#24744;&#36890;&#36807;&#25163;&#21160;&#30340;&#26041;&#24335;&#26367;&#25442;MySQL&#30340;&#23494;&#30721;&#12290;<br>&#22914;&#26524;&#24744;&#24536;&#35760;&#20102;&#23494;&#30721;&#65292;&#24744;&#21487;&#20197;&#22312;`lib/userdata.inc.php`&#25214;&#21040;&#12290;';
$lng['admin']['configfiles']['commands'] = '<b>&#21629;&#20196;&#65306;</b>&#35831;&#24744;&#22312;&#19968;&#39029;&#20869;&#36755;&#20986;&#20197;&#19979;&#30340;&#21629;&#20196;&#12290;';
$lng['admin']['configfiles']['restart'] = '<b>&#37325;&#26032;&#24320;&#22987;&#65306;</b>&#35831;&#24744;&#36755;&#20986;&#20197;&#19979;&#21629;&#20196;&#20197;&#20415;&#37325;&#26032;&#35013;&#36733;&#12290;&#32534;&#36753;&#25968;&#25454;&#24212;&#19981;&#36229;&#36807;&#19968;&#39029;';
 
/**
 * Serversettings
 */
$lng['serversettings']['session_timeout']['title'] = '&#23545;&#35805;&#36229;&#26102;';
$lng['serversettings']['session_timeout']['description'] = '&#29992;&#25143;&#22810;&#38271;&#26102;&#38388;&#24517;&#39035;&#21576;&#29616;&#20923;&#32467;&#29366;&#24577;&#65292;&#19982;&#27492;&#21516;&#26102;&#23545;&#35805;&#20063;&#21464;&#20026;&#26080;&#25928;';
$lng['serversettings']['accountprefix']['title'] = '&#23458;&#25143;&#21069;&#32512;';
$lng['serversettings']['accountprefix']['description'] = '&#23458;&#25143;&#36134;&#25143;&#24212;&#35813;&#26377;&#21738;&#31181;&#21069;&#32512;&#65311;';
$lng['serversettings']['mysqlprefix']['title'] = 'MySQL-&#21069;&#32512;';
$lng['serversettings']['mysqlprefix']['description'] = 'MySQL &#36134;&#25143;&#24212;&#35813;&#26377;&#21738;&#20123;&#21069;&#32512;&#65311;';
$lng['serversettings']['ftpprefix']['title'] = 'FTP&#21069;&#32512;';
$lng['serversettings']['ftpprefix']['description'] = 'FTP&#36134;&#25143;&#24212;&#35813;&#26377;&#21738;&#20123;&#21069;&#32512;&#65311;';
$lng['serversettings']['documentroot_prefix']['title'] = '&#25991;&#26723;&#30446;&#24405;';
$lng['serversettings']['documentroot_prefix']['description'] = '&#25152;&#26377;&#30340;&#23458;&#25143;&#24212;&#20301;&#20110;&#21738;&#37324;&#65311;';
$lng['serversettings']['logfiles_directory']['title'] = '&#30331;&#38470;&#25991;&#20214;&#30446;&#24405;';
$lng['serversettings']['logfiles_directory']['description'] = '&#25152;&#26377;&#30340;&#30331;&#38470;&#25991;&#20214;&#24212;&#20301;&#20110;&#21738;&#37324;';
$lng['serversettings']['ipaddress']['title'] = 'IP&#22320;&#22336;';
$lng['serversettings']['ipaddress']['description'] = '&#36825;&#20010;&#26381;&#21153;&#22120;IP&#22320;&#22336;&#26159;&#20160;&#20040;?';
$lng['serversettings']['hostname']['title'] = '&#20027;&#26426;&#21517;';
$lng['serversettings']['hostname']['description'] = '&#36825;&#20010;&#26381;&#21153;&#22120;&#30340;&#20027;&#26426;&#21517;&#26159;&#20160;&#20040;?';
$lng['serversettings']['apacheconf_directory']['title'] = '&#38463;&#24085;&#22855;&#37197;&#32622;&#30446;&#24405;';
$lng['serversettings']['apacheconf_directory']['description'] = '(&#38463;&#24085;&#22855;&#37197;&#32622;&#25968;&#25454;&#20301;&#20110;&#21738;&#37324;&#65311;';
$lng['serversettings']['apachereload_command']['title'] = '&#38463;&#24085;&#22855;&#37325;&#26032;&#35835;&#21462;&#21629;&#20196;';
$lng['serversettings']['apachereload_command']['description'] = '&#34987;&#35835;&#21462;&#30340;&#38463;&#24085;&#22855;&#25991;&#31295;&#21483;&#20160;&#20040;&#21517;&#23383;';
$lng['serversettings']['bindconf_directory']['title'] = '&#36830;&#25509;&#37197;&#32622;&#30446;&#24405;';
$lng['serversettings']['bindconf_directory']['description'] = '&#36830;&#25509;&#37197;&#32622;&#25968;&#25454;&#20301;&#20110;&#21738;&#37324;&#65311;';
$lng['serversettings']['bindreload_command']['title'] = '&#36830;&#25509;-&#37325;&#26032;&#35835;&#21462;&#21629;&#20196;';
$lng['serversettings']['bindreload_command']['description'] = '&#36830;&#25509;&#30340;&#37325;&#32622;&#25991;&#26412;&#21483;&#20316;&#20160;&#20040;';
$lng['serversettings']['binddefaultzone']['title'] = '&#36830;&#25509;-&#40664;&#35748;&#21306;&#22495;';
$lng['serversettings']['binddefaultzone']['description'] = '&#25152;&#26377;&#22495;&#30340;&#40664;&#35748;&#21306;&#22495;&#21483;&#20316;&#20160;&#20040;&#65311;';
$lng['serversettings']['vmail_uid']['title'] = '&#37038;&#20214;UID';
$lng['serversettings']['vmail_uid']['description'] = '&#37038;&#20214;&#24212;&#35813;&#26377;&#21738;&#20123;UID';
$lng['serversettings']['vmail_gid']['title'] = '&#37038;&#20214;Gid';
$lng['serversettings']['vmail_gid']['description'] = '&#37038;&#20214;&#24212;&#35813;&#26377;&#21738;&#20123;Gid?';
$lng['serversettings']['vmail_homedir']['title'] = '&#37038;&#20214;&#22320;&#22336;&#30446;&#24405;';
$lng['serversettings']['vmail_homedir']['description'] = '&#37038;&#20214;&#24212;&#35813;&#20301;&#20110;&#21738;&#37324;&#65311;';
$lng['serversettings']['adminmail']['title'] = '&#21457;&#20449;&#20154;&#22320;&#22336;';
$lng['serversettings']['adminmail']['description'] = '&#26469;&#33258;&#35843;&#26597;&#23545;&#35937;&#30340;&#37038;&#20214;&#21457;&#20449;&#20154;&#22320;&#22336;&#26159;&#20160;&#20040;&#65311;';
$lng['serversettings']['phpmyadmin_url']['title'] = 'phpMyAdmin&#22320;&#22336;';
$lng['serversettings']['phpmyadmin_url']['description'] = 'phpMyAdmin&#20301;&#20110;&#21738;&#37324;&#65311;';
$lng['serversettings']['webmail_url']['title'] = '&#32593;&#32476;&#37038;&#20214;&#30340;URL';
$lng['serversettings']['webmail_url']['description'] = '&#32593;&#32476;&#37038;&#20214;&#25918;&#22312;&#21738;&#37324;?';
$lng['serversettings']['webftp_url']['title'] = '&#32593;&#32476;FTP&#30340;URL';
$lng['serversettings']['webftp_url']['description'] = '&#32593;&#32476;FTP&#25918;&#22312;&#21738;&#37324;?';
$lng['serversettings']['language']['description'] = '&#24744;&#30340;&#26631;&#20934;&#35821;&#35328;&#26159;&#20160;&#20040;&#35821;&#65311;';
$lng['serversettings']['maxloginattempts']['title']       = '&#26368;&#22810;&#30331;&#38470;&#27425;&#25968;';
$lng['serversettings']['maxloginattempts']['description'] = '&#26368;&#22810;&#30331;&#38470;&#27425;&#25968;&#30452;&#21040;&#24080;&#25143;&#22833;&#25928;';
$lng['serversettings']['deactivatetime']['title']       = '&#24080;&#25143;&#22833;&#25928;&#26102;&#38388;';
$lng['serversettings']['deactivatetime']['description'] = '&#24080;&#25143;&#22833;&#25928;&#26102;&#38388;&#65288;&#20197;&#31186;&#35745;&#31639;&#65289;';

?>