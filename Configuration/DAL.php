<?php
/**
 * Description of DAL
 *
 * @author efra
 */

class DAL{
    //put your code here
    private $db = "universidad";
    private $host = "localhost";
    private $pass = "";
    private $usuario = "root";
    private $con = null;
    
    public function connect() {
        $con = new mysqli();
        
        $con->connect($host, $usuario, $pass, $db);
        
        return $con; 
    }         
}

?>
