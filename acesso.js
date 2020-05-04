
function acesso(form){

/* Checa nome e senha - caso digite com letras maíuscula sera
convertido para letras minusculas */

form.nome.value = form.nome.value.toLowerCase()
form.senha.value = form.senha.value.toLowerCase()




if (form.nome.value == "tassio" && form.senha.value =="123"||
form.nome.value == "rafael" && form.senha.value =="456"||
form.nome.value == "marceçoo" && form.senha.value =="789"||
form.nome.value == "amanda" && form.senha.value =="321")
{
	
	location="reserva.php"
	
}
else if (form.nome.value == "adm" && form.senha.value =="123") {

	location="administrativo.php"

}	

else{
	
	form.nome.value=""
	form.senha.value=""
	
	alert ("Dados Incorretos")
	
}
}
