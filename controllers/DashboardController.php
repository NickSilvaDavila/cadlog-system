<?php
class DashboardController
{

    // Funçao index, responsavel por exibir a pagina dashboard
    public function index()
    {
          // Funçao que vai iniciar a sessao pra verificar se o usuario esta autentificado 

    // Inicia a sessao  para verificar se o usuario esta autentificado 
    session_start();
    if(!isset($_SESSION['usuario_id'])){
        // redireciona o usuario para a pagina inical
        header('Location: index.php');
        exit; // Garante que o script seja interrompido
    }
    // Se o usuario estiver autentificado, inclui a View 'dashboard', que exibe o painel de controle
    include 'views/dashboard.php';
    }
    
}
?>