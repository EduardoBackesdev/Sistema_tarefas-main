<?php require 'Controllers/controller.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style.css">
    <title>App - TarefaFeita</title>
</head>
<body>

    <section class="sectionTask">
        <div class="addTask">
            <form method="POST">
                <input name="nameTask" type="text" placeholder="Nome da tarefa">
                <input name="contentTask" type="text" placeholder="Escreva sua tarefa">
                <input name="addTask" type="submit" placeholder="adicionar">
            </form>
        </div>
    </section>

    <section>
        <div class="showTask">
        <?php
                $task = new task();
                $task->select();
        ?>
        </div>
    </section>


    
</body>
</html>