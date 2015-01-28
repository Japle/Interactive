 function valida() {
        var d = document.cont;

        if (d.nome.value == "") {
            alert("Preencha o Campo Nome");
            d.nome.focus();
            return false;
        }
       	 if (d.dn.value == "") {
            alert("Preencha o Data de Nascimento");
            d.dn.focus();
            return false;
        }
          	if (d.email.value == "") {
            alert("Informe seu e-mail");
            d.email.focus();
            return false;
        }
  				if (d.ddd.value == "") {
           	 	alert("Informe o DDD de sua Cidade");
            	d.ddd.focus();
           		return false;
        }
					if (d.tel.value == "") {
           	 		alert("Informe um telefone para Contato");
            		d.tel.focus();
           			return false;
        }

  
  
    
        return true;


        }

    

