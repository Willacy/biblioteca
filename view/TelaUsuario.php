<?php
require_once './controller/ControllerUsuario.php';
require_once './class/Usuarios.php';
class TelaUsuario
{
    private $controllerUsuario;
    public function telaLogin()
    {
        ?>
        <div class="container mt-5 bg-secondary">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Entrar</h4>
                            <form action="" method="POST">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="login" id="login" placeholder="Login"
                                        required>
                                    <label for="login">Login</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input class="form-control" type="password" name="senha" id="senha" placeholder="Senha"
                                        required>
                                    <label for="senha">Senha</label>
                                </div>

                                <button type="submit" class="btn btn-primary w-100">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    // Realizar login
    public function login()
    {
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        //echo $login . '||' . $senha;

        $this->controllerUsuario = new ControllerUsuario();

        $resultado = $this->controllerUsuario->verificarLogin($login, $senha);
        echo 'View -> ' . $resultado;
        // if ($resultado != null) {
        //     $_SESSION['usuario'] = $resultado;
        //     $_SESSION['logado'] = true;
        //     $_SESSION['mensagem'] = "Seja bem vindo {$_SESSION['usuario'][1]}!";
        //     header("Location: /biblioteca/home");
        // } else {
        //     $_SESSION['mensagem'] = 'Usuario não encontrado';
        //     header("Location: /biblioteca/login");
        // }


    }
}
