<?php

/**
 * Description of Connection
 *
 * @author gosia
 */
class Connection {

    public $mysqli;
 
    /**
     * Constructor
     */
    public function __construct(){
        
        require 'configuration.php'; 
        
        // Creation of a new connection:
        $this->mysqli = new mysqli(
                                    $serverName,
                                    $userName,
                                    $password,
                                    $databaseName
                                );
        
        // Checking whether the connection succeeded
        if ($this->mysqli->connect_error) {
            die('Connection unsuccessful. Error: ' . $this->mysqli->connect_error .'<br>');
        }
        echo 'Connection successful.<br>';
        
        $this->mysqli->set_charset('utf8');
    }

    /**
     * query
     * @param string $sql
     * @return bool
     */
    public function query($sql){                                                // ????????????????
        
        $result = $this->mysqli->query($sql);
        
        if ($result == false) {
            die(sprintf("SQL: %s, Error: %s", $sql, $this->mysqli->error));
        }
        
        return $this->lastResult = $result;
    }    
    
    /**
     * close
     * @return bool
     */
    public function close(){                                                    // ????????????????
        
         $this->mysqli->close();
         echo '<br>Connection closed.';
         
    }
    
   
}
