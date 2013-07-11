
function reset()
{
	var x=document.getElementById("Fname").value;
	var t=document.getElementById("Lname").value;
	var m=document.getElementById("age").selectedIndex;
	var n=document.getElementById("bday").value;
	var p=document.getElementById("mnumber").value;
	var q=document.getElementById("email").value;
	var r=document.getElementById("address").value;
	var s=document.getElementById("city").value;
	var u=document.getElementById("country").value;
	var v=document.getElementById("state").value;
	var w=document.getElementById("pincode").value;
	var y=document.getElementById("username").value;
	var z=document.getElementById("pass").value;
	
	x='NULL';
	y='NULL';
	z='NULL';
	w='NULL';
	t='NULL';
	m='NULL';
	n='NULL';
	p='NULL';
	q='NULL';
	r='NULL';
	s='NULL';
	u='NULL';
	v='NULL';
	
}
function validform()
{
	
	var x=document.getElementById("Fname").value;
	var t=document.getElementById("Lname").value;
	var m=document.getElementById("age").value;
	var n=document.getElementById("bday").value;
	var p=document.getElementById("mnumber").value;
	var q=document.getElementById("email").value;
	var r=document.getElementById("address").value;
	var s=document.getElementById("city").value;
	var u=document.getElementById("country").value;
	var v=document.getElementById("state").value;
	var w=document.getElementById("pincode").value;
	var y=document.getElementById("username").value;
	var z=document.getElementById("pass2").value;
	var i=document.getElementById("cpass").value;
	var j=document.getElementById("utype1").selectedIndex;
	var k=document.getElementById("code").value;
	var l=document.getElementById("match");
	if(x=="")
	{
		alert("Enter First Name");
		return false;
	}
	else
	{
		
		if(t=="")
		{
		alert("Enter last Name");
		return false;
		}
		else
		{
			
			if(m=="")
			{
			alert("Enter Age");
			return false;
			}
			else
			{
				
				if(n=="")
				{
				alert("Enter Date of Birth");
				return false;
				}
				else
				{
					if(p=="" || p.length<"10")
					{
					alert("Enter a valid  Mobile Number");
					return false;
					}
					else
					{
						
						var atpos=q.indexOf("@");
						var dotpos=q.lastIndexOf(".");
						if (q=="" || atpos<1 || dotpos<atpos+2 || dotpos+2>=q.length)
 						 {
 						 alert("Not a valid e-mail address");
 						 return false;
  						}
						
						else
						{
							if(r=="")
							{
							alert("Enter Address");
							return false;
							}
							else
							{
								if(s=="")
								{
								alert("Enter City");
								return false;
								}
								else
								{
									if(u=="")
									{
										alert("Enter Country");
										return false;
									}
									else
									{
										if(v=="")
										{
											alert("Enter State");
											return false;
										}
										else
										{
											if(w=="")
											{
												alert("Enter Pincode");
												return false;
											}
											else
											{
												if(y=="")
												{
													alert("Enter Username Name");
													return false;
												}
												else
												{
													if(z=="")
													{
													alert("Enter password");
													return false;
													}
													else
													{
														if(i=="")
														{
															alert("Please enter Confirm Password");
															return false;
														}
														else
														{
															if(l.innerHTML=="Not Matched")
															{
																alert("Password should be matched");
																return false;
															}
															else
															{
																if(!j)
																{
																alert("Please Select User Type");
																return false;
																}
																else
																{
																	if(k=="")
																	{
																	alert("Enter the verification code");
																	return false;
																	}
																	else
															
																	{
																	return true;
																	}
																}
															}
														}
											}
										}
										
									}
								}
							}
							
						}
						
					}
				}
				
			}
		}
		
	}
	}
	}
	
form1.submit;
	
}
	

function passwordst(pwd)
{
	var strength_text = document.getElementById("strength_text");
 	var strength_id = document.getElementById("strength_id");
 	var progress_bar = document.getElementById("progress_bar");
	var cp=document.getElementById("cpass");
 	

 	if (strength_text == null)
 	{
  		return;
 	}

	strength_id.value = 0;

 	var width = pwd.length * 5;

 	if (pwd.length == 0)
 	{
  		strength_text.innerHTML = '&nbsp;';
  		progress_bar.style.backgroundColor = '#FFFFFF';
		cp.disabled=true;
 	}
 	else if (pwd.length >= 1 & pwd.length <=3)
 	{
  		strength_text.innerHTML = 'Too short';
  		progress_bar.style.backgroundColor = '#FF0';
		cp.disabled=true;
 	}
	else if (pwd.length >= 4 & pwd.length <6)
 	{
  		strength_text.innerHTML = 'Short';
  		progress_bar.style.backgroundColor = '#F60';
 	}
	else if (pwd.length >= 6 & pwd.length<8)
 	{
  		strength_text.innerHTML = 'Medium';
  		progress_bar.style.backgroundColor = '#390';
  		strength_id.value = 1;
		cp.disabled=false;
	}
 	else if (pwd.length >= 8 & pwd.length <10)
 	{
  		strength_text.innerHTML = 'Strong';
  		progress_bar.style.backgroundColor ='#360' ;
  		strength_id.value = 2;
		cp.disabled=false;
 	}
 	
	else if (pwd.length >= 10)
 	{
  		strength_text.innerHTML = 'Very Strong';
  		width = 45;
  		progress_bar.style.backgroundColor = '#F00';
  		strength_id.value = 3;
		cp.disabled=false;
 	}
	progress_bar.style.width = width + '%';
	//document.getElementById('password_strength').style.display = (pwd.length == 0);
	
}

function conform()
{
	var pass=document.getElementById("pass2").value;
	var cpass=document.getElementById("cpass").value;
	var m=document.getElementById("match");
	
	if(pass!=cpass)
	{
		
		
		m.innerHTML='Not Matched';
	}
	else if(pass=="" && cpass=="")
	{
		m.innerHTML='Enter Some Value';
	}
	else
	{
		m.innerHTML='Matched';
	}
}

function typed()
{
	var t=document.getElementById("utype1").value;
	
	if(t == "Student")
	{
		document.getElementById("student").style.display="block";
		document.getElementById("teacher").style.display="none";
	}
	if(t == "Teacher")
	{
		document.getElementById("teacher").style.display="block";
		document.getElementById("student").style.display="none";
	}
	if(t == "")
	{
		document.getElementById("teacher").style.display="none";
		document.getElementById("student").style.display="none";	
	}
		
}

