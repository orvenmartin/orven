function validate(){
    var Valid = true;
    var a=document.forms["form"]["title1"];
	
		if(a.value == null || a.value == "")
		{
		alert("All fields required"); 
		a.style.borderColor = "red";
        Valid = false;    
		
	var b=document.forms["form"]["area"];
		 
		if(b.value == null || b.value == "")
		{
		b.style.borderColor = "red";
        Valid = false;    
		
		}
		}
	return Valid;
}

