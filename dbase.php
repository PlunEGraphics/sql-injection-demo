<?php

/**
 * Connect to the mysql database.
 */
$con = mysql_connect('localhost', "root", "") or die(mysql_error());
mysql_select_db('user') or die(mysql_error());

?>