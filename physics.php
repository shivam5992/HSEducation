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
  xmlhttp.open("GET","xml/physics.xml",false);
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
<h2>Physics</h2><br>
<div align=left style="margin-left:50px;margin-right:50px">
The Physics and Material Science and Engineering department offers courses in Physics and
 material science to B.Tech and M.Tech students of ECE, CSE, IT, Biotech branches. The 
 department has also started a M.Tech programme in Material Science and Engineering from 2010.
 In the last few years the role of materials has become very important with the emergence of
 nanomaterials, biomaterials, high temperature superconducting materials, carbon cluster 
 compounds, polymers, plastics and advanced ceramics. This M.Tech program is an interdisciplinary
 program aimed to impart advance level training in the specialized and emerging areas of Materials
 Science and Engineering and to fulfill the needs of industries and related R & D activities. 
 It provides strong foundation in the fundamentals of structures, properties, processing and 
 characterization of materials and will develop the ability and skill of students to design
 tailor made materials and fabricate devices for specific technological applications.
 The department also has PhD programme in research areas of  Laser Physics, Atomic and 
 Molecular Collision Physics, Quantum Optics and Quantum Information Theory, Optical
 Fiber Sensors, Experimental and Theoretical Molecular Spectroscopy, Raman Spectroscopy,
 Biophysics, Solid State Ionics (Materials and Devices), Diluted Magnetic Semiconductors 
 (Spintronics), Laser Plasma Interaction, Advanced Perovskite Oxide Materials, Magnites, 
 Metamaterials, Charge Transfer Spectroscopy, Multifunctional Nanomaterials, Nanostructures. 
The Physics and Material Science and Engineering department offers courses in Physics and
 material science to B.Tech and M.Tech students of ECE, CSE, IT, Biotech branches. The 
 department has also started a M.Tech programme in Material Science and Engineering from 2010.
 In the last few years the role of materials has become very important with the emergence of
 nanomaterials, biomaterials, high temperature superconducting materials, carbon cluster 
 compounds, polymers, plastics and advanced ceramics. This M.Tech program is an interdisciplinary
 program aimed to impart advance level training in the specialized and emerging areas of Materials
 Science and Engineering and to fulfill the needs of industries and related R & D activities. 
 It provides strong foundation in the fundamentals of structures, properties, processing and 
 characterization of materials and will develop the ability and skill of students to design
 tailor made materials and fabricate devices for specific technological applications.
 The department also has PhD programme in research areas of  Laser Physics, Atomic and 
 Molecular Collision Physics, Quantum Optics and Quantum Information Theory, Optical
 Fiber Sensors, Experimental and Theoretical Molecular Spectroscopy, Raman Spectroscopy,
 Biophysics, Solid State Ionics (Materials and Devices), Diluted Magnetic Semiconductors 
 (Spintronics), Laser Plasma Interaction, Advanced Perovskite Oxide Materials, Magnites, 
 Metamaterials, Charge Transfer Spectroscopy, Multifunctional Nanomaterials, Nanostructures. 
The Physics and Material Science and Engineering department offers courses in Physics and
 material science to B.Tech and M.Tech students of ECE, CSE, IT, Biotech branches. The 
 department has also started a M.Tech programme in Material Science and Engineering from 2010.
 In the last few years the role of materials has become very important with the emergence of
 nanomaterials, biomaterials, high temperature superconducting materials, carbon cluster 
 compounds, polymers, plastics and advanced ceramics. This M.Tech program is an interdisciplinary
 program aimed to impart advance level training in the specialized and emerging areas of Materials
 Science and Engineering and to fulfill the needs of industries and related R & D activities. 
 It provides strong foundation in the fundamentals of structures, properties, processing and 
 characterization of materials and will develop the ability and skill of students to design
 tailor made materials and fabricate devices for specific technological applications.
 The department also has PhD programme in research areas of  Laser Physics, Atomic and 
 Molecular Collision Physics, Quantum Optics and Quantum Information Theory, Optical
 Fiber Sensors, Experimental and Theoretical Molecular Spectroscopy, Raman Spectroscopy,
 Biophysics, Solid State Ionics (Materials and Devices), Diluted Magnetic Semiconductors 
 (Spintronics), Laser Plasma Interaction, Advanced Perovskite Oxide Materials, Magnites, 
 Metamaterials, Charge Transfer Spectroscopy, Multifunctional Nanomaterials, Nanostructures. 

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
            