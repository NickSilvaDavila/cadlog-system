<?php
// Inclui arquivos  de controlador necessarios para lidar com diferentes açoes 
require 'controllers/AuthController.php'; //  Instancia o controlador de autenticaçao
require 'controllers/UserController.php'; // Instancia o controlador de usuario
require 'controllers/DashboardController.php'; // Instancia o controlador de dashboard

// Cria instanciais dos controladores para utilizar seus metodos
$authController = new AuthController();
$userControler = new UserController();
$dashboard = new DashboardController();

?>