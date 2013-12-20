/*Función CryptoPassword*/
function cryptoPassword(pw){ //recibe el string y lo transforma a. string >> sha512 >> rmd160 >> md5.
	return hex_md5(hex_rmd160(hex_sha512(pw)));
}

/*Funcion criptPW*/
function criptPW(){
	document.getElementById("logPass").value=cryptoPassword(document.getElementById("logPass").value);
}

/*Funcion alfanumerico*/
function alfanumerico(palabra) //Recibe un string "palabra" y comprueba si está formado por numeros y letras
{
        var i;
        var numeros;
        var lletras;

        numeros=0;
        lletras=0;
        for(i=0;i<palabra.length;i++){
                if(palabra.charAt(i)>='0' && palabra.charAt(i)<='9'){
                        numeros++;
                }else{
                        lletras++;
                }
        }

        if(lletras>0 && numeros>0){
                return true;
        }else{
                return false;
        }
}
/*Funcion comprobación de mail*/
function mailValidation(texto){  //recibe "mail" como parametro y comprueba que esté correctamente escrito.
	
    var mailres = true;             
    var cadena = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ1234567890@._-";
     
    var arroba = texto.indexOf("@",0); 
    if ((texto.lastIndexOf("@")) != arroba) arroba = -1; 
     
    var punto = texto.lastIndexOf("."); 
                 
     for (var contador = 0 ; contador < texto.length ; contador++){ 
        if (cadena.indexOf(texto.substr(contador, 1),0) == -1){ 
            mailres = false; 
            break; 
     } 
    } 

    if ((arroba > 1) && (arroba + 1 < punto) && (punto + 1 < (texto.length)) && (mailres == true) && (texto.indexOf("..",0) == -1)) {
		mailres = true; 
    }else{ 
		mailres = false; 
    }       
    return mailres; 
}
/*Funcion dadesCorrectes  (registre d'usuari)*/
function dadesCorrectes()
{ 
	/*Cojemos todos los campos del formulario por la ID*/
	var nombre=document.getElementById("nombre").value;
	var apellidos=document.getElementById("apellidos").value;
	var uso=document.getElementById("uso").checked; 
	var login=document.getElementById("login").value;       
	var pass=document.getElementById("contra").value;
	var compPass=document.getElementById("contraComp").value;       
	var tlf=document.getElementById("telf").value;  
	var bio=document.getElementById("bio").value;   
	var mail=document.getElementById("mail").value;
	var mailComp=document.getElementById("mailComp").value;
	/*Iniciamos la variable de control de errores a TRUE*/
	var errores = true;
	//Se reejecutan los errores a null
	document.getElementById("login").style.borderColor =""; 
	document.getElementById("contra").style.borderColor ="";
	document.getElementById("contraComp").style.borderColor ="";
	document.getElementById("uso").style.borderColor ="";
	document.getElementById("telf").style.borderColor ="";
	document.getElementById("mail").style.borderColor="";
	document.getElementById("mailComp").style.borderColor="";
	//Se ocultan los avisos
	document.getElementById("errLog").style.display = "none";
	document.getElementById("errContra").style.display = "none";
	document.getElementById("errCompPass").style.display = "none";
	document.getElementById("errUso").style.display = "none";
	document.getElementById("errTlf").style.display = "none";
	document.getElementById("errTlf2").style.display = "none";
	document.getElementById("errMail").style.display = "none";
	document.getElementById("errCompMail").style.display = "none";
	//Se comprueban todos los campos uno a uno!
	if(login.length<1){
		document.getElementById("login").style.borderColor ="#FF0000";
		document.getElementById("errLog").style.display = "block";
	}else{
		if(pass.length<6 || !alfanumerico(pass)){
			document.getElementById("contra").style.borderColor ="#FF0000"; 
			document.getElementById("errContra").style.display = "block";
		}else{
			if(pass!=compPass){
				document.getElementById("contraComp").style.borderColor ="#FF0000";
				document.getElementById("errCompPass").style.display = "block";
			}else{
				if(mail.length<5 || !mailValidation(mail)){
					document.getElementById("mail").style.borderColor ="#FF0000";
					document.getElementById("errMail").style.display = "block";
				}else{
					if(mail!=mailComp){
						document.getElementById("mailComp").style.borderColor ="#FF0000";
						document.getElementById("errCompMail").style.display = "block";
					}else{
						if(!uso){
							document.getElementById("uso").style.borderColor ="#FF0000"; 
							document.getElementById("errUso").style.display = "block";
						}else{
							if(tlf.length!=9){
								document.getElementById("telf").style.borderColor ="#FF0000"; 
								document.getElementById("errTlf").style.display = "block";
							}else{
								if (tlf.charAt(0)!='6' && tlf.charAt(0)!='7'){
									document.getElementById("telf").style.borderColor ="#FF0000"; 
									document.getElementById("errTlf2").style.display = "block";
								}else{
									errores = false; /*(En caso de no detectarse errores se pone en FALSE)*/
								}
							}
						}
					}
				}
			}
		}
	}

		
	if(!errores){ /* << errores == false !*/
		document.getElementById("contra").value = cryptoPassword(pass);
		document.getElementById("contraComp").value = cryptoPassword(pass);
		return true;
	}else{
		return false;
	}
}
/*Fi DadesCorrectes()*/
function updateDades()
{       
	var nombre=document.getElementById("nombre").value;
	var apellidos=document.getElementById("apellidos").value;      
	var pass=document.getElementById("contra").value;
	var compPass=document.getElementById("contraComp").value;       
	var bio=document.getElementById("bio").value;   
	var errores=true;
	document.getElementById("contra").style.borderColor ="";
	document.getElementById("contraComp").style.borderColor ="";
	document.getElementById("errContra").style.display = "none";
	document.getElementById("errCompPass").style.display = "none";
	if(pass.length<6 || !alfanumerico(pass)){
		document.getElementById("contra").style.borderColor ="#FF0000"; 
		document.getElementById("errContra").style.display = "block";
	}else{
		if(compPass!=pass){
			document.getElementById("contraComp").style.borderColor ="#FF0000";
			document.getElementById("errCompPass").style.display = "block";
		}else{
			errores=false;
		}
	}
		
	if(!errores){ 
		document.getElementById("contra").value = cryptoPassword(pass);
		document.getElementById("contraComp").value = cryptoPassword(pass);
		return true;
	}else{
		return false;
	}
}

function recoveryPW(){
	var errores= true;
	var pass=document.getElementById("pww").value;
	var compPass=document.getElementById("pww2").value;       

	document.getElementById("pww").style.borderColor ="";
	document.getElementById("pww2").style.borderColor ="";
	document.getElementById("errContra").style.display = "none";
	document.getElementById("errCompPass").style.display = "none";
	
	if(pass.length<6 || !alfanumericos()){
		document.getElementById("pww").style.borderColor ="#FF0000"; 
		document.getElementById("errContra").style.display = "block";
	}else{
		if(compPass!=pass){
			document.getElementById("pww2").style.borderColor ="#FF0000";
			document.getElementById("errCompPass").style.display = "block";
		}else{
			errores=false;
		}
	}
	
	if(!errores){
		document.getElementById("pww").value = cryptoPassword(pass);
		document.getElementById("pww2").value = cryptoPassword(pass);
		return true;
	}else{
		return false;
	}
}