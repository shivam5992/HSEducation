<link rel="stylesheet" type="text/css" href="css/table.css" />	
<link rel="stylesheet" type="text/css" href="js/css/demo3.css" />
<link rel="stylesheet" type="text/css" href="js/css/style.css" />   
<link href='http://fonts.googleapis.com/css?family=Alegreya+SC:700,400italic' rel='stylesheet' type='text/css' />

<div class="containernews">
<ul class="mh-menu">

<li class='a10' >
<?php
include("dbconnection.php"); 
$myquery="select * from news where news_id=1 ";
$result=mysql_query($myquery);
$row=mysql_fetch_row($result);
?>
<table><tr><td>
<img src="News/<?php echo $row[2]; ?>" width=100 height=75 /><td>
<a href="#">
<font color=#08BCFE face="Lucida Console" size=2>
<br><?php echo $row[3]; ?>
</font>
<br>
<font color=#EEEDF2 face="Lucida Console" size=2><?php echo $row[1]; ?></font>
</a></tr></table><img id=gher src="js/images/15.jpg" alt="image01" width=150 height=350/>
</li>
				

<li class=a20 >
<?php
 include("dbconnection.php"); 
$myquery="select * from news where news_id=2 ";
$result=mysql_query($myquery);
$row=mysql_fetch_row($result);?>
<table><tr><td>
<img src="News/<?php echo $row[2]; ?> " width=100 height=75 /><td>
<a href="#">
<font color=#08BCFE face="Lucida Console" size=2>
<br><?php echo $row[3]; ?>
</font><br>
<font color=#EEEDF2 face="Lucida Console" size=2><?php echo $row[1]; ?></font>
</a></tr></table><img id=gher src="js/images/14.jpg" alt="image01" width=150 height=350/>
</li>

<li class=a10 >
<?php
include("dbconnection.php"); 
$myquery="select * from news where news_id=3 ";
$result=mysql_query($myquery);
$row=mysql_fetch_row($result);?>
<table><tr><td>
<img src="News/<?php echo $row[2]; ?> " width=100 height=75 /><td>
<a href="#">
<font color=#08BCFE face="Lucida Console" size=2>
<br><?php echo $row[3]; ?>
</font><br>
<font color=#EEEDF2 face="Lucida Console" size=2><?php echo $row[1]; ?></font>
</a></tr></table><img id=gher src="js/images/13.jpg" alt="image01" width=150 height=350 />
</li>

<li class=a20 >
<?php
include("dbconnection.php"); 
$myquery="select * from news where news_id=4 ";
$result=mysql_query($myquery);
$row=mysql_fetch_row($result);?>
<table><tr><td>
<img src="News/<?php echo $row[2]; ?> " width=100 height=75 /><td>
<a href="#">
<font color=#08BCFE face="Lucida Console" size=2>
<br><?php echo $row[3]; ?>
</font><br>
<font color=#EEEDF2 face="Lucida Console" size=2><?php echo $row[1]; ?></font>
</a></tr></table><img id=gher src="js/images/12.jpg" alt="image01" width=150 height=350/>
</li>

</ul>
</div>
