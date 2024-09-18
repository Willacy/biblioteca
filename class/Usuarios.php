<?php

require_once './src/Conexao.php';
class Usuarios extends Conexao
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
    public function criarUsuario()
    {

    }

    // Metodo fazer login
    public function fazLogin($login_usuario, $senha_usuario)
    {
        return 'Tela Model';
        // $conn = $this->getConexao();
        // $query = "SELECT * FROM usuarios WHERE login_usuario = :login_usuario AND senha_usuario = :senha_usuario";
        // $stmt = $conn->prepare($query);

        // $stmt->bindParam(":login_usuario", $login_usuario, PDO::PARAM_STR);
        // $stmt->bindParam(":senha_usuario", $senha_usuario, PDO::PARAM_STR);

        // $stmt->execute();

        // $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        // $_SESSION['msn'] = $usuario['id_usuario'];
        // if ($usuario) {
        //     return $usuario;
        // } else {
        //     return null;
        // }
    }
}
