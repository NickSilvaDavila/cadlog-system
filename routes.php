<?php
// Inclui arquivos de controlador necessários para lidar com diferentes ações
require 'controllers/AuthController.php'; // Instancia o controlador de autenticação
require 'controllers/UserController.php'; // Instancia o controlador de usuário
require 'controllers/DashboardController.php'; // Instancia o controlador de dashboard

// Cria instâncias dos controladores para utilizar seus métodos
$authController = new AuthController();
$userController = new UserController(); // Corrigido o nome da variável
$dashboardController = new DashboardController(); // Corrigido o nome da variável

// Coleta a ação da URL, se não houver ação definida, usa 'login' como padrão
$action = $_GET['action'] ?? 'login'; // Usa operador de coalescência nula (??) para definir 'login' se 'action' não estiver presente

switch ($action) {
    case 'login':
        $authController->login();
        break;

    case 'logout':
        $authController->logout();
        break;

    case 'register':
        $userController->register(); // Corrigido o nome da variável
        break;

    case 'dashboard':
        $dashboardController->index(); // Corrigido o nome da variável
        break;

    default:
        $authController->login();
        break;
}
?>