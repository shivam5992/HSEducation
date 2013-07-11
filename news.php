<?php
include "header.php";
?>

<body>
<div id="c-wmain12">
<br><br>
<h2 align=center> Latest News</h2><br>
<div class=tb1>
<table border=2 solid black width=900px>
<tr>
<td align=center><b>News Headline<b></tr>
<form action='news.php'>
Select News Source : <br>
<select name=cat>
<option>NewYorkTimes</option>
<option>TimesOfIndia</option>
</select><br>
<input type=submit>
</form>

<?php
include("Crawler.php");
$mycrawler=new Crawler();
if(isset($_GET["cat"]))
{
$cat = $_GET["cat"];
if($cat == "NewYorkTimes")
{
$url='http://www.nytimes.com/pages/education/index.html';
}
else
{
$url='http://timesofindia.indiatimes.com/home/education/articlelist/913168846.cms';
}
$link=$mycrawler->crawlLinks($url);
$x=1;
for($i=50;$i<70;$i++)
{
?>
<tr>
<td>
<?php
echo "<div ><a class=tb2 href=\"".$link['link'][$i]."\">".$link['text'][$i]."</a></div>";
?>
</tr>
<tr>
<td><?php echo $link['ptag'][$i-45]; ?>
</tr>
<?php
$x++;			
}
}
?>
</table>
</div>
</div>
</body>
<?php
include "footer.php";
?>           
            