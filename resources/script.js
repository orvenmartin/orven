function validate()
{
    var Valid = true;
    var a=document.forms["form"]["title"];
	
    if(a.value == null || a.value == ""){
	alert("All fields required"); 
	 a.style.borderColor = "red";
        Valid = false;    
		
		 var b=document.forms["form"]["text"];
		 
    if(b.value == null || b.value == ""){
	 b.style.borderColor = "red";
        Valid = false;    
		
    }
	}
    return Valid;
}

	function alert()
	{
	var x;
	var r=confirm("Press a button!");
			if (r==true)
			{
				x="You pressed OK!";
			}
			else
		  {
		  x="You pressed Cancel!";
   		  } 
			document.getElementById("popup").innerHTML=x;
	}



