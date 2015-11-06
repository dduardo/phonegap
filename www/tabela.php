<?php

	$dsn      = 'mysql:host=localhost;dbname=cliente';
	$user     = 'root';
	$password = '';
	$conexao = new PDO($dsn,$user,$password);
	$stmt 	 = $conexao -> query("SELECT * FROM CLIENTE ORDER BY ID DESC");
?>

<!DOCTYPE html>
<!--
    Copyright (c) 2012-2014 Adobe Systems Incorporated. All rights reserved.

    Licensed to the Apache Software Foundation (ASF) under one
    or more contributor license agreements.  See the NOTICE file
    distributed with this work for additional information
    regarding copyright ownership.  The ASF licenses this file
    to you under the Apache License, Version 2.0 (the
    "License"); you may not use this file except in compliance
    with the License.  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing,
    software distributed under the License is distributed on an
    "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
     KIND, either express or implied.  See the License for the
    specific language governing permissions and limitations
    under the License.
-->
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="msapplication-tap-highlight" content="no" />
        <!-- WARNING: for iOS 7, remove the width=device-width and height=device-height attributes. See https://issues.apache.org/jira/browse/CB-4323 -->
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
        <link rel="stylesheet" type="text/css" href="css/index.css" />
        
		<link rel="stylesheet" href="css/jquery.mobile-1.1.2.min.css" />
		<script src="js/jquery-1.7.2.min.js"></script>
		<script src="js/jquery.mobile-1.1.2.min.js"></script>
		
		<title>Cadastro de cliente</title>
    </head>
    <body>
		<div class="control-group">
			<div class="cad-titulo">
				<span>LISTA DE CLIENTES</span>
			</div>
		</div>
		<table aling="Center" border="1">
			<thead>
				<tr style="font-size:15px; background:#ddd">
					<th>ID</th><th>NOME</th><th>CPF</th><th>RG</th><th>TEL</th><th>EMAIL</th>
				</tr>
			</thead>
			<tbody>
			
			<?php
				foreach($stmt as $valor){
			
			?>
				<tr>
					<td><?php echo $valor['id'];?></td>
					<td><?php echo $valor['nome'];?></td>
					<td><?php echo $valor['cpf'];?></td>
					<td><?php echo $valor['rg'];?></td>
					<td><?php echo $valor['tel'];?></td>
					<td><?php echo $valor['email'];?></td>
				</tr>
			<?php
				}
			
			?>
				
				
			</tbody>
		
		</table>
    </body>
</html>


