const output=document.getElementById("output");
const buttons=document.querySelectorAll("button");

for(let i=2;i<buttons.length-1;i++)
{
	buttons[i].addEventListener("click", ()=> { display(buttons[i].innerText); })
}
buttons[0].addEventListener("click",allclear);
buttons[1].addEventListener("click",del);
buttons[buttons.length-1].addEventListener("click",calculate);

function allclear(){  output.value=""; }
function display(charr){ output.value+=charr; }
function del(){
	if(output.value=="Error"){	output.value=""; }
	else{ output.value=output.value.slice(0,-1); }
}
function calculate(){
	try{   output.value=eval(output.value);  }
	catch(error) {   output.value="Error"; }
}
