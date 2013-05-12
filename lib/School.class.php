<?php

/**
 * School Class
 * 
 * 
 * @author Dave Jay <dave.jay90@gmail.com>
 * @version 1.0
 * @package team_archives
 * @since April 20, 2013
 * 
 */
class School {

    public function __construct() {
        
    }

    public static function add($fields) {
        // Escape array for sql hijacking prevention
       
        $data = _escapeArray($fields);
        $map = array();
        $map['school_name'] = 'name';
        $map['school_desc'] = 'desc';
        $map['school_address'] = 'address';
        $map['school_phone'] = 'phone';
        $map['school_email'] = 'email';
        $map['school_password_add'] = 'password';
        if($_SESSION['uploaded_file'] != '') {
           $map['school_logo'] = 'logo';
        }
        $data['school_password_add'] = md5($data['school_password_add']);
        $ds = _bindArray($data,$map);
        if($_SESSION['uploaded_file'] != '') {
           $ds['logo'] = $_SESSION['uploaded_file'];   
           $_SESSION['uploaded_file'] = '';
        }
        
        return qi('schools',$ds);
        
    }
    
    public static function update($fields,$id) {
        // Escape array for sql hijacking prevention
        $data = _escapeArray($fields);
        
        $map = array();
        $map['school_name'] = 'name';
        $map['school_desc'] = 'desc';
        $map['school_address'] = 'address';
        $map['school_phone'] = 'phone';
        $map['school_email'] = 'email';
        if($_SESSION['uploaded_file'] != '') {
           $map['school_logo'] = 'logo';
        }
        if($data['school_password_edit'] != ''){
           $map['school_password_edit'] = 'password'; 
           $data['school_password_edit'] = md5($data['school_password_edit']);
        }
        $ds = _bindArray($data,$map);
        if($_SESSION['uploaded_file'] != '') {
           $ds['logo'] = $_SESSION['uploaded_file'];   
           $_SESSION['uploaded_file'] = '';
        }
        $condition = " id = ".$id;
        return qu('schools',$ds,$condition);
    }
    
    public static function get_all_schools(){
        return q(" select * from schools order by updated_at DESC ");
    }
    
    public static function delete($id){
        $id = _escape($id);
        return qd("schools"," id = '{$id}' ");
    }
    public static function get_school_detail($id){
        return qs(sprintf("select * from schools where id = '%f'",$id));
    }

}

?>