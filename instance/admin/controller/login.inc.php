<?php

if($_REQUEST['username']){
    $user_name = _escape($_REQUEST['username']);
    $password = _escape($_REQUEST['password']);
    
    if(User::doLogin($user_name,$password)){
        User::setSession($user_name);
        if(isset($_SESSION['user']['user_type']) && $_SESSION['user']['user_type'] == 'school'){
           _R(lr('schools')); 
        } else {
          _R(lr('home'));    
        }
        
    }else{
        $error = "Invalid Login";
    }
}

$no_visible_elements = true;

$jsInclude = "login.js.php";
_cg("page_title","Login");
?>