<?php
include "header.php";
?>

<body>
<div id="c-wmain">
<br>
<br>
<h3><b>Web Based Search Engine</b></h3><br>
<form method="get" action="http://www.google.com/search">
 <input type="text" name="q" size="30" maxlength="255" value="" /> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="submit" value="     Search    " /> <br><br>

 <input type="radio" name="sitesearch" value="" />GoogleSearch  &nbsp;&nbsp;&nbsp;

 <input type="radio" name="sitesearch" value="www.ufl.edu" checked />UniverstyOfFlorida &nbsp;&nbsp;&nbsp;

<input type="radio" name="sitesearch" value="www.virginia.edu" checked />VirginiaUniversty &nbsp;&nbsp;&nbsp;

<input type="radio" name="sitesearch" value="www.stanford.edu" checked />StanfordUniversty &nbsp;&nbsp;&nbsp;

<input type="radio" name="sitesearch" value="www.du.ac.in" checked />DelhiUniversty &nbsp;&nbsp;&nbsp;

<input type="radio" name="sitesearch" value="www.utoronto.com" checked />TorontoUniversty &nbsp;&nbsp;&nbsp;

<input type="radio" name="sitesearch" value="www.auckland.ac.nz" checked />AucklandUniversty &nbsp;&nbsp;&nbsp;

<input type="radio" name="sitesearch" value="www.umich.edu" checked />MicigianUniversty &nbsp;&nbsp;&nbsp;


 </form>

<br><br>
<h2>Search the high school Universty Website</h2>
<br><br>


<form action="searchdb1.php" method="post">
<select name=cat>
<option>Books</option>
<option>Downloads</option>
</select>
&nbsp;&nbsp;&nbsp;&nbsp;
<input type=text name=b1 size=30>&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit value="     Search     " name=b2>
</form>
<br>
<br>

</div>
</body>
</html>
 <?php
include "footer.php";
?>           
            