function validate(){
    var Valid = true;
    var a=document.forms["form"]["firstname"];
	
    if(a.value == null || a.value == ""){
	alert("All fields required"); 
	 a.style.borderColor = "red";
        Valid = false;    
		
		 var b=document.forms["form"]["lastname"];
		 
    if(b.value == null || b.value == ""){
	 b.style.borderColor = "red";
        Valid = false;    
		
	var c=document.forms["form"]["username"];
    if(c.value == null || c.value == ""){
	c.style.borderColor = "red";
    Valid = false;    
	
	var d=document.forms["form"]["password"];
	if(d.value == null || d.value == "")
	{
	d.style.borderColor = "red";
	Valid = false;
		
	}	
    }
    }
	}
    return Valid;
}