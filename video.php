<?php
include "header.php";
?>

<body>
<div id="c-wmain13" align=left >
<br>
<h2 align=center>High School Search Engine</h2>
<br>
<div align=center>
<form action="video.php" >
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
$url="http://www.youtube.com/results?search_query='$x'&oq='$x'&gs_l=youtube.3..0l10.6593.9157.0.10528.7.5.0.2.2.0.252.1110.2-5.5.0...0.0...1ac.1.WqSTXTmwUJY";
$link=$mycrawler->crawlLinks($url);
$sql="select * from crawl where result LIKE '%".$x."%' ";
$result=mysql_query($sql);
$n=@mysql_num_rows($result);
if($n<=1)
{
for($i=0;$i<sizeof($link['link']);$i++)
{
$ln=$link['link'][$i];	
$res=$link['text'][$i];
$qry="insert into search(result,link) values('$res','$ln')";
$result=mysql_query($qry);
}  
$sql="select * from search where result LIKE '%".$x."%' ";
$result=mysql_query($sql);
$c=0;
while($row=mysql_fetch_row($result))
{
if (stripos($row[0], "v=") !== false)
{
$y=explode("v=",$row[0]);
$str1 =$y[1];
$y=explode("&",$str1);
$z =$y[0];
?>
<div style="float:left;width:345;height:275;padding:1px">
<iframe width="340" height="260" 
src="http://www.youtube.com/embed/<?php echo $z; ?>?feature=player_detailpage" 
frameborder="0" allowfullscreen></iframe><br>
<a href="<?php echo $row[0]; ?>"><?php echo $row[1]; ?> </a><br>
</div> 
<?php
$r=$row[1];
$l=$row[0];
$d=0;
$qry3="insert into crawl(result,link,dis) values('$r','$l','$d')";
$result3=mysql_query($qry3);
$c++;
if($c==12)
{
break;
}
}
}
$tru="truncate search";
$result=mysql_query($tru);
}
else
{
$sql="select * from crawl where result LIKE '%".$x."%' ";
$result=mysql_query($sql);
$i=0;
while($row=mysql_fetch_row($result))
{
if (stripos($row[1], "v=") !== false)
{
$y=explode("v=",$row[1]);
$str1 =$y[1];
$y=explode("&",$str1);
$z =$y[0];
?>
<div style="float:left;width:345;height:275;padding:1px">
<iframe width="340" height="260" 
src="http://www.youtube.com/embed/<?php echo $z; ?>?feature=player_detailpage" 
frameborder="0" allowfullscreen></iframe><br>
<a href="<?php echo $row[0]; ?>"><?php echo $row[1]; ?> </a><br>
</div> 
<?php
$c++;
if($c==12)
{
break;
}
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





