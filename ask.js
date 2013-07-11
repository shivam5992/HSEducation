function ask(q,r)
{
	var x;
	var y;
	alert(q);
	alert(r);
	x.open("GET","ask.php?q="+q,true);
	y.open("GET","ask.php?r="+r,true);
	x.send();
	y.send();
}