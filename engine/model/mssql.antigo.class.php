<?php 

class db {
    
    private $conn;

    public function db($host, $user, $pass, $data) {
             
        $conn = mssql_connect($host, $user, $pass);
        
        $this->conn = mssql_select_db ($data, $conn);
        
    }
    
    public function query($sql) {
        
        $query = mssql_query($sql, $this->conn);
        
        if($query){
            $this->query = $query;
            return true;
        }else{
            return false;
        }    
    }
    
    public function fetch_array() {
        while( $row = sqlsrv_fetch_array($this->query) ) {
              $return[] = $row;
        }        
        return $return;
    }
   

}

?>