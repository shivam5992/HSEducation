<?php
include "header.php";
?>

<html>
<head>
<link rel="stylesheet" href="images/Colourise.css" type="text/css" />


<body>
<div id="c-wmain">


<?php
$a=$_POST['ans'];
$b=$_POST['qid'];
include('dbconnection.php');
	
$qry=mysql_query("Insert into answer (q_id,answer,date,status) values ('$b','$a',Now(),1)");
echo "<br><h1>Answer succesfully posted <br>";
echo "<br>";
echo "<a href=index.php>GoBack</a>";
?>

</div>
	

</body>
</html>

            
 <?php
include "footer.php";
?>           