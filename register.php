<?php
include "header.php";
?>

<link rel="stylesheet" type="text/css" href="css/register.css" />
<script type="text/javascript" src="js/register.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function()
{
$("#username").change(function() 
{
var username = $("#username").val();
if(username.length > 3)
{
$("#availability_status").html('<img src="images/loading.gif" align="absmiddle">&nbsp;Checking..');
$.ajax({  
    type: "POST",  
    url: "check.php",  
    data: "username="+ username,  
    success: function(server_response){  
   $("#availability_status").ajaxComplete(function(event, request){ 
	if(server_response == '0')
	{ 
	$("#availability_status").html('<img src="images/tick.gif" align="absmiddle"> <font color="Green"> Available</font>  ');
	}  
	else  if(server_response == '1')
	{  
	 $("#availability_status").html('<img src="images/cross.gif" align="absmiddle"> <font color="red"> Not Available</font>');
	}  
   });
   } 
  }); 
}
else
{
$("#availability_status").html('<font color="#cc0000">Username too short</font>');
}
return false;
});
});
</script>

<body >
<div id="c-wmainreg">
<div class="mainr">
<form action="submit.php" method="post" name="form1" >
		<h3 align="center" class="register">R E G I S T E R &nbsp;&nbsp;  H E R E</h3>
		<br><hr><br>
      	<h2 align="left" class="details">&nbsp;&nbsp;  PERSONAL DETAIL</h2><p>
        <p class="p1" align=left>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>(All Fields are mandatory)</i></p>
      	<table class="table1" width="656">
        	<tr>
        	<td width="142" height="34"><label for="name">FIRST NAME</label></td>
            <td width="502"><input type="text" id="Fname" name="Fname1"   placeholder=" First Name"  size="30" autofocus/></td>
			</tr>
            
			<tr>
            <td height="39"><label for="name">LAST NAME</label></td>
            <td><input type="text" id="Lname"  name="Lname" placeholder="Last Name" size="30"   />
            <label class="p1" id="l2"></label></td>
			
			<tr>
            <td height="52"><label for="name">AGE</label></td>
			<td><input  id="age" name="age" type="number" min=17 max=30   placeholder="Age" />
            <label class="p1" id="l3"></label> </td>
            </tr>
            
			<tr>
			<td height="37"><label for="gender">GENDER</label></td>
			<td><input name="gender" type="radio" value="male"  checked />Male
            	<input type="radio" name="gender" value="female" />Female</td>
			</tr>
            
			<tr>            
        	<td height="34"><label for="dob">D O B</label></td>
          	<td><input type="date" name="bday" id="bday" min="1/1/88"  max="1/1/95" size="30" /></td>
        	</tr>
			
        	<tr>
       	 	<td height="38"><label for="Mobile number">Mob No.</label></td>
			<td>+91 <input type="tel"  name="mnumber" id="mnumber" placeholder=" Mobile Number"  onKeyPress="validmob" size="25" maxlength=10 />
            <label class="p1" id="l5"></label></td>
       	 	</tr>
        	
			<tr>
        	<td height="55"><label for="email">Email</label></td>
			<td><input type="email"  name="email" id="email" placeholder="Email Address"  size="30" />
            <label class="p1" id="l6"></label></td>
        	</tr>
        	
			<tr>
        	<td height="52"><label for="name">ADDRESS</label></td>
	   		<td><textarea cols="30" rows="4" name="address" id="address" placeholder="Full ddress" ></textarea>
            <label class="p1" id="l7"></label></td>
        	</tr>
       		
			<tr>
       	  	<td height="36"><label for="City ">CITY</label></td>
			<td><input type="text" name="city" id="city" placeholder="City"  size="30" />
            <label class="p1" id="l7"></label></td>
	    	</tr>
			
			<tr>
		 	<td height="36"><label for="State">STATE</label></td>
		  	<td><input type="text" name="state" id="state" placeholder="State"  size="30" />
            <label class="p1" id="l8"></label></td>
			</tr>
			
			<tr>
            <td height="35">
			<label for="country">COUNTRY</label></td>
		  	<td><input type="text" name="country" id="country" placeholder="Country" size="30"  />
            <label class="p1" id="l9"></label></td>
			</tr>
            
			<tr>
            <td height="46"><label for="pincode">PINCODE</label></td>
            <td><input type="text" name="pincode" id="pincode" placeholder="Pincode" size="30"  maxlength=6/>
            <label class="p1" id="l10"></label></td>
       	 	</tr>
		
      	</table>
      	
		<h2 align="left" class="details">&nbsp;&nbsp; LOGIN DETAILS</h2>
        <table width="532" height="178" class="table1">
        	<tr>
            <td width="141" height="41"><label>Username</label></td>
            <td width="379"><input type="text" name="username" id="username" placeholder="Username"   size="30" />
            				<span id="availability_status"></span> 
            <label class="p1" id="l11"></label></td>
            </tr>
            
			<tr>
            <td><label for="password">Password</label></td>
            <td><input type="password" name="pass" id="pass2" placeholder="Password"   onKeyUp="passwordst(this.value)" onBlur="" size="30" ><label class="p1" id="l12"></label>
            <div id="progress_bar"></div>
    		<span id="strength_text"></span>
    		<input type="hidden" name="strength_id" id="strength_id" value="1" /></td>
            </tr>
			
            <tr>
            <td height="38"><label for="cpassword">Confirm Password</label></td>
            <td><input type="password" id="cpass" placeholder="Repeat Password"  onBlur="conform()" size="30" disabled="true" >
            &nbsp;&nbsp;<label id="match"></label></td>
            </tr>
            
			<tr>
            <td><label for="utype">User Type</label></td>
            <td>
                <?php
                include('dbconnection.php');
                $qry = mysql_query("SELECT user_type FROM user_type");
               	echo "<select id='utype1' name='utype' style='width:215' onChange='typed()' >";
				echo "<option value=''>--User Type--</option>";
                while(($row=mysql_fetch_row($qry))!=NULL)
                {
                echo "<option value='$row[0]'>$row[0]</option>";
                }
                echo "</select>";
                ?>
                <td>
            </tr>
            
			<tr>
            </tr>
        </table>
        <div id="student" name="student">
        	<table width="376" class="table1">
				<tr>
				<td width="138"><label>Branch</label></td>
                <td width="226">
                
                <?php
                include('dbconnection.php');
                $qry = mysql_query("SELECT branch FROM branch");
               	echo "<select id='branch' name='branch' style='width:215'  >";
				echo "<option value=''>--Select--</option>";
                while(($row=mysql_fetch_row($qry))!=NULL)
                {
                echo "<option value='$row[0]'>$row[0]</option>";
                }
                echo "</select>";
                ?>
                </td>
				</tr>
            
			</table>
           
		</div>
        
		<div id="teacher" name="teacher">
			<table width="377" class="table1">
				<tr>
           
				<td width="138"><label>Department</label></td>
				<td width="227">
				<?php
                include('dbconnection.php');
                $qry = mysql_query("SELECT department FROM dept");
               	echo "<select id='dept' name='dept' style='width:215'  >";
                echo "<option value=''>--Select--</option>";
				while(($row=mysql_fetch_row($qry))!=NULL)
                {
                echo "<option value='$row[0]'>$row[0]</option>";
                }
                echo "</select>";
                ?>
                </td>
				</tr>
			</table>
		</div>
      
		<div class="captcha" align=left style="margin-left:200px;">
			<img src="captcha.php">
			<br>
			<input type="text"  id="code" placeholder="Enter the above code" size="15" name="vercode"  >
			<label class="p1" id="l13"></label> </div>
			<br>
			<br>
	<div style="margin-left:20px;" align=left>
    
			<input type="submit" class="btn" name="submit" style="width:150" value="Create Account" onClick="return validform()" >
			<input type="reset" class="btn" value="R E S E T" onClick="reset()"></div>
       
    </form><br>	     
</div>
</div>		

</body>
</html>

  <?php
include "footer.php";
?>                   
            
                       
            
            