<?php 
 use Meucrud\MySql;

 class ListarController {
    public function index () {
// Conectar ao banco 
$pdo = MySql::connect();

// Buscar todos os usuários cadastrados 
$query= $pdo->prepare('SELECT * FROM usuarios');
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

//Passar os dados para a view
MainView::render('listagem', $usuarios);
    }
 }
