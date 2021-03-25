<?php 
// تعيد السيشن وبياناته
function user_data($var = 'defalut'){

        if ($var == 'defalut'){
        if (!isset($_SESSION['user_data']) )
        return false;
        else 
        return $_SESSION['user_data'];
    }else {

            if ($var === false ){
                unset($_SESSION['user_data']);
                $_SESSION['user_data'] = false;
        
                return false;
            }else{
                if (is_array($var) && $_SESSION['user_data'] == false){
                    $_SESSION['user_data'] =  $var;
            
                    return $_SESSION['user_data'];

                }else{
                    return $_SESSION['user_data'][$var];
                }
            }
        }
}
 
 function  clearData ($data = ''){

    $data = trim($data);
    $data = addslashes($data);
    $data = htmlspecialchars($data);
   $data = strip_tags($data);
    return $data;

}