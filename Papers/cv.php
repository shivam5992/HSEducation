<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>


<script type="text/javascript" src="slide/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="slide/jquery-mousewheel/jquery.mousewheel.min.js"></script>
<link rel="stylesheet" type="text/css" href="slide/slidedeck.skin.css" media="screen" />
<script type="text/javascript" src="slide/slidedeck.jquery.lite.js"></script>
        
        <style type="text/css">
            #slidedeck_frame {
                width:730px;
                height: 250px;
            }      


#faq
{
	height:250;
	width:500;
	background-image:url(images/mfwLDKg.jpg);
	text-align:left;
	padding-left:10;
	
}
#question
{
	padding:10;
	
	color:#000;
	font-family:Verdana, Geneva, sans-serif;
	font-size:16px;
}

#recent
{
	
	background-image:url(images/thick-old-paper.jpg);
	height:250;
	width:500;
	
}
.java
{
	width:81;
	height:110;
	text-align:center;
	margin-left:30px;
	margin-top:10px;
	float:left;
	margin-bottom:-10px;
}
.ret
{
	text-align:center;
	font-family:Calibri;
	font-size:24px;
	width:500;
	height:30;margin-bottom:-10px;
	
}  
.news
{
background-image:url(images/bsa.jpg);
width:500px;
height:250px;
}
.papers1
{
background-image:url(images/bsa.jpg);
width:500px;
height:250px;
}
.social
{
background-image:url(images/bsb.jpg);
width:500px;
height:250px;
}
.tb1
{
margin-top:10;
padding:10;

}
.tb2
{
margin-top:-2;
padding:2px;

}
.tb3
{

padding:10px;
}






.social a
 {
color:black;
background-position: 50% 50%;
background-repeat: no-repeat;
background-origin: border-box;
display: inline-block; 
width: 60px;
 height: 60px;
border-width: 30px;
border-color: rgba(0,0,0,0);
border-radius: 100%;
-moz-border-radius: 100%;
-webkit-border-radius: 100%;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
-webkit-transition: 0.5s ease;
-moz-transition: 0.5s ease;
-ms-transition: 0.5s ease;
-o-transition: 0.5s ease;
transition: 0.5s ease;
}

.social a:hover 
{
border-width: 0;
border-color: rgba(0, 0, 0, 0.5);
}

.two
{
border-style: dashed;
}





        </style>
	</head>
	<body>
	<div class=brd>
		<div id="slidedeck_frame" class="skin-slidedeck">
			<dl class="slidedeck">
				

<dt>Most Purchased Books</dt>

<dd>
<div class=news>
<h2 align=center>Most Purchased Books</h2>
<marquee behavior="alternate">
<table class=tb1>
<tr >

 <?php
include("dbconnection.php");
for($i=1;$i<=12;$i++)
{
$myquery="select * from books where book_id='$i'";
$result=mysql_query($myquery);
$row=mysql_fetch_row($result) ;
$myquery1="select price from shop where book_id='$i'";
$result1=mysql_query($myquery1);
$row1=mysql_fetch_row($result1) ;
?>	
<td><img class=tb3 src=images/<?php echo $row[5] ;?> width=90 height=90></td>
<?php
}
?>
</tr><tr align=center class=tb3>
 <?php
for($i=1;$i<=12;$i++)
{
$myquery="select * from books where book_id='$i'";
$result=mysql_query($myquery);
$row=mysql_fetch_row($result) ;
?>	

<td><?php echo $row[1] ;?> <br><?php echo $row1[2] ;?></td>
<?php
}
?>
</tr>
</table>
</marquee>
</div>
</dd>
				


<dt>Downloads</dt>

<dd>
<div id="recent">
    <div class="ret">
    DOWNLOADS
    </div>
      <div class="java">
      <?php
include("dbconnection.php");
$myquery="select * from downloads where d_id=1";
$result=mysql_query($myquery);
$row=mysql_fetch_row($result) ;
print "<img src=$row[2]$row[4] width=88 height=114>"; 

?>	
</div>	
      <div class="java">
      	<?php
include("dbconnection.php");
$myquery="select * from downloads where d_id=2";
$result=mysql_query($myquery);
$row=mysql_fetch_row($result) ;
print "<img src=$row[2]$row[4] width=88 height=114>"; 

?>	
      </div>
      <div class="java">
        <?php
