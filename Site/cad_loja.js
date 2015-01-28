 function valida() {
        var d = document.cont;

      if (d.idloja.value == "") {
            alert("Informe o código da Loja");
            d.idloja.focus();
            return false;
        }

		if (d.nome.value == "") {
            alert("Preencha o Campo Nome");
            d.nome.focus();
            return false;
        }
       	 if (d.cn.value == "") {
            alert("Informe o CNPJ da Loja");
            d.cn.focus();
            return false;
        }
          	if (d.end.value == "") {
            alert("Informe o Endereço da Loja");
            d.end.focus();
            return false;
        }
  				if (d.ger.value == "") {
           	 	alert("Informe o o Nome do Gerente");
            	d.ger.focus();
           		return false;
        }
					if (d.ie.value == "") {
           	 		alert("Informe o Numero da Incrição Estadual da Loja");
            		d.ie.focus();
           			return false;
        }

  
  
    
        return true;


        }

    

