<?php
include "header.php";
?>

<body>
<div id="c-wmain13" align=left >
<br>
<h2 align=center>High School Search Engine</h2>
<br>
<div align=center>
<form action="search.php" >
<input type=text size=50 name=st1><input type=submit value=Search>
</form>
</div>
<?php
include("Crawler.php");
include("dbconnection.php");
$mycrawler=new Crawler();

if(isset($_GET["st1"]))
{
$x = $_GET["st1"];

echo "<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Showing search results for &nbsp;" ,$x , "</h2> <br><br><hr>";
$url="http://www.bing.com/search?q='$x'&go=&qs=n&form=QBLH&filt=all&pq='$x'&sc=0-0&sp=-1&sk=";
$link=$mycrawler->crawlLinks($url);

$sql="select * from crawl where result LIKE '%".$x."%' ";
$result=mysql_query($sql);
$n=@mysql_num_rows($result);
	
	

if($n<=1)
{
//echo "new search";
for($i=0;$i<sizeof($link['link']);$i++)
{
$ln=$link['link'][$i];	
$res=$link['text'][$i];
$des=$link['ptag'][$i];
$qry="insert into search(result,link) values('$res','$ln')";
$result=mysql_query($qry);
}  
$sql="select * from search where result LIKE '%".$x."%' ";
$result=mysql_query($sql);
$i=0;
while($row=mysql_fetch_row($result))
{
?>
<div style="margin-left:40px">
<a href="<?php echo $row[0]; ?>"><?php echo $row[1]; ?> </a><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
 <?php echo $link['ptag'][$i] ?><br><hr>
</div>
<?php

$r=$row[1];
$l=$row[0];
$d=$link['ptag'][$i];
$qry3="insert into crawl(result,link,dis) values('$r','$l','$d')";
$result3=mysql_query($qry3);
$i++;
if($i == 15)
{
break;
}
}
$qry4="truncate search ";
$result=mysql_query($qry4);
}
else
{
$sql="select * from crawl where result LIKE '%".$x."%' ";
$result=mysql_query($sql);
$i=0;
//echo "crawled search";
while($row=mysql_fetch_row($result))
{
?>
<div style="margin-left:40px">
<a href="<?php echo $row[1]; ?>"><?php echo $row[0]; ?> </a><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
 <?php echo $link['ptag'][$i] ?><br><hr>
</div>
<?php
$i++;
if($i == 15)
{
break;
}
}
}

}
?>

</div>
	

</body>


            
 <?php
include "footer.php";
?>           
            