
<?php 
session_start(); 
if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  { 
     echo  '<strong>Incorrect verification code.</strong>'; 
}

 else { 
     // add form data processing code here 
     define('SALT_LENGTH', 9);
function generateHash($plainText, $salt = null)
{
	$ar= array();
    if ($salt === null)
    {
        $salt =substr(md5(uniqid(rand(), true)), 0, SALT_LENGTH);
		$de=$salt;
		$ar[0]=$de;
		    }
    else
    {
        $salt = substr($salt, 0, SALT_LENGTH);
    	$de=$salt;
		$ar[0]=$de;
	}
	
    $ar[1]= $salt . sha1($salt . $plainText);
 return $ar;
}
	 include('dbconnection.php');
	 $a=$_POST['Fname1'];
	 $b=$_POST['Lname'];
	 $c=$_POST['age'];
	 $d=$_POST['gender'];
	 $e=$_POST['bday'];
	 $f=$_POST['mnumber'];
	 $g=$_POST['email'];
	 $h=$_POST['address'];
	 $i=$_POST['city'];
	 $j=$_POST['state'];
	 $k=$_POST['country'];
	 $l=$_POST['pincode'];
	 $m=$_POST['username'];
	 $st=$_POST['pass'];
	 $n=array();
	 $n=generateHash($st);
	 $p=$_POST['utype'];
	 $qry=mysql_query("SELECT ut_id FROM user_type where user_type='$p' and status='1'");
	 $x=mysql_fetch_row($qry);
	 if($x[0]==1)
	 {
		 $q=$_POST['dept'];
	 	 $qry1=mysql_query("SELECT dept_id FROM dept where department='$q' and status='1'");
	 	 $y=mysql_fetch_row($qry1);
	 
		 mysql_query("INSERT INTO teacher (dept_id) VALUES ('$y[0]')");	
	 }
	 else if($x[0]==2)
	 {
		 $r=$_POST['branch'];
		 $qry2=mysql_query("SELECT b_id FROM branch where branch='$r' and status='1'");
	 	 $z=mysql_fetch_row($qry2);
		 mysql_query("INSERT INTO students (b_id) VALUES ('$z[0]')");
	 }
	 
	 
	  mysql_query("INSERT INTO secure (first_name,last_name,age,gender,dob,m_no,e_mail,address,city,state,country,pincode,username,password,salt,ut_id) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n[1]','$n[0]','$x[0]')");
	 include "popup.php";
	 
}; 

?>