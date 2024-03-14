
function addToCart(n){
		
		document.getElementById("displayMyCart").innerHTML+=n + "<br>";
		

	

}
function showMyCart(){
	document.getElementById("displayMyCart").style.display="block";
	

}

function popupfunction(x)

{

document.getElementById('popup'+x).style.display='block';

document.getElementById('fade'+x).style.display='block';

}



function popupclose(x)

{

document.getElementById('popup'+x).style.display='none';

document.getElementById('fade'+x).style.display='none';

}