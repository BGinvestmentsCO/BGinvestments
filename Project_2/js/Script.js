function validacion(){
	var name = document.getElementById("Name").value;
	var lastname = document.getElementById("Lastname").value;
	var city = document.getElementById("City").value;
	var user = document.getElementById("User").value;
	var password = document.getElementById("Pass").value;
	var email = document.getElementById("Email").value;
	var documento = document.getElementById("Document").value;
	if(name===""||lastname===""||city===""||user===""||pasword===""||email===""||documento===""){
		//permite que el formulario no se envie hasta que los datos sean correctos
		alert("llene todos los campos");
		return false;//para que en el formulario no borre los campos
	}
}
	
	

