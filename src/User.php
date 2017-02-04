<?php

/**
 * Description of User
 *
 * @author gosia
 */
class User {
    
    private $id;
    private $email;
    private $username;
    private $hashedPassword;

    /**
     * __construct
     */
    public function __construct() {
        $this->id = -1;
        $this->email = '';
        $this->username = '';
        $this->hashedPassword = '';
    }

/******************************************************************************/
    
    /**
     * setEmail
     * @param string $newEmail
     */
    public function setEmail($newEmail){
        if (is_string($newEmail)) {
            $this->email = $newEmail;
        }
    }  
    
    /**
     * setUsername
     * @param string $newUsernamel
     */
    public function setUsername($newUsernamel){
        if (is_string($newUsernamel)) {
            $this->username = $newUsernamel;
        }
    }      
    
    /**
     * setPassword
     * @param string $newPassword
     */
    public function setPassword($newPassword){
        if (is_string($newPassword)) {
            $newHashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);
            $this->hashedPassword = $newHashedPassword;
        }
    }   

/******************************************************************************/
      
    /**
     * getId
     * @return int
     */
    public function getId(){
        return $this->id;
    }  
    
    /**
     * getEmail
     * @return string
     */
    public function getEmail(){
        return $this->email;
    }  
    
    /**
     * getUsername
     * @return string
     */
    public function getUsername(){
        return $this->username;
    }  
    
    /**
     * getHashedPassword
     * @return string
     */
    public function getHashedPassword(){
        return $this->hashedPassword;
    }  

/******************************************************************************/
    /**
     * saveToDB
     * @param Connection $connection
     * @return boolean
     */
    public function saveToDB(Connection $connection){

        if($this->id == -1){
            //Saving new user to DB
            $sql = "INSERT INTO User(username, email, hashed_password)
                    VALUES ('$this->username', '$this->email', '$this->hashedPassword')";

            $result = $connection->query($sql);
            
            if($result == true){
                $this->id = $connection->mysqli->insert_id;                     // ???????????????????
                return true;
            }
        }
        return false;
    }
      
}
