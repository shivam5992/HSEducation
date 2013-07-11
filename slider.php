 <link rel=stylesheet type=text/css href=css/style.css>
<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type="text/javascript">
function theRotator() {
	$('div.rotator ul li').css({opacity: 0.0});
	$('div.rotator ul li:first').css({opacity: 1.0});
	setInterval('rotate()',2000);
}
function rotate() {	
	var current = ($('div.rotator ul li.show')?  $('div.rotator ul li.show') : $('div.rotator ul li:first'));

    if ( current.length == 0 ) current = $('div.rotator ul li:first');

	var next = ((current.next().length) ? ((current.next().hasClass('show')) ? $('div.rotator ul li:first') :current.next()) : $('div.rotator ul li:first'));
	
	
			
next.css({opacity: 0.0})
	.addClass('show')
	.animate({opacity: 1.0}, 2000);

	current.animate({opacity: 0.0}, 2000)
	.removeClass('show');
	
};



$(document).ready(function() {		
	theRotator();
	$('div.rotator').fadeIn(2000);
    $('div.rotator ul li').fadeIn(2000); 
});
</script>

</head>
<body>
<div class="rotator">
  <ul>
    <li class="show">
    
	<a href="
	<?php
	include("dbconnection.php");
	$qry=mysql_query("SELECT * from slider where img_id=1");
	$i=mysql_fetch_row($qry);
	echo $i[2];	?>">
    <img src='images/<?php	echo $i[1];?>' width='726' height='300' title="forum" /></a></li>
    <li>
    <a href="
    <?php
	include('dbconnection.php');
	$qry1=mysql_query("SELECT * from slider where img_id=2");
	$i1=mysql_fetch_row($qry1);
	echo $i1[2];
	?>
	">
    <img src='images/<?php echo $i1[1];?>' width='726' height='300' title="Programmes" /></a></li>
    <li>
    <a href="
    <?php
	include('dbconnection.php');
	$qry2=mysql_query("SELECT * from slider where img_id=3");
	$i2=mysql_fetch_row($qry2);
	echo $i2[2];
	?>
	">
    <img src='images/<?php echo $i2[1];?>' width='726' height='300' title="facilities" /></a></li>
    <li>
    <a href="
    <?php
	include('dbconnection.php');
	$qry5=mysql_query("SELECT * from slider where img_id=4");
	$i5=mysql_fetch_row($qry5);
	echo $i5[2];
	?>
	">
    <img src='images/<?php	echo $i5[1];?>' width='726' height='300' title="Contactus" /></a>
    </li>
    
  </ul>

</div>

</body>


