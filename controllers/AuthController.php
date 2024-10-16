<?php

require_once 'models/user.php';

// Classe responsável pela autentificação do usuário
class AuthController
{
    // Função responsável pelo processo de login 
    public function login()
    {
        // Verifica se a requisição HTTP é do tipo POST, ou seja, se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            // Busca o usuário pelo email no banco de dados
            $user = User::findByEmail($email);

            // Verifica se o usuário foi encontrado e se a senha é válida
            if ($user && password_verify($senha, $user['senha'])) {
                session_start();

                // Define os dados do usuário na sessão
                $_SESSION['usuario_id'] = $user['id'];
                $_SESSION['perfil'] = $user['perfil'];

                // Redireciona para o dashboard após o login bem-sucedido
                header('Location: index.php?action=dashboard');
                exit(); // Importante para evitar que o script continue rodando
            } else {
                // Exibe a página de login com uma mensagem de erro
                $error = "Email ou senha incorretos!";
                include 'views/login.php';
            }
        } else {
            // Caso não seja uma requisição POST, apenas exibe a página de login
            include 'views/login.php';
        }
    }

    // Função responsável pelo processo de logout
    public function logout()
    {
        session_start();
        session_destroy();
        // Redireciona para a página principal após o logout
        header('Location: index.php');
        exit(); // Importante para garantir que o script pare de executar
    }
}
?>