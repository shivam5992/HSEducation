<?php
include "header.php";
?>

<html>
<head>
<link rel="stylesheet" href="images/Colourise.css" type="text/css" />

<style type="text/css">
.btn
{
	-webkit-border-radius:3px;
	background-color:#333;
	border: 1px solid rgb(178, 178, 178);
	
	font-family:Calibri;
	font-size:18px;
		
	padding:10px;
	margin-left:0px;
	color:#FFF;
	text-shadow:#999;
	text-outline:#096;
	
}
</style>
<script type="text/javascript">

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.open("GET","xml/maths.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML; 
x=xmlDoc.getElementsByTagName("topic");


function displayCDInfo(i)
{
artist=(x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue);
title=(x[i].getElementsByTagName("description")[0].childNodes[0].nodeValue);
year=(x[i].getElementsByTagName("bookname")[0].childNodes[0].nodeValue);
country=(x[i].getElementsByTagName("bookimage")[0].childNodes[0].nodeValue);


txt="<table width=1000 height=250><tr align=center><td><font color='#000000' face='Calibri' style='margin-left:10px' size='+2'>"+artist+"</font><td><p style='margin-left=20px;'><br><font color='#666666' face='Calibri' style='margin-left:40px' size='+2'>"+title+"</font></p></tr><tr align=center><td><font size='+2' color='#000000' face='Calibri' >Recommended Text-Book: </font><td><img src='"+country+"'></font></tr><tr align=center><td></td><td><font color='#666666' face='Calibri' style='margin-left:10px' size='+2'>"+year+"</font></tr></table>";
document.getElementById("showCD").innerHTML=txt;
}
</script>
</head>

<body>
<div id="c-w">
<br><br>
<h2>Mathematics</h2><br>
<div align=left style="margin-left:50px;margin-right:50px">

Department of Mathematics was created from the very inception mainly to cater to the basic
 needs of the various B. Tech programs of the Institute. It started with a very modest 
 beginning as a single faculty member having only a handful of courses. As the department
  grew keeping in view a variety of applications in diversified areas, it has expanded to the
  size of eleven faculty members teaching more than thirty courses at the UG and PG level. 
  An M. Tech program in Applied and Computational Mathematics (ACM) was started in 2010.
  We believe in developing good teaching and learning methods along with research activities
  in areas which are relevant to the present day needs of Science, Engineering and Technology. 
  At present there are two professors, one associate professor, four assistant professors,five
  senior lecturers and one associate lecturer in the department. it has expanded to the
  size of eleven faculty members teaching more than thirty courses at the UG and PG level. 
  An M. Tech program in Applied and Computational Mathematics (ACM) was started in 2010.
  We believe in developing good teaching and learning methods along with research activities
  in areas which are relevant to the present day needs of Science, Engineering and Technology. 
  At present there are two professors, one associate professor, four assistant professors,five
  senior lecturers and one associate lecturer in the department. it has expanded to the
  size of eleven faculty members teaching more than thirty courses at the UG and PG level. 
  An M. Tech program in Applied and Computational Mathematics (ACM) was started in 2010.
  We believe in developing good teaching and learning methods along with research activities
  in areas which are relevant to the present day needs of Science, Engineering and Technology. 
  At present there are two professors, one associate professor, four assistant professors,five
  senior lecturers and one associate lecturer in the department. it has expanded to the
  size of eleven faculty members teaching more than thirty courses at the UG and PG level. 
  An M. Tech program in Applied and Computational Mathematics (ACM) was started in 2010.
  We believe in developing good teaching and learning methods along with research activities
  in areas which are relevant to the present day needs of Science, Engineering and Technology. 
  At present there are two professors, one associate professor, four assistant professors,five
  senior lecturers and one associate lecturer in the department. 

  </div>
<br><br>

<div style=";font-family:Calibri;width:1100px;">
<script>

for (var i=0;i<x.length;i++)
  { 
  document.write("<button onmouseover='displayCDInfo(" + i + ")' class='btn' style='width:185px;'>");
  document.write(x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue);

  //document.write(x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue);
  document.write("</button>");
 
  }

</script>
</div>
<div id='showCD' style="width:700px;font-family:Calibri;margin-top:30px;margin-left:50px;">Hover Mouse for the description of each department</div><br>

<br><br>
</div>
</div>
	

</body>
</html>

            
 <?php
include "footer.php";
?>           
            