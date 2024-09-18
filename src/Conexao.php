<?php
class Conexao
{
    protected $conexao = null;

    public function __construct()
    {
        try {
            $this->conexao = new PDO('mysql:host=localhost;dbname=bd_biblioteca;port=3306', 'root', '');
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "Erro de conexão: " . $e->getMessage();
        }
    }

    public function getConexao()
    {
        return $this->conexao;
    }
}