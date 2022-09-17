<?php
//nome da classe
class Administrador
{ // análise (problema) / projeto (solução) - ADS -> {análise de desenvolvimento de sistema}
    //atributos
    private $id; //privado
    private $nome;
    private $email;
    private $login;
    private $senha;
    //metodos e o compotamentos da classe

    //métodos (comportamentos) construtores / 

    // métodos da classe (definidos pelo usúario) - análise
    // método de acesso - getter e seters (get(recuperar); set(atribuir);)
    // obterId() inserir()
    public function getId()
    { //encapsulamento e polimorfismo

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
    public function getEmail()
    {

        return $this->email;
    }
    public function setEmail($value)
    {
        $this->email = $value;
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
    public function loadById($id)
    {
        $sql = new SqlSenac();
        $resultados =
            $sql->select(
                "SELECT * FROM tb_administrador WHERE id =:id",
                array(':id' => $id)
            );
        if (count($resultados) > 0) {
            $this->setData($resultados[0]);
        }
    }
    public static function getList()
    {
        $sql = new SqlSenac();
        return $sql->select("SELECT * FROM tb_administrador ORDER BY nome");
    }
    public static function search($nome_adm)
    {
        $sql = new SqlSenac();
        return $sql->select(
            "SELECT * FROM tb_administrador WHERE nome LIKE :nome",
            array(":nome" => "%" . $nome_adm . "%")
        );
    }
    /*Administrador::getList()*/
    public function efetuarLogin($login, $senha)
    {
        $sql = new SqlSenac();
        $senha_cript = md5($senha);
        $resultado = $sql->select(
            "SELECT * FROM tb_administrador 
        WHERE login = :login AND senha =:senha",
            array(":login" => $login, ":senha" => $senha_cript)
        );
        if (count($resultado) > 0) {
            $this->setData($resultado[0]);
        }
    }
    public function setData($dados)
    {
        $this->setId($dados['id']);
        $this->setNome($dados['nome']);
        $this->setEmail($dados['email']);
        $this->setLogin($dados['login']);
        $this->setSenha($dados['senha']);
    }
}
