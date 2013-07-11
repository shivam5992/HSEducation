<?php
include "header.php";
?>

<script type="text/javascript">
function fun1()
{
	var t=document.getElementById('dept').value;
	if(t=="--Select--")
	{
	document.getElementById('p1').style.display='none';
	}
	else
	{
		document.getElementById('p1').style.display='block';
	}
}</script>

</head>


<body>
<div id="c-wmain">
<br>
<h2>Askgt</h2>
<br>
	<form action="ask.php" method="post">
	
    <p>Select the department</p>
   <?php
                include('dbconnection.php');
                $qry = mysql_query("SELECT department FROM dept");
               	echo "<select id='dept' name='dept' style='width:215' onchange='fun1()' >";
                echo "<option value=''>--Select--</option>";
				while(($row=mysql_fetch_row($qry))!=NULL)
                {
                echo "<option value='$row[0]'>$row[0]</option>";
                }
                echo "</select>";
                ?>
                <div id="p1" style="display:none;">Enter the Question<br>
    <textarea name="ques" rows=10 cols=35></textarea></div>
    <input type="submit" value="Ask">
    </form>
</div>
	

</body>
</html>

            
 <?php
include "footer.php";
?>           
            
