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
    public function get_id_by_name($nome){
        $this->sql = "SELECT * FROM $this->table WHERE nome='$nome'";
        $this->qr = self::exec_query($this->sql);

        
        $row = self::list_qr($this->qr);
            
        return $row['id'];
    }


    public function get_all_data_by_id($pk_name, $pk_value){
        $this->sql = "SELECT * FROM $this->table WHERE $pk_name = $pk_value";
        $this->qr = self::exec_query($this->sql);

        return self::list_qr($this->qr);
    }

    public function validar_login($login, $password) {
        $this->sql = "SELECT * FROM tb_usuario WHERE email = '$login' AND senha = '$password'";
        $this->qr = self::exec_query($this->sql);
        $linhas = self::count_data($this->qr);
        return $linhas > 0;
    }

    public function insert($table, $fields, $data) {
        $this->sql = "INSERT INTO $table($fields) VALUES ($data)";
        if(self::exec_query($this->sql))
            $this->status="Inserido com sucesso";
        else {
            $this->status="Erro ao inserir\n" . mysqli_error($this->conn);
        }
    }

    public function update($table, $fields, $data, $pk_name, $pk_value) {
        $pairs = implode(', ', array_map(function($column, $value) {
            return "$column = '$value'";
        }, $fields, $data));
        $this->sql = "UPDATE $table SET $pairs WHERE $pk_name = $pk_value";
        echo $this->sql;
        if(self::exec_query($this->sql))  {
            $this->status= "Alterado com sucesso";
        }
        else {
            $this->status= "Erro ao alterar na tabela $table\n" . mysqli_error($this->conn);
        }
    }

    public function delete($table, $pk_name, $pk_value) {
        $this->sql = "DELETE FROM $table WHERE $pk_name = $pk_value";
        if(self::exec_query($this->sql)) {
            $this->status= "Excluido com sucesso!";
        }
        else {
            $this->status= "Erro ao excluir na tabela $table\n". mysqli_error($this->conn);
        }
    }

    public function get_by_fk($fk) {
        $this->sql = "SELECT * 
        FROM tb_comida
        WHERE id_restaurante = $fk;";
        $dados = array();
        while ($row = self::list_qr($this->qr)){
            array_push($dados, $row);
        }
        return $dados;
    }
}