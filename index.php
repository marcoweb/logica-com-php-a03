<?php
$result = "Método GET";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $result = 'Método POST';
}

$var1 = 10;
$var2 = '10';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exemplo</title>
    </head>
    <body>
        <h1>Estruturas de Controle</h1>
        <p><?php echo $result ?></p>
        <p><?= $result ?></p>
        <form action="index.php" method="post">
            <input type="submit" />
        </form>
        <p>
            <?php
                if($result == 'Método POST') {
                    echo "<h2>Formulário Enviado</h2>";
                }
            ?>
            <?php if($result == 'Método POST') { ?>
                <h2>Formulário Enviado</h2>
            <?php } ?>

            <?php if($result == 'Método POST'): ?>
                <h2>Formulário Enviado</h2>
            <?php endif ?>
        </p>

        <?php if($var1 === $var2): ?>
            Valores Iguais
        <?php else:?>
            Valores Diferentes
        <?php endif ?>
    </body>
</html>