<?php 
include "header.php";
?>

<body>
<div id="c-wmain">
<br><br>
<h2> 
<?php 
if(isset($_SESSION["u"]))
{
echo "Welcome Mr ",$_SESSION['u'];
}
?> 
</h2>
<br><br>

<h1 >Welcome To Administrator Page</h1><br><br>
<h2 >1 . Upload options for downloads</h2>

<form action="upload.php" enctype="multipart/form-data" method="post">
<h3>Category  :<select name="cat">
         <option>Ebooks</option>
         <option>Papers</option>
         <option>StudyMaterial</option>
  </select></h3><p><div align=center>
<table><tr><td>
File :<td><input type=file name="myfile" ></tr>
<td>Image :<td><input type=file name="imgfile"></tr>
<tr><td>
<input type=submit value="submit" id=butn>
</tr></table></div></form>
<br><br><br><br>

<h2 >2 .Upload options for books to buy</h2>
<form action="uploadbuy.php" enctype="multipart/form-data" method="POST">
<h3>Category: <select name="cat">
        <option>CSE</option>
<option>IT</option>
<option>BIO</option>
<option>MATHS</option>
<option>ECE</option>
<option>PHYSICS</option>
 </select></h3><p><div align=center>
<table><tr><td>
File :<td><input type=file name="myfile"></tr>
<tr><td>Image Of File :<td><input  type=file name="imgfile"></tr>
<td>Image of Author :<td><input type=file name="authfile"></tr>
<tr><td><input id=butn type=submit value="submit"></tr>
</table></div></form>
<br><br><br>

<h2>3. <a href=registered.php>View</a> Registered Users </h2><br><br>
<h2>4. <a href=delete.php>Delete</a> Registered Users </h2><br><br>
<h2>5. <a href=modify.php>Modify</a> Registered Users </h2><br><br>

</div>
</body>
<?php include "footer.php";
?>