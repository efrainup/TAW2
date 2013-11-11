<?php

include_once "../Configuration/DAL.php";

include_once "IModel.php";
/**
 * Description of AModel
 *
 * @author efra
 */
abstract class AModel implements IModel{    
    protected $con;
   /* protected $errorCodes = [
        0 => "Success"
    ];*/
    
    public function AModel(){
        $dal = new DAL();
        $this->con = $dal->connect();
    }
    
    
}

?>