include("dbconnection.php");
$myquery="select * from downloads where d_id=3";
$result=mysql_query($myquery);
$row=mysql_fetch_row($result) ;
print "<img src=$row[2]$row[4] width=88 height=114>"; 

?>	    
      </div>
  <div class="java" >
        <?php
include("dbconnection.php");
$myquery="select * from downloads where d_id=4";
$result=mysql_query($myquery);
$row=mysql_fetch_row($result) ;
print "<img src=$row[2]$row[4] width=88 height=114>"; 

?>	
      </div>
	<br><br><br><br><br><br><br><br><br><br> <div class="ret">
  <a href="art.php">ViewMore</a></div>
</div>
</dd>

				<dt>FAQs</dt>
				<dd><div id="faq">
    
   <div class="ret">
    Frequently Asked Questions
    </div> 		
  <label id="question"><br>
    <?php
	include("dbconnection.php");
	$myquery="select * from faq ";
	$result=mysql_query($myquery);
	while($row=mysql_fetch_row($result))
		
	{
		echo "<br>";
		echo "<font color='#000000'>Q &nbsp;&nbsp;</font>";
		echo $row[1];
		echo "<br>";
		echo "<font color='#336600'>Ans&nbsp;&nbsp;";
		echo $row[2];
		echo "</font>";
		echo "<br>";
		
	}
	?>
    
            </label>
	</div>
    </dd>
				<dt>Previous Year Papers</dt>
				<dd>

<div class="papers1">



    <div class="ret">
    Previos Year Papers
    </div>
      <div class="java">
      	<img src="images/p1.jpg" width="81" height="110"><b>OOPS</b><br>T1 2010   
  </div>	
<div class="java">
      	<img src="images/p2.gif" width="81" height="110"><b>DBMS  </b>  <br>T2 2011   
  </div>	
<div class="java">
      	<img src="images/p3.png" width="81" height="110"><b>PHP </b> <br>T3 2010   
  </div>	
<div class="java">
      	<img src="images/p4.jpg" width="81" height="110"><b>C++ </b> <br>T2 2012   
  </div>	
</div>

</dd>
				
<dt>Find Us On Web</dt>

<dd>
<div class=social>

<h2 align=center>Link With Us On Internet</h2>


<table class=tb2>
<tr><td>
<table class=tb2>

<tr>

<td ><a  href="http://www.facebook.com" class="two"><img src=images/f1.png width=50 height=50 title=facebook></a></td>
<td><a  href="http://www.facebook.com" class="two"><img src=images/f2.png width=50 height=50 title=twitter></a></td>
<td><a  href="http://www.facebook.com" class="two"><img src=images/f3.jpg width=50 height=50 title=youtube></a></td>
<td><a  href="http://www.facebook.com" class="two"><img src=images/f4.png width=50 height=50 title=rss></a></td>
<td><a  href="http://www.facebook.com" class="two"><img src=images/f5.png width=50 height=50 title=Pinntrest></a></td>
<td><a  href="http://www.facebook.com" class="two"><img src=images/f11.png width=50 height=50 title=rss></a></td>
<td><a  href="http://www.facebook.com" class="two"><img src=images/f12.png width=50 height=50 title=Pinntrest></a></td>
</tr>
<tr>

<td ><a  href="http://www.facebook.com" class="two"><img src=images/f6.png width=50 height=50 title=facebook></a></td>
<td><a  href="http://www.facebook.com" class="two"><img src=images/f7.png width=50 height=50 title=twitter></a></td>
<td><a  href="http://www.facebook.com" class="two"><img src=images/f8.png width=50 height=50 title=youtube></a></td>
<td><a  href="http://www.facebook.com" class="two"><img src=images/f9.png width=50 height=50 title=rss></a></td>
<td><a  href="http://www.facebook.com" class="two"><img src=images/f10.png width=50 height=50 title=Pinntrest></a></td>
<td><a  href="http://www.facebook.com" class="two"><img src=images/f13.png width=50 height=50 title=rss></a></td>
<td><a  href="http://www.facebook.com" class="two"><img src=images/f14.png width=50 height=50 title=Pinntrest></a></td>

</tr>

</table>
</td>
<td>
</td>
<tr>
<td></td>

</table>

</div>




</dd>




			</dl>
		</div>
</div>


		<script type="text/javascript">
			$('.slidedeck').slidedeck();
		</script>
	    
	</body>
</html>