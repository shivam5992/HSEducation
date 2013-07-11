<?php
include "header.php";
?>






<script>
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("GET","xml/papers.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML; 

x=xmlDoc.getElementsByTagName("topic");


i=0;

function displayCD()
{
artist=(x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue);
title=(x[i].getElementsByTagName("bookname")[0].childNodes[0].nodeValue);
year=(x[i].getElementsByTagName("bookimage")[0].childNodes[0].nodeValue);
txt="<div align=center ><h2>Paper: " + artist + "</h2><br><h2>Title: " + title + "<br></h2><img width='200' height='350' src='"+year+"'></div>";
document.getElementById("showCD").innerHTML=txt;
}

function next()
{
if (i<x.length-1)
  {
  i++;
  displayCD();
  }
}

function previous()
{
if (i>0)
  {
  i--;
  displayCD();
  }
}
</script>
</head>

<body onload="displayCD()">
<div id="c-wmain">
<br><br>
<h2 align=center> Previous Year Papers</h2><br>
<div align=center>
<table width=500 height=500><tr><td>
<input id=butn type="button" onclick="previous()" value="Back" />
<td><div id='showCD' ></div>
<td><input id=butn type="button" onclick="next()" value="Next" />
</tr></table></div>
<br><br>
<font size=4>
<a href=download.php>Click Here</a> &nbsp; to download the papers
<br><br>
<a href="webSearch.php">Click Here</a> &nbsp; to search the papers by name.
</font>
</div>
</body>
</html>

            
 <?php
include "footer.php";
?>           
            