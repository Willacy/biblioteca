<?php
require_once './class/Usuarios.php';
class ControllerUsuario
{
    private $usuario;
    public function verificarLogin($login, $senha)
    {
        // Inicializa um novo usuario e passa os dados de logi para ele
        $this->usuario = new Usuarios();
        $this->usuario->setLogin($login);
        $this->usuario->setSenha(sha1($senha));
        // Tenta fazer login
        $resultado = $this->usuario->fazLogin($this->usuario);
        // Se o usuario existir na base de dados
        if ($resultado === false) {

        }


    }

    public function getUsuario()
    {
        return $this->usuario;
    }
}