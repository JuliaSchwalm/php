<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
    <?php
    $bool = false;
    $usuarios = array(
        array('usuario1', 'senha1'),
        array('usuario2', 'senha2'),
        array('usuario3', 'senha3')
        );

        if (isset($_POST['nome']) && isset($_POST['senha'])) {
    $usuarioTeste = $_POST ['nome'];
    $senhaTeste = $_POST ['senha'];
        
    foreach ($usuarios as $user){
        if ($user[0] == $usuarioTeste && $senhaTeste == $user[1]){
                    $bool = true;
                    break;
            
        }
        }
        if (!$bool){
            // global $login;
            header('Location: index.php?login=erro');
             exit();
         } else {
            header('Location: index.php?login=validado');
            exit();
         }
    };



    ?>

</body>
</html>