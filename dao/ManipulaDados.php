<?php
include_once("Conexao.php");
class ManipulaDados extends Conexao{
    private $table;
    public function get_table(){
        return $this->table;
    }
    public function set_table($table){
        $this->table = $table;
    }
    public function get_all_data_table(){
        $this->sql = "SELECT * FROM $this->table";
        $this->qr = self::exec_query($this->sql);

        $dados = array();
        while ($row = self::list_qr($this->qr)){
            array_push($dados, $row);
        }
        return $dados;
    }
    public function validar_login($login, $password) {
        $this->sql = "SELECT * FROM $this->table WHERE email = '$login'";
        $this->qr = self::exec_query($this->sql);
        $linhas = self::count_data($this->qr);
        return $linhas > 0;
    }
}