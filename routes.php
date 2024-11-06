<?php
// Inclui arquivos de controlador necessários para lidar com diferentes ações
require 'controllers/AuthController.php'; // Instancia o controlador de autenticação
require 'controllers/UserController.php'; // Instancia o controlador de usuário
require 'controllers/DashboardController.php'; // Instancia o controlador de dashboard

// Cria instâncias dos controladores para utilizar seus métodos
$authController = new AuthController();
$userController = new UserController(); 
$dashboardController = new DashboardController(); 

// Coleta a ação da URL, se não houver ação definida, usa 'login' como padrão
$action = $_GET['action'] ?? 'login'; 

switch ($action) {
    case 'login':
        $authController->login();
        break;

    case 'logout':
        $authController->logout();
        break;

    case 'register':
        $userController->register();
        break;

    case 'dashboard':
        $dashboardController->index();
        break;
        
    case 'list':
        $userController->list(); // Especifique o nome correto do método aqui
        break;
   case 'edit':
     $id =$_GET['id'];
     $userController->edit($id);
    default:
        $authController->login();
        break;
}
?>