<?php

/**
 * Description of User
 *
 * @author gosia
 */
class User 
{
    private $id;
    private $email;
    private $username;
    private $hashedPassword;

    /**
     * __construct
     */
    public function __construct() 
    {
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
    public function setEmail($newEmail)
    {
        if (is_string($newEmail)) {
            $this->email = $newEmail;
        }
    }  
    
    /**
     * setUsername
     * @param string $newUsername
     */
    public function setUsername($newUsername)
    {
        if (is_string($newUsername)) {
            $this->username = $newUsername;
        }
    }      
    
    /**
     * setPassword
     * @param string $newPassword
     */
    public function setPassword($newPassword)
    {
        if (is_string($newPassword)) {
            $newHashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);
            $this->hashedPassword = $newHashedPassword;
            return $this;
        }
    }   

/******************************************************************************/
      
    /**
     * getId
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }  
    
    /**
     * getEmail
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }  
    
    /**
     * getUsername
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }  
    
    /**
     * getHashedPassword
     * @return string
     */
    public function getHashedPassword()
    {
        return $this->hashedPassword;
    }  

/******************************************************************************/
    /**
     * saveToDB
     * @param Connection $connection
     * @return boolean
     */
    public function saveToDB(Connection $connection)
    {
        if($this->id == -1){
            //Saving new user to DB
            $sql = "INSERT INTO User(username, email, hashed_password)
                    VALUES ('$this->username', '$this->email', '$this->hashedPassword')";

            $result = $connection->query($sql);
            
            if($result == true){
                $this->id = $connection->mysqli->insert_id;                     // ???????????????????
                return true;
            }
            
        } else{
            // Update
            $sql = "UPDATE User SET username='$this->username',
                    email='$this->email',
                    hashed_password='$this->hashedPassword'
                    WHERE id=$this->id";
            
            $result = $connection->query($sql);
            
            if($result == true){
                return true;
            }
        }

        return false;
    }
    
    /**
     * static loadUserById
     * @param Connection $connection
     * @param int $id
     * @return \User
     */
    static public function loadUserById(Connection $connection, $id)
    {
        $sql = "SELECT * FROM User WHERE id=$id";
        
        $result = $connection->query($sql);
        
        if($result == true && $result->num_rows == 1){
            
            $row = $result->fetch_assoc();
            $loadedUser = new User();
            $loadedUser->id = $row['id'];
            $loadedUser->username = $row['username'];
            $loadedUser->hashedPassword = $row['hashed_password'];
            $loadedUser->email = $row['email'];
            
            return $loadedUser;
        }
        return null;
    }
    
    /**
     * static loadAllUsers
     * @param Connection $connection
     * @return \User
     */
    static public function loadAllUsers(Connection $connection)
    {
        $sql = "SELECT * FROM User";
        $ret = [];
        $result = $connection->query($sql);
        
        if($result == true && $result->num_rows != 0){
            
            foreach($result as $row){
                
                $loadedUser = new User();
                $loadedUser->id = $row['id'];
                $loadedUser->username = $row['username'];
                $loadedUser->hashedPassword = $row['hashed_password'];
                $loadedUser->email = $row['email'];
                
                $ret[] = $loadedUser;
            }
        }
        return $ret;
    }
    
    /**
     * delete
     * @param Connection $connection
     * @return boolean
     */
    public function delete(Connection $connection)
    {
        if($this->id != -1){
            
            $sql = "DELETE FROM User WHERE id=$this->id";
            
            $result = $connection->query($sql);
            
                if($result == true){
                    
                    $this->id = -1;
                    return true;
                }
            return false;
        }
        return true;
    }
    
    /**
     * signUp
     * @param Connection $connection
     */
    public function signUp(Connection $connection, $newUsername, $newEmail, $newPassword) 
    {
        if (is_string($newUsername) && is_string($newEmail) && is_string($newPassword) &&
        !empty($newUsername) && !empty($newEmail) && !empty($newPassword)) {

            if (strpos($newEmail, '@')) {
                $this->setUsername($newUsername);
                $this->setEmail($newEmail);
                $this->setPassword($newPassword);
                $this->saveToDB($connection);
            } else {
                echo 'E-mail does not contain @';
            }
        } else {
            echo 'Incorrect data';
        }
    }

    public function logIn(Connection $connection, $email, $password) 
    {
        if (is_string($email) && is_string($password) && !empty($email) && !empty($password)) {

            $sql = "SELECT * FROM `User` WHERE `email` = '$email'";

            $result = $connection->query($sql);

            if ($result == true && $result->num_rows == 1) {

                $row = $result->fetch_assoc();
                $hash = $row['hashed_password'];

                if (password_verify($password, $hash)) {
                    //echo 'Correct password ';

                    return true;
                } else {
                    //echo 'Incorrect password';

                    return false;
                }
            } else {
                //echo 'Incorrect email';

                return false;
            }
        } else {
            //echo 'Incorrect data';

            return false;
        }
    }
}
