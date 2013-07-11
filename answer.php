<?php
include "header.php";
?>

<link rel="stylesheet" href="col.css" type="text/css" />
<script type="text/javascript">
function fun1()
{
	<?php 
	
	$a=$_POST['ans'];
	include('dbconnection.php');
	
	$qry=mysql_query("Insert into answer (q_id,answer,date,status) values ('$row2[0]','$a',Now(),1)");
	?>
}
</script>
</head>



<body>
<div id="c-wmain">
<br>
<br>
Answer the questions <br>
<?php
$i=0;
include('dbconnection.php');
$id=$_GET['dept'];
$qry1=mysql_query("SELECT * FROM question  where dept_id='$id' and status='1'");
while($row = mysql_fetch_array($qry1))
{
	$i=$i+1;
	?>
    <a class="ques" href='javascript:void(0)' onclick="document.getElementById('<?php echo $i; ?>').style.display='block'"  ondblclick="document.getElementById('<?php echo $i; ?>').style.display='none'">
    Q 
    
	<?php echo $i; echo "&nbsp;&nbsp;"; echo $row[1]; ?><br /> </a>
    <div id="<?php echo $i; ?>"  style="display:none;" class="ques">
      <p>
      <form action="ans.php" method="post">
       <textarea style="height:100;width:300;" id="ans" name="ans"></textarea>
       <input type="hidden" name="qid" value="<?php echo $row[0]; ?>"/>
      </p>
      <p>
      
       <input type="submit" value="ok" />
      </p> 
      </form>
    </div>
    <br>
	<?php

}
?>
</div>
	

</body>
</html>

            
 <?php
include "footer.php";
?>           
      