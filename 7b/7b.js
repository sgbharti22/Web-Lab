const fm=document.getElementById("details");
const rec_cont1=document.getElementById("rec_cont");
const rec1=document.getElementById("rec");

fm.addEventListener("submit",function (event) {
event.preventDefault();
let val="";
for(let i=0;i<fm.elements.length-1;i++)
{
	if(fm[i].value.trim()===""){  val="empty";  }
	if(fm[i].name==="email"){
		if(!fm[i].value.includes("@") || !fm[i].value.includes("@")){
			val="invalid";
			break;
		}
	}
	if(fm[i].name==="mobile"){
		if(fm[i].value.length!==10){
			val="invalid";
			break;
		}
	}
	if(fm[i].name==="gen"){
		if(fm[i].value !=="M" && fm[i].value !=="F" && fm[i].value !=="O"){
			val="invalid";
			break;
		}
	}
}
if(val==="")
{
	for(let i=0;i<fm.elements.length-1;i++)
	{
		val+=fm[i].value+"\n";		
	}
}
if(val==="empty" || val==="invalid"){
	rec1.style.textAlign = "center";
}
else{
	rec1.style.textAlign = "left";
}
rec1.value = val;
rec_cont1.style.display = "block";

}
);