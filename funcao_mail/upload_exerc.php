<html>
<head>
<title>Untitled</title>
</head>
<body>
<form action="3_mail_anexo.php" enctype="multipart/form-data" method="post">
  <p>
  <input name="arquivo" type="file" id="arquivo">
  <br>
  <select name="tipo">
                  <option value="escolha" selected>Escolha no Card&aacute;pio</option>
                  <option value="entradas">Entradas</option>
                  <option value="calzones">Calzones</option>
                  <option value="saladas">Saladas</option>
                  <option value="pizzas_ind">Pizzas Individuais</option>
                  <option value="pizzas_doces">Pizzas Doces</option>
                  <option value="sobremesas">Sobremesas</option>
    </select>
  </p>
  <p>
    <input name="MAX_FILE_SIZE" type="hidden" id="MAX_FILE_SIZE" value="3000000000">
    <br>
    <input type="submit" name="entrar">							
	    
</p>
</form>						
</body>
</html>
