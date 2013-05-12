<?php

/**
 * Config Class
 * 
 * Class to handle config operations
 * 
 * @author Dave Jay <dave.jay90@gmail.com>
 * @version 1.0
 * @package jay_test
 * @since April 17, 2013
 * 
 */
class Config {
    

    /**
     * Mechanism to access variable globally
     * @var Array $_vars
     */
    public static $_vars = array(); 


    # constructor
    public function __construct() {
        
    }
 
    public static function get_all_configs(){
        return q(" select * from configs order by id ASC ");
    }
    public static function get_config_detail($id){
        return qs(sprintf("select * from configs where `key` = '%s'",$id));
    }
    public static function update($fields,$id) {
        // Escape array for sql hijacking prevention
        $data = _escapeArray($fields);
        
        $map = array();
        $map['config_value'] = 'value';
        
        $ds = _bindArray($data,$map);
        $condition = " `key` = '".$id."'";
        $updated_at = 0;
        return qu('configs',$ds,$condition,$updated_at);
    }

}

?>