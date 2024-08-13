<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>Biblioteca</title>
</head>

<body>
    <?php
    require_once './src/nav_bar.php'
    ?>
    <div class="container">
        <div class="tudo">
            <div class="tela_login">
                <form action="" class="form">
                    <label for="login" class="label">LOGIN:</label>
                    <input type="text" name="login" id="login" class="box">
                    <label for="senha" class="label">SENHA:</label>
                    <input type="password" name="senha" id="senha" class="box">
                    <input type="submit" class="botao">

                </form>
            </div>
        </div>
    </div>
</body>

</html>