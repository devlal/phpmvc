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
class Sponsor {

    public function __construct() {
        
    }

    public static function add($fields) {
        // Escape array for sql hijacking prevention
        $data = _escapeArray($fields);

        $map = array();
        $map['sponser_name'] = 'name';
        $map['sponser_desc'] = 'description';
        $map['sponser_address'] = 'address';
        $map['sponser_phone'] = 'phone';
        $map['sponser_email'] = 'email';
        $map['school_id'] = 'school_id';
        $map['sponser_link'] = 'link';
        $map['sponser_logo'] = 'logo';
        
        $ds = _bindArray($data,$map);
        
        return qi('sponsors',$ds);
        
    }
    
    public static function update($fields,$id) {
        // Escape array for sql hijacking prevention
        $data = _escapeArray($fields);
        
        $map = array();
        $map['sponser_name'] = 'name';
        $map['sponser_desc'] = 'description';
        $map['sponser_address'] = 'address';
        $map['sponser_phone'] = 'phone';
        $map['sponser_email'] = 'email';
        $map['school_id'] = 'school_id';
        $map['sponser_link'] = 'link';
        $map['sponser_logo'] = 'logo';
        
        $ds = _bindArray($data,$map);
        $condition = " id = ".$id;
        return qu('sponsors',$ds,$condition);
    }
    
    public static function get_all_sponsors(){
        return q(" select * from sponsors order by updated_at DESC ");
    }
    
    public static function delete($id){
        $id = _escape($id);
        return qd("sponsors"," `id` = '{$id}' ");
    }
    public static function get_sponsor_detail($id){
        return qs(sprintf("select * from sponsors where id = '%f'",$id));
    }

}

?>