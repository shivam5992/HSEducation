<?php
include "header.php";
?>

<body>
<div id="c-wmain">
<br>
<br><?php
	
	include('dbconnection.php');
	
	$a=$_POST['ques'];
	$b=$_POST['dept'];
	
	$qry2=mysql_query("SELECT dept_id FROM dept where department='$b' and status='1'");
	$c = mysql_fetch_row($qry2);
	
	$qry=mysql_query("INSERT INTO question (question,dept_id,date ) VALUES ('$a','$c[0]',Now())");
	if(!$qry)
	{
		echo "not";
		
	}
	else
	{
		echo "<h1> You have successfully posted the question thanks !";
	}
?>
<br><br>
<a href=main_forum.php>View Forum And Go Back</a>
</div>
	

</body>
</html>

            
 <?php
include "footer.php";
?>           
      