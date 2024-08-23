<?php   
    require_once "./php/view/tela_home.php";
    class Usuario extends Home{
        public function getLogin(){
            $this->cabecalho();
            $this->navbar();

?>
            <div class="container">
                <div class="tudo">
                    <div class="tela_login">
                        <form action="" method="POST" class="form">
                            <label for="login" class="label">LOGIN:</label>
                            <input type="text" name="login" id="login" class="box" autocomplete="new-password" required>
                            <label for="senha" class="label">SENHA:</label>
                            <input type="password" name="senha" id="senha" class="box" autocomplete="new-password" required>
                            <input type="submit" class="botao" value="Entrar">
                        </form>
                    </div>
                </div>
            </div>
<?php

        }
        public function logout(){
        }
        public function postLogin(){
            $controller = new ControllerUser();
            $resultado = $controller->validarLogin();
            if ($usuario) {
                echo '<div class="alert alert-success" role="alert">Login bem-sucedido!</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Login ou senha inválidos.</div>';
            }
        }
        public function post(){
            $controller = new ControllerUser($conexao);
            $resultado = $controller->registrarUsusario();
            if ($resultado) {
                echo '<div class="alert alert-success" role="alert">Usuário cadastrado com sucesso!</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Erro ao cadastrar o usuário. Tente novamente.</div>';
            }
        }


        public function put(){
        }
        public function delete(){
        }
    }
?>