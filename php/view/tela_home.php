<?php   
    class Home {
        public function cabecalho(){
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Biblioteca - Login</title>
</head>
<?php
        }
        public function navbar(){
?>           
            <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body mb-4" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/projeto_final">BIBLIOTECA FEDERAL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <!-- TUDO QUE ESTIVER DENTRO DESSE TAG <ul> aparecera no NAVBAR -->

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/projeto_final">Ínicio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/projeto_final/Cadastro.php">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#login">Login</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="modal fade" id="login" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog bg-light p-4">
                        <form action="" method="POST" class="form">
                            <div class="form-group my-3">
                                <label for="nome_usuario">Nome do Usuário</label>
                                <input type="text" name="nome_usuario" id="nome_usuario" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="login_usuario">Login do Usuário</label>
                                <input type="text" name="login_usuario" id="login_usuario" class="form-control" required>
                            </div>
                            <div class="form-group my-3">
                                <label for="senha_usuario">Senha</label>
                                <input type="password" name="senha_usuario" id="senha_usuario" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </form>
            </div>
            </div>
<?php
        }
        public function home(){
            $this->cabecalho();
            $this->navbar();
?>
            <html>
            <body>
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
<?php  
        
        }
    }

