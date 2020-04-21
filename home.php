<?php
$sessao = ['Home', 'Sobre nós', 'Contato', 'Login'];
$produtos = ['XBOX ONE', 'PS4', 'Nintendo Wii', 'Game Cube'];
$usuario = "Rafael Morais";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($sessao as $valor): ?>
            <li><?php echo $valor; ?></li>
        <?php endforeach; ?>
        <li><?php if($usuario == null){ ?>
            Usuário não logado
                <?php } else { ?>
                    <?php echo $usuario ?>
                <?php } ?>
        </li>
    </ul>

    <?php foreach($produtos as $produto){ ?>
        <h2><?= $produto ?></h2>
    <?php } ?>
</body>
</html>