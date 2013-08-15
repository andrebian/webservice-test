<?php
require_once 'Database.php';

class User
{
    public function searchByEmail($email)
    {
        $userData = array();
        
        $query = "SELECT * FROM users WHERE email='" . $email . "'";
        $query = mysql_query($query);
        
        if (mysql_affected_rows() && !mysql_error() ) {
            $userData = mysql_fetch_assoc($query);
        }
        
        return $userData;
    }
}
