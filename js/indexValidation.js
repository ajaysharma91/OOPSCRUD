
function validate(){
	
var name=$('#name').val();

var designation=$('#designation').val();

var age=$('#age').val();
if(age=="")
{
	alert("please enter age");
	return false;
}
/*var b = isNaN(typeof(age));
var len = name.length;
alert(!isNaN(typeof(age)));

	if(b == false) {alert("Not A Number"); return false;}*/

if(name.trim() == '' || len<2 ){
           alert("Please Enter Valid or Full Name");
           return false;
}

if(designation.trim()=='' || designation.strlen()<4){
           alert("Please Enter Valid Designation");
           return false;
}


if(age < 18 || age >70){
           alert("You are Not Eligible For This Position");
           return false;
}


return true;

}


