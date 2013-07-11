<?php
include "header.php";
?>

<body>
<div id="c-wmain11">
<br>
<h2>View Books By Category</h2>
<br>
<form action=books.php>
Select the category of books you want to Search : <br>
<select name="cat">
<option>cse</option>
<option>ece</option>
<option>physics</option>
<option>bio</option>
<option>maths</option>
</select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type=submit value=submit>
</form>

<br><br><br><br><br>
<?php
if(isset($_GET["cat"]))
{
$cat = $_GET["cat"];

if($cat === "cse")
{
include("Crawler.php");
$mycrawler=new Crawler();
$url='http://www.tmhshop.com/computer-science-engineering';
$image=$mycrawler->crawlImage($url);
$x="computer-science-engineering";
$sql="select * from tmh where link LIKE '%".$x."%' ";
$result=mysql_query($sql);
$n=@mysql_num_rows($result);
if($n<=1)
{
$x=0;
echo "new search";
for($i=420;$i<440;$i++)
{
$ln=$image['src'][$i];	
$res=$image['link'][$i];
$qry="insert into tmh(img,link) values('$ln','$res')";
$result=mysql_query($qry);
echo "<div  style='float:left;margin-left:125px;'><img src=\"".$image['src'][$i]."\"/><br><a href=\"".$image['link'][$i]."\">Go to link.</a></div>";		
$x++;	
if($x === 4)
{
echo "<br><br><br><br><br><br><br><br><br><br>";
$x=0;
}
}  
}
else
{
echo "crawled";
while($row=mysql_fetch_row($result))
{
echo "<div  style='float:left;margin-left:125px;'><img src=",$row[1],"><br><a href=" ,$row[2]," >Go to link.</a></div>";		
}
}
}

if($cat === "maths")
{
include("Crawler.php");
$mycrawler=new Crawler();
$url='http://www.tmhshop.com/mathematics';
$image=$mycrawler->crawlImage($url);
$x=0;
for($i=374;$i<384;$i++)
{
echo "<div  style='float:left;margin-left:125px;'><img src=\"".$image['src'][$i]."\"/><br><a href=\"".$image['link'][$i]."\">Go to link.</a></div>";		
$x++;	
if($x === 4)
{
echo "<br><br><br><br><br><br><br><br><br><br>";
$x=0;
}
}  
}

if($cat === "ece")
{
include("Crawler.php");
$mycrawler=new Crawler();
$url='http://www.tmhshop.com/electronics-engineering';
$image=$mycrawler->crawlImage($url);
$x=0;
for($i=373;$i<392;$i++)
{
echo "<div  style='float:left;margin-left:125px;'><img src=\"".$image['src'][$i]."\"/><br><a href=\"".$image['link'][$i]."\">Go to link.</a></div>";		
$x++;	
if($x === 4)
{
echo "<br><br><br><br><br><br><br><br><br><br>";
$x=0;
}
}  
}


if($cat === "bio")
{
include("Crawler.php");
$mycrawler=new Crawler();
$url='http://www.tmhshop.com/biological-sciences';
$image=$mycrawler->crawlImage($url);
$x=0;
for($i=375;$i<381;$i++)
{
echo "<div  style='float:left;margin-left:125px;'><img src=\"".$image['src'][$i]."\"/><br><a href=\"".$image['link'][$i]."\">Go to link.</a></div>";		
$x++;	
if($x === 4)
{
echo "<br><br><br><br><br><br><br><br><br><br>";
$x=0;
}
}  
}


if($cat === "physics")
{
include("Crawler.php");
$mycrawler=new Crawler();
$url='http://www.tmhshop.com/physics';
$image=$mycrawler->crawlImage($url);
$x=0;
for($i=373;$i<383;$i++)
{
echo "<div  style='float:left;margin-left:125px;'><img src=\"".$image['src'][$i]."\"/><br><a href=\"".$image['link'][$i]."\">Go to link.</a></div>";		
$x++;	
if($x === 4)
{
echo "<br><br><br><br><br><br><br><br><br><br>";
$x=0;
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
            