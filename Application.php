<?php 
class Application
{
    private $controller;

    private function setApp(){
        // Explode a URL para identificar o controlador
        $url = explode('/', @$_GET['url']);

        // Se a URL estiver vazia, carregar o controlador 'Usuarios' por padrão
        $controllerName = !empty($url[0]) ? ucfirst(strtolower($url[0])) : 'Usuarios';
        $controllerFile = 'Controllers/' . $controllerName . 'Controller.php';

        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $controllerClass = $controllerName . 'Controller';
            $this->controller = new $controllerClass();
        } else {
            // Mostra uma página 404 personalizada
            echo 'Página não existe';
            die();
        }
    }

    public function run(){
        $this->setApp();
        if (method_exists($this->controller, 'index')) {
            $this->controller->index();
        } 
        if (method_exists($this->controller, 'atualizar') && $_SERVER['REQUEST_METHOD'] === 'POST' ){
            $this->controller->atualizar();
        }
    }
}
