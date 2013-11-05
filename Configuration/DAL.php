<?php
/**
 * Description of DAL
 *
 * @author efra
 */

class DAL{
    //put your code here
    public $db = "universidad";
    public $host = "localhost";
    public $pass = "";
    public $usuario = "root";
    public $con = null;
    
    public function connect() {
        $this->con = new mysqli();

        $this->con->connect($this->host, $this->usuario, $this->pass, $this->db);
        
        return $this->con; 
    }         
}

?>
