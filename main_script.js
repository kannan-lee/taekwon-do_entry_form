function havl(i){
if(i){
document.getElementById("l").style.color="yellow";
}
else{
document.getElementById("l").style.color="#737778";
}
}
function exit(){
document.getElementById("signup_popup").style.display="none";
document.getElementById("transparent").style.display="none";
}
function val()
{
	var re = /^[A-Za-z\s]+$/;
    if(!re.test(register.name.value))
	{	
	alert("enter valid name");
		return false;
	}
	else if(register.weight.value<=5)
	{
		alert("enter valid weight");
		return false;
	}
	else if(register.height.value<=5)
	{
		alert("enter valid height");
		return false;
	}
}
function signup(){
document.getElementById("transparent").style.display="block";
document.getElementById("signup_popup").style.display="block";
}
