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
    public function fazLogin($usuario)
    {
        $login = $usuario->getLogin();
        $senha = $usuario->getSenha();

        $query = "SELECT * FROM usuarios WHERE login_usuario = :login";
        $stmt = $this->conexao->prepare($query);

        $stmt->bindParam(":login", $login);
        $stmt->execute();

        // Busca o usuário com o login fornecido
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($resultado && $resultado['senha_usuario'] === $senha) {
            // Login válido

            // Inseri os dados do banco no usuario;
            $usuario->setId($resultado['id_usuario']);
            $usuario->setNome($resultado['nome_usuario']);
            $usuario->setAtivo($resultado['ativo_usuario']);
            $usuario->setTipo($resultado['tipo_usuario']);
            //Retorna o usuario
            return $usuario;
        } else {
            // Login inválido
            return false;
        }
    }

}
