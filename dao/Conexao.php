<?php
// Conexão direta
// o @ suprime mensagem de erro
// $this->conn = @mysqli_connect("localhost:3306:db_pokefood","root","");

// Orientação a Objetos
abstract class Conexao
{
    protected $host, $user, $pass, $dba, $conn, $sql, $qr, $data, $status, $total_fileds, $error;

    public function __construct()
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->dba = "db_pokefood";
        self::connect();
    }
    public function connect()
    {
        $this->conn = @mysqli_connect($this->host, $this->user, $this->pass) or die("<ins><center>Erro ao acessar o banco de dados:</center></ins><br>" . mysqli_error($this->conn));
        $this->dba = @mysqli_select_db($this->conn, $this->dba) or die("<ins><center>Erro ao acessar o banco de dados:</center></ins><br>". mysqli_error($this->conn));
       // mysqli_set_charset($this->conn,"ut8");
        return $this->conn;
    }
    protected function exec_query($sql) {
        $this->qr = @mysqli_query($this->conn, $sql)
        or die("<ins><center>Erro ao executar a query: $sql </center></ins><br>". mysqli_error($this->conn));
        return $this->qr;
    }

    protected function list_qr($qr) {
        $this->data = @mysqli_fetch_assoc($qr);
        return $this->data;
    } 
    public function count_data($qr) {
        $this->total_fileds = @mysqli_num_rows($qr);
        return $this->total_fileds;
    }

    public function get_status() {
        return $this->status;
    }
}
