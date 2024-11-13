<?php
session_start(); // Inicia a sessão, caso não tenha sido iniciada
 
// Verifica se o array $_SESSION e a chave 'perfil' estão definidos
if (isset($_SESSION['perfil'])):
?>
    <!DOCTYPE html>
    <html lang="pt-br">
 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Usuários</title>
        <link rel="stylesheet" href="css/list.css">
        <style>
        /* Reset de estilo padrão */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #5a3f95, #fc5c7d);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        main, div {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
            width: 100%;
            max-width: 450px;
            animation: slideIn 1s ease-out;
            text-align: center;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        h2 {
            font-size: 2.5rem;
            color: #5a3f95;
            margin-bottom: 1.5rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        label {
            font-size: 1rem;
            color: #555;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        input, select {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid transparent;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            font-size: 1rem;
            transition: border-color 0.3s, box-shadow 0.3s;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        input:focus, select:focus {
            border-color: #fc5c7d;
            outline: none;
            box-shadow: 0 0 12px rgba(252, 92, 125, 0.5);
        }

        button {
            padding: 0.75rem;
            background: linear-gradient(45deg, #5a3f95, #fc5c7d);
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background: linear-gradient(45deg, #3e2d6d, #e34867);
            transform: translateY(-5px);
        }

        button:active {
            transform: translateY(2px);
        }

        a {
            margin-top: 1rem;
            color: #fc5c7d;
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #d9466e;
            text-decoration: underline;
        }

        /* Estilo adicional para bordas elegantes */
        input, select {
            border: 2px solid #ddd;
        }

        input:focus, select:focus {
            border-color: #5a3f95;
            box-shadow: 0 0 12px rgba(90, 63, 149, 0.5);
        }
    </style>
    </head>
 
    <body class="<?= $_SESSION['perfil'] ?>"> <!-- Define a classe com base no perfil do usuário -->
        <div class="container">
            <h2>Lista de Usuários</h2>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Perfil</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
 
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['nome'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['perfil'] ?></td>
                            <td>
                                <!-- Permitir que admin e gestor editem -->
                                <?php if ($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor'): ?>
                                    <a href="index.php?action=edit&id=<?= $user['id'] ?>" class="btn">Editar</a>
                                <?php endif; ?>
 
                                <!-- Permitir que apenas admin exclua -->
                                <?php if ($_SESSION['perfil'] == 'admin'): ?>
                                    <a href="index.php?action=delete&id=<?=$user['id'] ?>" class="btn btn-delete" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
 
                </tbody>
            </table>
 
            <a href="index.php?action=dashboard" class="btn">Voltar ao Dashboard</a>
        </div>
    </body>
 
    </html>
 
<?php else: ?>
    <!-- Se $_SESSION['perfil'] não estiver definido, exibe uma mensagem -->
    <p>Erro: Você não tem permissão para visualizar esta página.</p>
<?php endif; ?>