<?php require 'Controllers/controller.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style.css">
    <title>Cadastro de usuario</title>
</head>

<body>

<section class="new">
        <div class="do-new">
                <form method="POST" action="">
                        <p>Usuario</p>
                        <input name="userNew" type="text" required>
                        <p>Senha</p>
                        <input name="passwordNew" type="password" required>
                        <input name="actionNew" type="submit">
                        <p class="back" onClick="back()">Voltar</p>
               </form>
        </div>
    </section>

    
    <script src="javascript/script.js"></script>
</body>

</html>