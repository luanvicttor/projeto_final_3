<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../css/bootstrap.min.css">
    <link rel="stylesheet" href="./../../css/index.css">
    <title>Biblioteca - Cadastro Usuario</title>
</head>

<body>
    <?php
    require_once __DIR__.'/../../src/nav_bar.php';
    require_once __DIR__.'/../controller/controller.php';
    
    

        // importando configurações
        //include_once '../src/bootstrap_components.php';
        // criando os inputs
        //createInput("nome_cliente", "text", "NOME");
        //createInput("endereco_cliente", "text", "ENDEREÇO");
        //createInput("telefone_cliente", "text", "TELEFONE");
        //createInput("email_cliente", "text", "E-MAIL");
        ?>
    </form>
</body>

    <div class="container">
        <div class="tudo">
            <div class="tela_login">
                <form action="" method="POST" class="form">
                    <button type="button" class="botao" onclick="window.location.href='cadastro_usuario.php'">Cadastro de Usuários</button>
                    <input type="submit" class="botao" value="Cadastro de Usuários">
                    <input type="submit" class="botao" value="Cadastro de Livros">
                    <input type="submit" class="botao" value="Movimentações">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
