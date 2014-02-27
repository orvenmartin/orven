function validate(){
    var Valid = true;
    var a=document.forms["form"]["username"];
	
		if(a.value == null || a.value == "")
		{
		alert("All fields required"); 
		a.style.borderColor = "red";
        Valid = false;    
		
	var b=document.forms["form"]["password"];
		 
		if(b.value == null || b.value == "")
		{
		b.style.borderColor = "red";
        Valid = false;    
		
		}
		}
	return Valid;
}

function welcome()
{
alert("Welcome");
}