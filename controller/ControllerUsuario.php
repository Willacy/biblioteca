<?php
require_once './class/Usuarios.php';
class ControllerUsuario
{
    private $usuario;
    public function verificarLogin($login, $senha)
    {
        $this->usuario = new Usuarios();
        $this->usuario->setLogin($login);
        $this->usuario->setSenha(sha1($senha));
        $resultado = $this->usuario->fazLogin($this->usuario->getLogin(), $this->usuario->getSenha());

        return $resultado;

    }

    public function getUsuario()
    {
        return $this->usuario;
    }
}