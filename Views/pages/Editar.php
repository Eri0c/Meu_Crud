<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
</head>
<body>
    <h1>Editar Usuário</h1>
 <?php if (!empty($usuario)): ?>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>" />
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>" required />
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $usuario['email']; ?>" required />
        <br>
        <input type="submit" name="atualizar" value="Atualizar Usuário" />
    </form>
    <?php else: ?>
        <p>Usuário nao encotrado.</p>
        <?php endif; ?>

    <a href="listar">Voltar à lista de usuários</a>
</body>
</html>
