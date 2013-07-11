<?php
$dbc=@mysql_connect('localhost','root','shivam')OR die('could not connect'. mysql_error());
mysql_select_db('high_school')OR die('could not select database'.mysql_error());
?>