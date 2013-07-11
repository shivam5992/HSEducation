<?php 
include "header.php";
?>

<body>
<div id="c-wmain">
<br>
<h2>
<?php 
if(isset($_SESSION["u"]))
{
echo "Welcome Mr ",$_SESSION['u'];
echo "<br>";
echo $_SESSION['w'];
}
include("dbconnection.php");
$z=$_SESSION['u'];
$myquery="select r_id from register where username='$z' ";
$result=mysql_query($myquery);
$row=mysql_fetch_row($result) ;
$myquery1="select dept_id from teacher where r_id='$row[0]' ";
$result1=mysql_query($myquery1);
$row1=mysql_fetch_row($result1) ;
?>
</h2>
<br>
<h2>Your Privileges and Rights</h2> <br><br><br>
<font size=4>
1.
<a href="answer.php?dept=<?php echo $row1[0]; ?>">Answer Questions.</a> <br><br>
2.
<a href="main_forum.php">View Forum</a> <br><br>
3.
<a href="search.php">SearchEngine</a> <br><br>
4.
<a href="webSearch.php">Search Books</a> <br><br>
5.
<a href="news.php">View News</a> <br><br>
6.
<a href="buy.php">Buy Books</a> <br><br>
7.
<a href="webSearch.php">Search Google</a> <br><br>
8.
<a href="books.php">View Books By Categories</a> <br><br>
9.
<a href="download.php">Download Files</a><br><br></font>

</div>
</body>

<?php
include "footer.php";
?>           
            