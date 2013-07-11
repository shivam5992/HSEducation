<?php
include "header.php";
?>

<html>
<head>

<style type="text/css">
.btn
{
	-webkit-border-radius:3px;
	background-color:#333;
	border: 1px solid rgb(178, 178, 178);
	
	font-family:Calibri;
	font-size:18px;
		
	padding:10px;
	margin-left:20px;
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
  xmlhttp.open("GET","xml/bio.xml",false);
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
<h2>Biotechnology</h2><br>
<div align=left style="margin-left:50px;margin-right:50px">

Biotechnology is radically changing the way we view issues related to human health, agriculture
 and environment. R&D ready workforce is a key domain within the rapidly growing biotechnology
 industry.  To address the need for scientific talent to sustain the phenomenal growth in the biotech
  industry,  “Biotechnology Department” with a mission  to develop- quality human resource and research
 infrastructure. The department offers  biotechnology and doctoral  program, and supports multi-disciplinary
 curricula  designed to provide foundation from which students can understand and exploit the
potential of biotechnology.  A balanced mix of faculty drawn from both academia and industry with rich R&D 
 exposure both in India and abroad contributes to the department academic excellence.  Invited lectures from
  eminent speakers in diverse subject areas, conferences, and research-driven training through industrial
 internship, and minor and major project components in the UGDegree program ensures  that students are in
 touch with applied scientific knowledge.
 R&D ready workforce is a key domain within the rapidly growing biotechnology
 industry.  To address the need for scientific talent to sustain the phenomenal growth in the biotech
  industry,  “Biotechnology Department” with a mission  to develop- quality human resource and research
 infrastructure. The department offers  biotechnology and doctoral  program, and supports multi-disciplinary
 curricula  designed to provide foundation from which students can understand and exploit the
potential of biotechnology.  A balanced mix of faculty drawn from both academia and industry with rich R&D 
 exposure both in India and abroad contributes to the department academic excellence.  Invited lectures from
  eminent speakers in diverse subject areas, conferences, and research-driven training through industrial
 internship, and minor and major project components in the UGDegree program ensures  that students are in
 touch with applied scientific knowledge. R&D ready workforce is a key domain within the rapidly growing biotechnology
 industry.  To address the need for scientific talent to sustain the phenomenal growth in the biotech
  industry,  “Biotechnology Department” with a mission  to develop- quality human resource and research
 infrastructure. The department offers  biotechnology and doctoral  program, and supports multi-disciplinary
 curricula  designed to provide foundation from which students can understand and exploit the
potential of biotechnology.  A balanced mix of faculty drawn from both academia and industry with rich R&D 
 exposure both in India and abroad contributes to the department academic excellence.  Invited lectures from
  eminent speakers in diverse subject areas, conferences, and research-driven training through industrial
 internship, and minor and major project components in the UGDegree program ensures  that students are in
 touch with applied scientific knowledge. R&D ready workforce is a key domain within the rapidly growing biotechnology
 industry.  To address the need for scientific talent to sustain the phenomenal growth in the biotech
  industry,  “Biotechnology Department” with a mission  to develop- quality human resource and research
 infrastructure. The department offers  biotechnology and doctoral  program, and supports multi-disciplinary
 curricula  designed to provide foundation from which students can understand and exploit the
potential of biotechnology.  A balanced mix of faculty drawn from both academia and industry with rich R&D 
 exposure both in India and abroad contributes to the department academic excellence.  Invited lectures from
  eminent speakers in diverse subject areas, conferences, and research-driven training through industrial
 internship, and minor and major project components in the UGDegree program ensures  that students are in
 touch with applied scientific knowledge. 
 
</div>
<br><br>

<div style=";font-family:Calibri;width:1000px;">
<script>

for (var i=0;i<x.length;i++)
  { 
  document.write("<button onmouseover='displayCDInfo(" + i + ")' class='btn' style='width:150px;'>");
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
            