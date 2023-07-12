<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">

    <title>04</title>
</head>

<body>
    <form action = "logica.php" method = "post">
    <fieldset style="width: 100px">
        <legend>Entre:</legend>
        <label>Usuario:<br><input type="text" name="nome" required maxlength="20" /></label><br>
        <label>Senha: <br><input type="password" name="senha" required /> </label><br><br>
        <button>Enviar</button>
    </fieldset>
</form>

<?php
        include 'logica.php';
        if (isset($_GET['login']) && $_GET['login'] == 'erro'){
           echo '<p>Usuário ou senha incorretos</p>';
        } else if (isset($_GET['login']) && $_GET['login'] == 'validado'){
            echo '<p>Bem vindo ao sistema!</p>';
        }
    
    ?>

</body>

</html>