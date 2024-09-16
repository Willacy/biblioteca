<?php
class TelaHome
{
    public function telaPrincipal()
    {
        $usuario = $_SESSION['usuario'];
        ?>
        <div>
            <h2>Bem vindo <?php echo $usuario['nome_usuario'] ?></h2>
        </div>
        <?php
    }
}