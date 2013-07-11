<html>
<head>
 
<link rel="stylesheet" type="text/css" href="css/header.css" />
<link rel="stylesheet" type="text/css" href="css/style3.css" />

<link rel="stylesheet" href="images/Colourise.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />

<link rel="stylesheet" type="text/css" href="css/log.css" />

	
	
</head>







<script language=javascript>
function show1()
{
f.t2.value="High School Education...Explore The College Universty through Fully Optimized Webshow and Find Out Whats Latest In All Sections!!!";
}
function show2()
{
f.t2.value="Ask Queries Directly from Teachers By Posting Them In the forum Provided To You..Solve Your Doubts And Be A Master Of All Courses !!";
}

function show4()
{
f.t2.value="Downloadable Stuff Books , StudyMaterial , Papers , Previous Year Examination Schemas And Many More Just By Becoming A Member. !!";
}
function show5()
{
f.t2.value="About us ! Who We Are ! Who is the developing team behind the project list of the developers of the website and content management !!";
}
function show6()
{
f.t2.value="Read all The Terms And conditions Of The website . Know Your Rights Find Whats There In Your Universty High School Education !!";
}
function show7()
{
f.t2.value="Feedback !! Give Us A Feed.You Will be surely Replied Back By The Developers team Tell us You Motive Behind Visiting The Site !!";
}
function show8()
{
f.t2.value="Contact the Developing Team Or The Manage. Any Formal Request will Be Entertained Properly And You Will Be Replied Soon Surely.!!";
}
</script>
<body >
   
    
<div id=#cp>
<div id=#mn>
<div class=bg1>
<div class=menuxar1>
<ul>
<li class=a3>
<div class=a8>
        	
            	<a class="logo" href="index.php"></a>
           	 
</div>
</li>


    
<li class=a3>     
<div class=a9>

            	<ul class="ul1">
                	<li class="li1">
                   	<a href="logout.php" id="but" class="reg"><b>Logout </b>
	</a>
 </li>
             
	 <li class="li1">
                    	<a href="About.php" id="but" class="reg"><b>About </b>
			
	</a>

	</a>                  
</li>
 
                    <li class="li1">
                    	<a href="contact.php" id="but" class="reg"><b>Help </b></a>
                    </li>





                </ul>
	<br>

</div>
</li>
</ul>

</div>
</div>



</div>
</div>

<br><br><br><br>

<div id="content-wrap">
<?php
include  "menubar.php";
?>

<div class=menubardiv>
<form name=f>
<input type=text size=122 name=t2 class=hoverinp>
</form>
</div>



    
</div>
<?php
if(!isset($_SESSION))
{
session_start();

$secret=md5(uniqid(rand(), true));
$_SESSION['FORM_SECRET'] = $secret;
}
?>
		<div id="light" class="white_content">
        <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'" class="a1"><img src=images/cancel.png width=20 height=20 ></a>
        <div class="login">
        <form action="log.php" method="post" name="log">
        <img src="images/main.png" width=50 height=50><label class="p22">LOGIN DETAILS</label><br><br>
        <table >
    	<tr>
        <td width="151" height="46"><font color="#F2ECE9">USERNAME</font></td>
        <td width="335" height=30px;><input type="text" id="uname" name="uname" class="textbox" placeholder="Username" autofocus onKeyUp="validuname()" required size="30"/></td>
        
        </tr>
        <tr>
        <td  width="151" height="46"><label for="password"><font color="#F2ECE9">PASSWORD</font></label></td>
        <td><div style="height="46""><input type="password" id="pass" name="pass" class="textbox" placeholder="Password" onKeyUp="passwordst(this.value)" required onBlur="" size="30" ><label class="p1" id="l12"></label></div></td>
        </tr>
        <tr>
        <td height="39"><label for="utype"  width="141" height="41"><font color="#F2ECE9">USER TYPE</font></label></td>
        <td><?php
                include('db_conn.php');
                $qry = mysql_query("SELECT user_type FROM user_type");
               	echo "<select id='utype' name='utype' class='textbox' style='width:250' onChange='type()'>";
                echo "<option value=''>--Select--</option>";
				while(($row=mysql_fetch_row($qry))!=NULL)
                {
                echo "<option value='$row[0]'>$row[0]</option>";
                }
				echo "<option value='Admin'>Admin</option>";
                echo "</select>";
                ?>
            
            </select></td>
        </tr>
        <tr>
	 <td><input type="submit" class="btn1" value="L O G I N"  ></td>
        <td><button value="Reset" class="btn1">R E S E T</button><input type="hidden" name="form_secret" id="form_secret" value="<?php echo $_SESSION['FORM_SECRET'];?>" />
        </tr>
        
    </table>
    </form>









    </div> </div>
		


<div id="fade" class="black_overlay"></div>
 
					
	


  
</body>
</html>
