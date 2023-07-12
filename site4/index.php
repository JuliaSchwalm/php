<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>0</title>
</head>

<body>
    <form action = "inserir.php" method = "post">
    <fieldset style="width: 100px">
        <legend>Entre:</legend>
        <label>Nome:<br><input type="text" name="nome" required maxlength="20" /></label><br>
        <label>Curso:<br><input type="text" name="curso" required maxlength="20" /></label><br>
        <label>Cidade:<br><input type="text" name="cidade" required maxlength="20" /></label><br>
        <label>Idade:<br><input type="number" name="idade" required maxlength="20" /></label><br><br>
        <button>Enviar</button>
    </fieldset>
</form>

    <form action = "consulta.php" method = "post">
    <br><button>Consultar dados</button><br>
    </form>

</body>
</html>