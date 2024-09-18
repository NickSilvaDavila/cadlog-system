<?php
class Database{
    // Utiliza o padrao Singleton, cujo o objetivo e garantir que apenas uma unica instancia de uma classe seja criada durante a execuçao do programa, e que essa instancia seja reutilizada sempre que necessario.

    private static $instance = null;

    // Metodo publico que retorna a conexao com BD
    public static function getConnection(){
        if(!self::$instance){
            $host    = 'localhost';
            $db      = 'sitema_usuarios';
            $user    = 'root';
            $password   = '';
        }
    }
}
?>