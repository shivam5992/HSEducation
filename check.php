<?php
include('dbconnection.php');
 

if(isset($_POST['username'])) 
{
$username = mysql_real_escape_string($_POST['username']);
$checke = mysql_query("SELECT r_id FROM secure WHERE username='$username'");
if(mysql_num_rows($checke))
{
echo '1';
}
else
{
echo '0';
}

}

?>