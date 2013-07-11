<?php
session_start();

unset($_SESSION['u']);
unset($_SESSION['v']);
unset($_SESSION['w']);
session_unset();
session_destroy();
include "new3.php";
?>
<html>
<head>
<link rel="stylesheet" href="images/Colourise.css" type="text/css" />
</head>



<body>
<div id="c-wmain">
<h2>You have Successfully Loged out..</h2>

</div>
</body>
</html>

            
 <?php
include "newfoot.php";
?>           
            