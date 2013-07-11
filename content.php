<head>

<title>collegePortal</title>

<link rel="stylesheet" href="css/style1.css" type="text/css">
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script src="3DEngine.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="images/Colourise.css" type="text/css" />


</head>


<body>

<div id="content-wrap" >
<div id="main">
<div style="float:left;">
<div class=menuxar>

<ul>
<li class=a3>
<div class=a5>
<?php
include "slider.php";
?>
</div>
</li>
<li class=a3>
<div class=a4>
<?php
include "latest_news.php";
?>
</div>
</li>
</ul>

</div>
</div>
</div>
</div>

<?php
include "middle_div.php"
?>

<div style="float:left;margin-left:135px">
<?php
include "tags.php";
?>
</div>

</body>
