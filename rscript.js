function matchp() {
	var opass=document.getElementById("opass").value;
	var rpass=document.getElementById("rpass").value;
	if(opass!=rpass)
	{
		document.getElementById("mpass").value="  password not matching..!";		
	}else{document.getElementById("mpass").value="  password matching..!";}
	}