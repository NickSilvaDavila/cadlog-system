<?php

require_once 'models/user.php';

// classe responsavel pela autentificaçao do usuario
class AuthController
{
    // Funçao responsavel pelo processo de login 
    public function login(){

        // Verifica se a requisiçao HTTP e do tipo POST, ou seja, se o formulario foi enviado
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = $_POST['email'];
            $senha = $_POST['senha'];

        }
    }
}

?>