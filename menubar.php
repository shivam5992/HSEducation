<script type="text/javascript" src="js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="css/menubar.css" />

<script type="text/javascript" >
$(document).ready(function()
{
$('#search').focus(function() {
$(this).animate({width:'+=60px'},300);
});
$('#search').blur(function() {
if(!$(this).val()) {
$(this).animate({width:'-=60px'},300);
}
});
});
</script>

<div class=menubarss>
<ul class="menu">
<?php
include("dbconnection.php");
for($i=1;$i<=13;$i++)
{
$myquery="select * from menubar where mid='$i'";
$result=mysql_query($myquery);
$row=mysql_fetch_row($result) ;
?>
<li><a href="<?php echo $row[3]; ?>" onmouseover="show<?php echo $i ; ?> ()"><?php echo $row[1]; ?></a></li>
<?php 
}
?>
</li>
</ul>
</div>

