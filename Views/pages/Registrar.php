<!DOCTYPE html>
<html>
<head>
	<title>Login na Rede Social</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH_STATIC ?>" rel="stylesheet">




</head>

<body>

	<div class=""></div>

	<div class="">

		

		<div class="form-login">
				<h3 style="text-align: center;">Crie sua Conta!</h3>
				<form method="post">
					<input type="text" name="nome" placeholder="Seu nome...">
					<input type="text" name="email" placeholder="E-mail...">
					<input type="password" name="senha" placeholder="Senha...">
					<input type="submit" name="acao" value="Criar Conta!">
					<input type="hidden" name="registrar" value="registrar" />
				</form>
				
		</div><!--form-login-->

	</div>
	<a href="editar">Editar Usuario</a>
    <a href="listar">Listar Usuarios</a>
</body>
</html>