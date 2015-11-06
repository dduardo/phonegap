<?php
	
	$con = mysql_connect('localhost','root','');
		
	mysql_select_db('cliente',$con);
	
	$nome  = mysql_real_escape_string($_REQUEST['nome']);
	$cpf   = mysql_real_escape_string($_REQUEST['cpf']);
	$rg    = mysql_real_escape_string($_REQUEST['rg']);
	$tel   = mysql_real_escape_string($_REQUEST['tel']);
	$email = mysql_real_escape_string($_REQUEST['email']);
	
	$sql = "INSERT INTO CLIENTE(NOME, CPF,RG,TEL,EMAIL) VALUES('$nome','$cpf','$rg','$tel','$email');";
	$RES = 	mysql_query($sql);
	
	if($res == true){
		$cadastro = 1;
	}else{
		$cadastro = 0;
	}
	
	//devolve o valor para a aplicação
	echo(json_encode($cadastro))
	
?>