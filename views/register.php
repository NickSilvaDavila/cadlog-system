  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
  </head>
  <body>
    <div>
        <h2>Cadastro de usuario</h2>
        <form action="" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>

            <label for="email">Email</label>
            <input type="email" name="emial" id="email" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required>

            <label for="">Perfil:</label>
            <select name="perfil" id="perfil">
              <option value="admin">Admin</option>
              <option value="gestor">Gestor</option>
              <option value="colaborador">Colaborador</option>
            </select>

            <button type="submit">Cadastrar</button>
            
        </form>
        < a href="">Voltar ao Login</a>
    </div>
  </body>
  </html>