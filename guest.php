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
echo "Welcome Mr ",$_SESSION['u'],"";
echo "<br>";
echo $_SESSION['w'];
}
?>
</h2>
<br>
<h2>Your Privileges and Rights</h2><br> <br>

<font size=4>
1.<a href="ask1.php">Ask Questions.</a> <br><br>
</h1>

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
            