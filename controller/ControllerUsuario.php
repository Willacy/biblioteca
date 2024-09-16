<?php
require_once './class/Usuarios.php';
class ControllerUsuario
{
    private $usuario;
    public function verificarLogin($login, $senha)
    {
        $this->usuario = new Usuarios();
        $resultado = $this->usuario->fazLogin($this->usuario->setLogin($login), $this->usuario->setSenha(sha1($senha)));
        return $resultado;

    }

    public function getUsuario()
    {
        return $this->usuario;
    }
}