<?php
class Usuarios
{
    private $id;
    private $nome;
    private $login;
    private $senha;
    private $tipo;
    private $ativo;

    // Metodo Get e Set
    public function getId()
    {
        return $this->id;
    }
    public function setId($value)
    {
        $this->id = $value;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($value)
    {
        $this->nome = $value;
    }

    public function getLogin()
    {
        return $this->login;
    }
    public function setLogin($value)
    {
        $this->login = $value;
    }

    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($value)
    {
        $this->senha = $value;
    }

    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($value)
    {
        $this->tipo = $value;
    }

    public function getAtivo()
    {
        return $this->ativo;
    }
    public function setAtivo($value)
    {
        $this->ativo = $value;
    }

    // metodo Create
    public function criarUsuario(){
        
    }
}
