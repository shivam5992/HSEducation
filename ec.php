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
  xmlhttp.open("GET","xml/EC.xml",false);
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
<h2> Electronics And Communications</h2><br>
<div align=left style="margin-left:50px;margin-right:50px">

The department focuses on development and strengthening system thinking, problem solving, 
analysis, design, research, team work, communication skills, and readiness for lifelong 
learning. The courses run by the department use mixed techniques of interactive lectures,
 guided case studies, literature surveys and project work that require team work and critical
 and creative thinking. It emphasizes on undergraduate as well as graduate research activities.
 The quality policy is to pursue global standards of excellence in our endeavors and to remain
 accountable through processes of self evaluation and continuous improvement.
Through a team of more than forty faculty members, the department puts a great emphasis on
 laboratory and project work. While laboratories are also used for developing skills to use
 and apply various concepts, tools and techniques, their main purpose is to develop the core
 technical as well as general professional competencies through experiential and collaborative
 learning.  Main purpose of the laboratories is to develop the abilities to design and conduct
 experiments; collect, analyze and interpret data; work independently and also in teams; and
 also to improve reporting and communication skills.
This practical experience in the laboratory is intended to nurture the students initiative
 originality, creativity, and spirit of inquiry and also to generate an appreciation of the
 nature of engineering design and scientific discovery. Through various active learning 
 experiences in laboratories, students gain more insights into the field of study, develop
 ability to apply their knowledge to a greater extent, exhibit a greater level of understanding
 of course material and sharpen their problem solving skills.
Through a team of more than forty faculty members, the department puts a great emphasis on
 laboratory and project work. While laboratories are also used for developing skills to use
 and apply various concepts, tools and techniques, their main purpose is to develop the core
 technical as well as general professional competencies through experiential and collaborative
 learning.  Main purpose of the laboratories is to develop the abilities to design and conduct
 experiments; collect, analyze and interpret data; work independently and also in teams; and
 also to improve reporting and communication skills.
This practical experience in the laboratory is intended to nurture the students initiative
 originality, creativity, and spirit of inquiry and also to generate an appreciation of the
 nature of engineering design and scientific discovery. Through various active learning 
 experiences in laboratories, students gain more insights into the field of study, develop
 ability to apply their knowledge to a greater extent, exhibit a greater level of understanding
 of course material and sharpen their problem solving skills.
Through a team of more than forty faculty members, the department puts a great emphasis on
 laboratory and project work. While laboratories are also used for developing skills to use
 and apply various concepts, tools and techniques, their main purpose is to develop the core
 technical as well as general professional competencies through experiential and collaborative
 learning.  Main purpose of the laboratories is to develop the abilities to design and conduct
 experiments; collect, analyze and interpret data; work independently and also in teams; and
 also to improve reporting and communication skills.
This practical experience in the laboratory is intended to nurture the students initiative
 originality, creativity, and spirit of inquiry and also to generate an appreciation of the
 nature of engineering design and scientific discovery. Through various active learning 
 experiences in laboratories, students gain more insights into the field of study, develop
 ability to apply their knowledge to a greater extent, exhibit a greater level of understanding
 of course material and sharpen their problem solving skills.
Through a team of more than forty faculty members, the department puts a great emphasis on
 laboratory and project work. While laboratories are also used for developing skills to use
 and apply various concepts, tools and techniques, their main purpose is to develop the core
 technical as well as general professional competencies through experiential and collaborative
 learning.  Main purpose of the laboratories is to develop the abilities to design and conduct
 experiments; collect, analyze and interpret data; work independently and also in teams; and
 also to improve reporting and communication skills.
This practical experience in the laboratory is intended to nurture the students initiative
 originality, creativity, and spirit of inquiry and also to generate an appreciation of the
 nature of engineering design and scientific discovery. Through various active learning 
 experiences in laboratories, students gain more insights into the field of study, develop
 ability to apply their knowledge to a greater extent, exhibit a greater level of understanding
 of course material and sharpen their problem solving skills.

</div>
<br><br>
<div style=";font-family:Calibri;width:1100px;">
<script>

for (var i=0;i<x.length;i++)
  { 
  document.write("<button onmouseover='displayCDInfo(" + i + ")' class='btn' style='width:200px;'>");
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
            