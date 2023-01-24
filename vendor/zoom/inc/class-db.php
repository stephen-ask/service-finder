<?php

class DB {
    private $dbHost     = "54.255.125.42";
    private $dbUsername = "we_discover_user";
    private $dbPassword = "@ufhb43^j@*$h";
    private $dbName     = "we_discover";
    private $db;

    public function __construct(){
        if(empty($this->db)){
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
    }
  
    public function is_table_empty() {
        $result = $this->db->query("SELECT id FROM zoom_oauth WHERE provider = 'zoom'");
        if($result->num_rows) {
            return false;
        }
  
        return true;
    }
  
    public function get_access_token() {
        $sql = $this->db->query("SELECT provider_value FROM zoom_oauth WHERE provider = 'zoom'");
        $result = $sql->fetch_assoc();
        return json_decode($result['provider_value']);
    }
  
    public function get_refersh_token() {
        $result = $this->get_access_token();
        return $result->refresh_token;
    }
  
    public function update_access_token($token) {
        if($this->is_table_empty()) {
            $this->db->query("INSERT INTO zoom_oauth(provider, provider_value) VALUES('zoom', '$token')");
        } else {
            $this->db->query("UPDATE zoom_oauth SET provider_value = '$token' WHERE provider = 'zoom'");
        }
    }
}