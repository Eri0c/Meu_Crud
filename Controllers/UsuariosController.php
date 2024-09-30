<?php

use Meucrud\MySql;

class UsuariosController {
    public function index(){
    if (isset($_POST['registrar'])){

        $nome = $_POST['nome'] ?? null;
        $email = $_POST['email'] ?? null;
        $senha = $_POST['senha'] ?? null;

        // Verificando se os campos foram preenchidos
        if (!$nome || !$email || !$senha) {
            echo ('Por favor, preencha todos os campos.');
        }
        else{
            $pdo = \Meucrud\MySql::connect();

            $registro = $pdo->prepare('INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)');
            if ($registro->execute(array($nome, $email, $senha))){
                echo ('Registrado com sucesso!');
            }else {
                echo 'Erro ao registrar. Verifique os dados novamente.';
            }
            
            
        }
    }

    //Renderizando a página de registro
    MainView::render('registrar');
  }
  
}