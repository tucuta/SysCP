<?php
/**
 * filename: $Source$
 * begin: Friday, Aug 06, 2004
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version. This program is distributed in the
 * hope that it will be useful, but WITHOUT ANY WARRANTY; without even the
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * @author Florian Lippert <flo@redenswert.de>
 * @copyright (C) 2003-2004 Florian Lippert
 * @package System
 * @version $Id$
 */

	if(@php_sapi_name() != 'cli' && @php_sapi_name() != 'cgi' && @php_sapi_name() != 'cgi-fcgi')
	{
		die('This script will only work in the shell.');
	}
	
	$cronscriptDebug = false;
	$lockdir        = '/var/run/';
	$lockFilename   = 'syscp_cron.lock-';
	$lockfName      = $lockFilename.time();
	$lockfile		= $lockdir.$lockfName;
	
	// guess the syscp installation path
	// normally you should not need to modify this script anymore, if your
	// syscp installation isn't in /var/www/syscp 
	$pathtophpfiles = $_SERVER['PWD'].'/'.$_SERVER['PHP_SELF'];
	$pathtophpfiles = str_replace('/./', '/', $pathtophpfiles );
	$pathtophpfiles = dirname(dirname( $pathtophpfiles ));

	// should the syscp installation guessing not work correctly,
	// uncomment the following line, and put your path in there!
	//$pathtophpfiles = '/var/www/syscp';	
	
	$filename       = 'cronscript.php';
	
//	touch($lockfile);
	// create and open the lockfile!
	$debugHandler = fopen( $lockfile, 'w' ); 
	fwrite( $debugHandler, 'Setting Lockfile to '.$lockfile );
	fwrite( $debugHandler, 'Setting SysCP installation path to '.$pathtophpfiles);
	
	// open the lockfile directory and scan for existing lockfiles
	$lockDirHandle  = opendir($lockdir);
	while ($fName = readdir($lockDirHandle))
	{
		if ( $lockFilename == substr($fName, 0, strlen($lockFilename)) && $lockfName != $fName )
		{
			// close the current lockfile
			fclose( $debugHandler );
			// ... and delete it 
			unlink($lockfile);		
			die('There is already a lockfile. Exiting...' . "\n" . 
			    'Take a look into the contents of ' . $lockdir . $lockFilename . 
			    '* for more information!' );
		}
	}
	
	/**
	 * Includes the Usersettings eg. MySQL-Username/Passwort etc.
	 */
	require("$pathtophpfiles/lib/userdata.inc.php");
	fwrite( $debugHandler, 'Userdatas included');

	/**
	 * Includes the MySQL-Tabledefinitions etc.
	 */
	require("$pathtophpfiles/lib/tables.inc.php");
	fwrite( $debugHandler, 'Table definitions included' );

	/**
	 * Includes the MySQL-Connection-Class
	 */
	require("$pathtophpfiles/lib/class_mysqldb.php");
	fwrite( $debugHandler, 'Database Class has been loaded');
	$db      = new db($sql['host'],$sql['user'],$sql['password'],$sql['db']);
	$db_root = new db($sql['host'],$sql['root_user'],$sql['root_password'],'');
	if($db->link_id == 0 || $db_root->link_id == 0)
	{
		/**
		 * Do not proceed further if no database connection could be established (either normal or root)
		 */
		fclose( $debugHandler );
		unlink($lockfile);
		die('Cant connect to mysqlserver. Please check userdata.inc.php! Exiting...');
	}
	fwrite( $debugHandler, 'Database Connection established' );
	
	unset( $sql               );
	unset( $db->password      );
	unset( $db_root->password );

	$result=$db->query("SELECT `settingid`, `settinggroup`, `varname`, `value` FROM `".TABLE_PANEL_SETTINGS."`");
	while($row=$db->fetch_array($result))
	{
		$settings["$row[settinggroup]"]["$row[varname]"]=$row['value'];
	}
	unset($row);
	unset($result);
	fwrite( $debugHandler, 'SysCP Settings has been loaded from the datbase');
	
	
	if(!isset($settings['panel']['version']) || $settings['panel']['version'] != $version)
	{
		/**
		 * Do not proceed further if the Database version is not the same as the script version
		 */
		fclose( $debugHandler );
		unlink($lockfile);
		die('Version of File doesnt match Version of Database. Exiting...');
	}
	fwrite( $debugHandler, 'SysCP Version and Database Version are correct');
	
	/**
	 * Includes the Functions
	 */
	require("$pathtophpfiles/lib/functions.php");
	fwrite( $debugHandler, 'Functions has been included' );

	/**
	 * Backend Wrapper
	 */
	$query = 
		'SELECT * ' .
		'FROM `'.TABLE_PANEL_CRONSCRIPT.'` ';
	$cronFileIncludeResult = $db->query($query);
	while ($cronFileIncludeRow = $db->fetch_array($cronFileIncludeResult))
	{
		fwrite( $debugHandler, 'Processing ...'.$pathtophpfiles.'/scripts/'.$cronFileIncludeRow['file']);
		include_once $pathtophpfiles.'/scripts/'.$cronFileIncludeRow['file'];
		fwrite( $debugHandler, 'Processing done!');
	}

	fclose( $debugHandler );
	unlink($lockfile);

	$db->query(
		'UPDATE `'.TABLE_PANEL_SETTINGS.'` ' .
		'SET `value` = UNIX_TIMESTAMP() ' .
		'WHERE `settinggroup` = \'system\', ' .
		'  AND `varname`      = \'lastcronrun\' '
		);

	$db->close();
?>
