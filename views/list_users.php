<?php
  session_start();

   if(isset($_SESSION['perfil'])):
    
?>

<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
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

        .container {
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1.5rem;
        }

        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #5a3f95;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a {
            color: #fc5c7d;
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #d9466e;
            text-decoration: underline;
        }

        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
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

        .btn:hover {
            background: linear-gradient(45deg, #3e2d6d, #e34867);
            transform: translateY(-5px);
        }

        .btn:active {
            transform: translateY(2px);
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
                <?php foreach($users as $user): ?> <!-- Corrigido a sintaxe do foreach -->
                <tr>
                    <td><?= $user['id'] ?></td> <!-- Corrigido para exibir corretamente os valores -->
                    <td><?= $user['nome'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['perfil'] ?></td>
                    <td>
                        <?php if($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor'): ?>
                            <a href="edit.php?id=<?= $user['id'] ?>">Editar</a> <!-- Link para a edição -->
                            <a href="delete.php?id=<?= $user['id'] ?>">Excluir</a> <!-- Link para exclusão -->
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?> <!-- Fim do foreach -->
            </tbody>
        </table>
 
        <a href="dashboard.php" class="btn">Voltar ao Dashboard</a> <!-- Link para voltar ao dashboard -->
    </div>
</body>
 
</html>

<?php else: ?>
    <p>Erro: Você não tem permissão para visualizar essa página</p>
<?php endif; ?>