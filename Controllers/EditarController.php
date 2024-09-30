<?php 

use Meucrud\MySql;

class EditarController {
    public function index(){

        // Verifica se um ID de usuario foi passado pela URL
        $id = $_GET['id'] ?? null;

        $usuario = null;

       
        

        // Se um ID foi passado, busca os dados do usuario
        if ($id){
             //Conectar ao banco de dados
            $pdo = MySql::connect();

            $query = $pdo->prepare('SELECT * FROM usuarios WHERE id = ?');
            $query->execute([$id]);
            $usuario = $query->fetch(PDO::FETCH_ASSOC);

            if (!$usuario) {
                echo ' Usuario nao encontrado.';
                return; // Para garantir que o restante do codigo nao seja executado
            }

        } else{
            echo ' Id de usuario nao fornecido';
            return; 
        }

        // Passa os dados do usuario para a view de edição

        MainView::render('editar', $usuario);
    }

    public function atualizar(){
        // Verifica se o formulario foi enviado

        if (isset($_POST['atualizar'])){
            $id = $_POST['id'] ?? null;
            $nome = $_POST['nome'] ?? null;
            $email = $_POST['email'] ?? null;

            // Conectar ao banco de dados 
            $pdo = MySql::connect();

            echo "ID do usuário: " . htmlspecialchars($id);


            // Atualiza os dados do usuario no banco de dados 
            $query = $pdo->prepare('UPDATE usuarios SET nome =?, email = ? WHERE id = ?');

            if ($query->execute([$nome, $email, $id])){
                echo 'Usuario atualizado com sucesso!';

            }else {
                echo ' Erro ao atualizar usuario. Tente novamente.';
            }
        }
    }
}