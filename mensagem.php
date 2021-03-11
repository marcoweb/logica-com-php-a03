<?php
$mensagem = '';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    switch($_POST['periodo']) {
        case 1:
            $mensagem = 'Bom Dia ' . $_POST['nome'];
            break;
        case 2:
            $mensagem = 'Boa Tarde ' . $_POST['nome'];
            break;
        case 3:
            $mensagem = 'Boa Noite ' . $_POST['nome'];
            break;
    }

    $mensagem_ternaria = ($_POST['periodo'] == 1) ? 'Bom ' : 'Boa ';

}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mensagem</title>
    </head>
    <body>
        <form action="mensagem.php" method="post">
            <label>Período</label>
            <select name="periodo">
                <option value="1">Manhã</option>
                <option value="2">Tarde</option>
                <option value="3">Noite</option>
            </select>
            <input type="text" name="nome" />
            <button type="submit">Enviar</button>
        </form>
        <h1>Mensagem</h1>
        <?php if($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
            <?php if($_POST['periodo'] == 1): ?>
                <p>Bom dia, <?= $_POST['nome'] ?></p>
            <?php elseif($_POST['periodo'] == 2): ?>
                <p>Boa Tarde, <?= $_POST['nome'] ?></p>
            <?php elseif($_POST['periodo'] == 3): ?>
                <p>Boa Noite, <?= $_POST['nome'] ?></p>
            <?php endif ?>

            <h2>Usando Switch</h2>
            <?= $mensagem ?>

            <h2>Operador Ternário</h2>
            <?= $mensagem_ternaria ?>
        <?php endif ?>
    </body>
</html>