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
class Video {

    public function __construct() {
        
    }

    public static function add($fields) {
        // Escape array for sql hijacking prevention
        $data = _escapeArray($fields);

        $map = array();
        $map['school_id']  = 'school_id';
        $map['video_desc'] = 'description';
        if($_SESSION['uploaded_file'] != '') {
           $map['video_file'] = 'video_file';
        }
        
        $ds = _bindArray($data,$map);
        if($_SESSION['uploaded_file'] != '') {
           $ds['video_file'] = $_SESSION['uploaded_file'];   
           $_SESSION['uploaded_file'] = '';
        }
        return qi('videos',$ds);
        
    }
    
    public static function update($fields,$id) {
        // Escape array for sql hijacking prevention
        $data = _escapeArray($fields);
        
        $map = array();
        $map['school_id'] = 'school_id';
        $map['video_desc'] = 'description';
        if($_SESSION['uploaded_file'] != '') {
           $map['video_file'] = 'video_file';
        }
        
        $ds = _bindArray($data,$map);
        if($_SESSION['uploaded_file'] != '') {
           $ds['video_file'] = $_SESSION['uploaded_file'];   
           $_SESSION['uploaded_file'] = '';
        }
        $condition = " id = ".$id;
        return qu('videos',$ds,$condition);
    }
    
    public static function get_all_videos(){
        if (isset($_SESSION['user']['user_type']) && $_SESSION['user']['user_type'] == 'school') { 
          return q("select sc.name,v.* from schools sc,videos v WHERE v.school_id = sc.id AND v.school_id = '".$_SESSION['user']['id']."'  order by updated_at DESC ");
        } else { 
          return q("select sc.name,v.* from schools sc,videos v WHERE v.school_id = sc.id order by updated_at DESC ");
        }   
        
    }
    
    public static function delete($id){
        $id = _escape($id);
        return qd("videos"," id = '{$id}' ");
    }
    public static function get_video_detail($id){
          return qs(sprintf("select * from videos WHERE id = '%f'",$id));
    }

}

?>