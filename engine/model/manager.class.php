<?php

require_once("mssql.class.php");

class manager
{
    
    public $username;
    public $email;
    public $level;
    public $userid;
    private $db;
    
    public function manager ($host, $user, $pass, $data){
        $this->db = new db($host, $user, $pass, $data);
        
        if($_SESSION['username']){
            $query = $this->db->query("SELECT a.* FROM site_users a WHERE a.email = '".$_SESSION['username']."'");
        
            if($query){
            
                while($row = $this->db->fetch_array()) {         
                    $this->email            = $row[0]['email'];
                    $this->username         = $row[0]['name'];
                    $this->level            = $row[0]['userlevel'];
                    $this->userid           = $row[0]['id'];
                }
            }
        }
    }
    
    public function startSession($email, $password) {
        $pemail = stripslashes($email);
        $ppass = md5($password);
        
        $query = $this->db->query("SELECT a.* FROM site_users a WHERE a.email = '".$pemail."' AND a.password = '".$ppass."'");
        
        if($query){
            
            while($row = $this->db->fetch_array()) {         
                $_SESSION['username']   = $row[0]['email'];
                $_SESSION['name']       = $row[0]['name'];
                $_SESSION['level']      = $row[0]['userlevel'];
                $_SESSION['userid']     = $row[0]['id'];
            }
            
            return true;
        }else{
            return false;
        }
    }
    
    private function getUserInfo($user, $data) {
        $query = $this->db->query("SELECT ".$data." FROM site_users WHERE id = '".$user."'");
        return $query;
    }
    
    public function siteAddNews($title, $content, $author, $status) {
        
        $title      = stripslashes($title);
        $content    = stripslashes($content);
        $author     = $author;
        $status     = $status;
        
        $query = $this->db->query("INSERT INTO site_news (title, content, author, date, status) VALUES ('".$title."', '".$content."', '".$author."', CURRENT_TIMESTAMP, '".$status."')");
        
        if($query) {
            return true;
        }else{
            return false;
        }
        
    }
    
    public function siteUpdNews($title, $content, $author, $status, $news) {
        $title      = stripslashes($title);
        $content    = stripslashes($content);
        $author     = $author;
        $status     = $status;
        
        $query = $this->db->query("UPDATE site_news
        
            SET title   = '".$title."',
            content     = '".$content."',
            author      = '".$author."',
            status      = '".$status."',
            udate       = CURRENT_TIMESTAMP
            
            WHERE id = ".$news."
            
            ");
        
        if($query) {
            return true;
        }else{
            return false;
        }
    }
    
    public function siteDelNews($news) {
                
        $query = $this->db->query("DELETE FROM site_news
            WHERE id = ".$news."
            ");
        
        if($query) {
            return true;
        }else{
            return false;
        }
    }
    
    public function siteImageUpload() {
        
    }
    
    public function systemAddUser($username, $email, $password) {
        
        $email      = stripslashes($email);
        $username   = stripslashes($username);
        $password   = md5($password);
    
        $query = $this->db->query("INSERT INTO site_users (email, password, name, userlevel) VALUES ('".$email."', '".$password."', '".$username."', '10')");
        
        if($query) {
            return true;
        }else{
            return false;
        }
    }
    
    public function siteUpdUser($username, $user) {
        
        $username   = stripslashes($username);
        
        $query = $this->db->query("UPDATE site_users
        
            SET name    = '".$username."'
            
            WHERE id = ".$user."
            
            ");
        
        if($query) {
            return true;
        }else{
            return false;
        }
    }
    
    public function systemDelUser($userid) {
    
        $query = $this->db->query("DELETE FROM site_users WHERE id = '".$userid."'");
        
        if($query) {
            return true;
        }else{
            return false;
        }
    }
    
    
    public function saveNewPassword($password) {
        $password   = stripslashes($password);
        
        $password = md5($password);
        
        $query = $this->db->query("UPDATE site_users
        
            SET password    = '".$password."'
            
            WHERE id = ".$this->userid."
            
            ");
        
        if($query) {
            return true;
        }else{
            return false;
        }
    }
    
    public function getSystemStatus(){
        $query = $this->db->query("SELECT status,type FROM site_system");
        
        if($query){
            
            while($row = $this->db->fetch_array()) {         
                return $row[0]['status'];
            }
        }
    }
    
    public function changeSystemStatus($status) {
        $query = $this->db->query("UPDATE site_users
        
            SET status    = '".$status."'
            
            
            ");
        
        if($query) {
            return true;
        }else{
            return false;
        }
    }
}

?>