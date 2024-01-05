<?php require 'Controllers/controller.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TarefaFeita</title>
</head>
<body>
    

    
    <!-- Inicio de formulario -->

    <section class="login">
        <div class="do-login">
                <form method="POST" action="">
                        <p>Usuario</p>
                        <input name="user" type="text" required>
                        <p>Senha</p>
                        <input name="password" type="password" required>
                        <input name="action" type="submit">
                        <p onclick="redirect ()" class="new-user">Cadastrar conta</p>
                </form>
        </div>
    </section>

     <!-- Final de formulario -->







    <script src="Javascript/script.js"></script>
</body>
</html>