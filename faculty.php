<?php
include "header.php";
?>


<style type="text/css">
.btn
{
	-webkit-border-radius:3px;
	background-color:#2A612C;
	border: 1px solid rgb(178, 178, 178);
	-webkit-border-radius:6px;
		
	-moz-border-radius: 6px;
		 border-radius: 6px;
	padding:10px;
	margin-left:20px;
	color:#FFF;
	text-shadow:#999;
	text-outline:#096;
	
}
.btn1
{
	-webkit-border-radius:3px;
	background-color:#2A612C;
	border: 1px solid rgb(178, 178, 178);
	-webkit-border-radius:6px;
		
	-moz-border-radius: 6px;
		 border-radius: 6px;
	padding:10px;
	margin-left:20px;
	color:#FFF;
	text-shadow:#999;
	text-outline:#096;
	width:150px;
	height: 50px;
}
</style>
<script type="text/javascript">
function fun1()
{
	document.getElementById("dv").style.display='none';
	document.getElementById("div1").style.display='block';
	document.getElementById("div2").style.display='none';
	document.getElementById("div3").style.display='none';
	document.getElementById("div4").style.display='none';
	document.getElementById("div5").style.display='none';
	document.getElementById("div6").style.display='none';
}
function fun2()
{document.getElementById("dv").style.display='none';
	document.getElementById("div2").style.display='block';
	document.getElementById("div1").style.display='none';
	document.getElementById("div3").style.display='none';
	document.getElementById("div4").style.display='none';
	document.getElementById("div5").style.display='none';
	document.getElementById("div6").style.display='none';
}
function fun3()
{document.getElementById("dv").style.display='none';
	document.getElementById("div3").style.display='block';
	document.getElementById("div2").style.display='none';
	document.getElementById("div1").style.display='none';
	document.getElementById("div4").style.display='none';
	document.getElementById("div5").style.display='none';
	document.getElementById("div6").style.display='none';
}
function fun4()
{document.getElementById("dv").style.display='none';
	document.getElementById("div4").style.display='block';
	document.getElementById("div2").style.display='none';
	document.getElementById("div3").style.display='none';
	document.getElementById("div1").style.display='none';
	document.getElementById("div5").style.display='none';
	document.getElementById("div6").style.display='none';
}
function fun5()
{document.getElementById("dv").style.display='none';
	document.getElementById("div5").style.display='block';
	document.getElementById("div2").style.display='none';
	document.getElementById("div3").style.display='none';
	document.getElementById("div4").style.display='none';
	document.getElementById("div1").style.display='none';
	document.getElementById("div6").style.display='none';
}
function fun6()
{document.getElementById("dv").style.display='none';
	document.getElementById("div6").style.display='block';
	document.getElementById("div2").style.display='none';
	document.getElementById("div3").style.display='none';
	document.getElementById("div4").style.display='none';
	document.getElementById("div5").style.display='none';
	document.getElementById("div1").style.display='none';
}
function fun7()
{document.getElementById("dv").style.display='none';
	document.getElementById("showid").innerHTML='';
	document.getElementById("div1").style.display='none';
	document.getElementById("div2").style.display='none';
	document.getElementById("div3").style.display='none';
	document.getElementById("div4").style.display='none';
	document.getElementById("div5").style.display='none';
	document.getElementById("div6").style.display='block';
}
function fun8()
{document.getElementById("dv").style.display='none';
	document.getElementById("showid").innerHTML='';
	document.getElementById("div1").style.display='none';
	document.getElementById("div2").style.display='none';
	document.getElementById("div3").style.display='none';
	document.getElementById("div4").style.display='none';
	document.getElementById("div6").style.display='none';
	document.getElementById("div5").style.display='block';
}
function fun9()
{document.getElementById("dv").style.display='none';
	document.getElementById("showid").innerHTML='';
	document.getElementById("div1").style.display='none';
	document.getElementById("div2").style.display='none';
	document.getElementById("div3").style.display='none';
	document.getElementById("div6").style.display='none';
	document.getElementById("div5").style.display='none';
	document.getElementById("div4").style.display='block';
}
function fun10()
{document.getElementById("dv").style.display='none';
	document.getElementById("showid").innerHTML='';
	document.getElementById("div1").style.display='none';
	document.getElementById("div2").style.display='none';
	document.getElementById("div6").style.display='none';
	document.getElementById("div4").style.display='none';
	document.getElementById("div5").style.display='none';
	document.getElementById("div3").style.display='block';
}
function fun11()
{document.getElementById("dv").style.display='none';
	document.getElementById("showid").innerHTML='';
	document.getElementById("div1").style.display='none';
	document.getElementById("div6").style.display='none';
	document.getElementById("div3").style.display='none';
	document.getElementById("div4").style.display='none';
	document.getElementById("div5").style.display='none';
	document.getElementById("div2").style.display='block';
}
function fun12()
{document.getElementById("dv").style.display='none';
	document.getElementById("showid").innerHTML='';
	document.getElementById("div6").style.display='none';
	document.getElementById("div2").style.display='none';
	document.getElementById("div3").style.display='none';
	document.getElementById("div4").style.display='none';
	document.getElementById("div5").style.display='none';
	document.getElementById("div1").style.display='block';
}
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("GET","xml/fac.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML; 
x=xmlDoc.getElementsByTagName("faculty");
function displayCDInfo(i)
		{
			artist=(x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue);
			title=(x[i].getElementsByTagName("email_id")[0].childNodes[0].nodeValue);
			year=(x[i].getElementsByTagName("dept")[0].childNodes[0].nodeValue);
			country=(x[i].getElementsByTagName("Research_area")[0].childNodes[0].nodeValue);
			company=(x[i].getElementsByTagName("image")[0].childNodes[0].nodeValue);
			txt="<div style='float:left;width:400px;'><table><tr><td><font size='+2' color='#000000' face='Calibri' >Name: </font><td><font color='#666666' face='Calibri' style='margin-left:10px' size='+2'>"+artist+"</font></tr><tr><td><font size='+2' color='#000000' face='Calibri' >Department:</font><td><font color='#666666' face='Calibri' style='margin-left:10px' size='+2'> "+year+"</font></tr><tr><td><font size='+2' color='#000000' face='Calibri' >Email Id: </font><td><font color='#666666' face='Calibri' style='margin-left:10px' size='+2'>"+title+"</font></tr><tr><td><font size='+2' color='#000000' face='Calibri' >Research Area: </font><td><font color='#666666' face='Calibri' style='margin-left:10px' size='+2'>"+country+"</font></tr></table></div><div style='float:left;width:100;'><img width='100' height='150' src='"+company+"'></div>";

			document.getElementById("showid").innerHTML=txt;
			}
</script>
</head>


<body>
<div id="c-wmain">
<br>
<h2>Faculty Of High School</h2>
<br>
<div style="float:left;">
<button class='btn1' onclick="fun1()" on>CSE</button>
<br>
<button class='btn1' onClick="fun2()">IT</button>
<br>
<button class='btn1' onClick="fun3()">Maths</button>
<br><button class='btn1' onClick="fun4()">ECE</button>
<br><button class='btn1' onClick="fun5()">BIO</button>
<br><button class='btn1' onClick="fun6()">Physics</button>
</div>
<script>
 if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("GET","xml/fac.xml",false);
xmlhttp.send();
xml=xmlhttp.responseXML; 

path="/college/faculty[dept='CSE']/name";
path1="/college/faculty[dept='IT']/name";
path2="/college/faculty[dept='Maths']/name";
path3="/college/faculty[dept='ECE']/name";
path4="/college/faculty[dept='BIO']/name";
path5="/college/faculty[dept='Physics']/name";

// code for IE
if (window.ActiveXObject)
{
var nodes=xml.selectNodes(path);

for (var i=0;i<nodes.length;i++)
  {
  document.write(nodes[i].childNodes[0].nodeValue);
  document.write("<br>");
  }
}
// code for Mozilla, Firefox, Opera, etc.
else if (document.implementation && document.implementation.createDocument)
{
var nodes=xml.evaluate(path, xml, null, XPathResult.ANY_TYPE,null);
var result=nodes.iterateNext();
var nodes1=xml.evaluate(path1, xml, null, XPathResult.ANY_TYPE,null);
var result1=nodes1.iterateNext();
var nodes2=xml.evaluate(path2, xml, null, XPathResult.ANY_TYPE,null);
var result2=nodes2.iterateNext();
var nodes3=xml.evaluate(path3, xml, null, XPathResult.ANY_TYPE,null);
var result3=nodes3.iterateNext();
var nodes4=xml.evaluate(path4, xml, null, XPathResult.ANY_TYPE,null);
var result4=nodes4.iterateNext();
var nodes5=xml.evaluate(path5, xml, null, XPathResult.ANY_TYPE,null);
var result5=nodes5.iterateNext();
document.write("<div id='dv' style='display:block;margin-top:50px'>");
document.write(" The faculty also has PhD programme in research areas of Laser Physics, Atomic and Molecular Collision Physics, Quantum Optics and Quantum Information Theory, Optical Fiber Sensors, Experimental and Theoretical Molecular Spectroscopy, Raman Spectroscopy, Biophysics, Solid State Ionics (Materials and Devices), Diluted Magnetic Semiconductors (Spintronics), Laser Plasma Interaction, Advanced Perovskite Oxide Materials, Magnites, Metamaterials, Charge Transfer Spectroscopy, Multifunctional Nanomaterials, Nanostructures. The Physics and Material Science and Engineering department offers courses in Physics and material science to B.Tech and M.Tech students of ECE, CSE, IT, Biotech branches. The department has also started a M.Tech programme in Material Science and Engineering from 2010.");
document.write("</div>");
document.write("<div id='div1' style='float:left;width:600px;margin-top:50px;display:none;'>");
var j = 0;
while (result)
  {
	  var i =result.childNodes[0].nodeValue;
  document.write("<button onMouseOver='displayCDInfo(" + j + ")'onMouseOut='fun12()'  class='btn' style='width:150px;'>");
  document.write(i);
  document.write("</button>");
  
  result=nodes.iterateNext();
  j++;
  }
  document.write("</div>");
document.write("<div id='div2' style='float:left;width:600px;margin-top:50px;display:none'>");
  while (result1)
  {
	  var i =result1.childNodes[0].nodeValue;
	  document.write("<button onMouseOver='displayCDInfo(" + j + ")' onMouseOut='fun11()' class='btn' style='width:150px;'>");
  document.write(i);
   document.write("</button>");
  
  
  result1=nodes1.iterateNext();
  j++;
  }
  document.write("</div>");
  document.write("<div id='div3' style='float:left;width:600px;margin-top:50px;display:none'>");
while (result2)
  {
	  var i=result2.childNodes[0].nodeValue;
	  document.write("<button onMouseOver='displayCDInfo(" + j + ")' onMouseOut='fun10()' class='btn' style='width:150px;'>");
  document.write(i);

   document.write("</button>");
  
  result2=nodes2.iterateNext();
  j++;
  }
  document.write("</div>");
document.write("<div id='div4' style='float:left;width:600px;margin-top:50px;display:none'>");
  while (result3)
  {
	  i= result3.childNodes[0].nodeValue;
	  document.write("<button onMouseOver='displayCDInfo(" + j+ ")' onMouseOut='fun9()' class='btn' style='width:150px;'>");
  document.write(i);
   document.write("</button>");

  result3=nodes3.iterateNext();
  j++;
  }
  document.write("</div>");
  document.write("<div  id='div5' style='float:left;width:600px;margin-top:50px;display:none'>");
while (result4)
  {
	  var i=result4.childNodes[0].nodeValue;
	  document.write("<button onMouseOver='displayCDInfo(" + j + ")' onMouseOut='fun8()' class='btn' style='width:150px;'>");
  document.write(i);
   document.write("</button>");
 
  result4=nodes4.iterateNext();
  j++;
  }
  document.write("</div>");
document.write("<div id='div6' style='float:left;width:600px;margin-top:50px;display:none'>");
  while (result5)
  {
	  var i=result5.childNodes[0].nodeValue;
	  document.write("<button onMouseOver='displayCDInfo(" + j + ")' onMouseOut='fun7()' class='btn' style='width:150px;'>");
  document.write(i);
   document.write("</button>");

  result5=nodes5.iterateNext();
  j++;
  }
  document.write("</div>");


}



</script>
<br>
<div id="showid" style="float:left;margin-top:25px;margin-left:50px;padding:8px">

</div>
</div>
	

</body>
</html>

            
 <?php
include "footer.php";
?>           
            