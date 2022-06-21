<?php
/**
 
 */
class Database{
    private $dbname = 'epiz_31957567_pegawaian';
    private $dbuser = 'epiz_31957567';
    private $dbpwd = 'snFQoRdq3db';
    private $dbhost = 'sql104.epizy.com';
    public $conn;

    public function connectDB(){
        $this->conn = null;
        try{
            $this->conn = new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname,$this->dbuser,$this->dbpwd);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                }
        catch (PDOException $exception){
            echo "Error Koneksi: ".$exception->getMessage();
        }
        return $this->conn;
    }
}
?>