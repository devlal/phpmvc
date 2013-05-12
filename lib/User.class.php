<?php

/**
 * User Class
 * 
 * User login, signup, normal activity
 * 
 * @author Dave Jay <dave.jay90@gmail.com>
 * @version 1.0
 * @package team_archives
 * @since April 19, 2013
 * 
 */
class User {
    # constructor

    public static $user_data = array();

    public function __construct() {
        
    }

    public static function doLogin($user_name, $password) {
        self::$user_data = qs(sprintf("select * from admin_users where user_name = '%s' and password = '%s'", $user_name, md5($password)));
        if (!empty(self::$user_data)) {
           self::$user_data['user_type'] = 'admin';  
        }
        if (empty(self::$user_data)) {
            self::$user_data = qs(sprintf("select * from schools where email = '%s' and password = '%s'", $user_name, md5($password)));
            if (!empty(self::$user_data)) {
                self::$user_data['user_name'] = self::$user_data['email'];
                self::$user_data['user_type'] = 'school';
            }
        }
        return empty(self::$user_data) ? false : true;
    }

    public static function setSession($user_name) {
        $_SESSION['user'] = self::$user_data;
    }

    public static function killSession() {
        session_destroy();
        unset($_SESSION);
    }

}

?>