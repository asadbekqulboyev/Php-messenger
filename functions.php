<?php

function getAllMessage(){
    $result = [];
    $file= 'message.txt';
    
    if (is_file($file)){
        $getFile = file_get_contents($file);
        $result = explode("\n", $getFile);
        // print_r($result);
    }
    return $result;
};
getAllMessage();
function generateMessageItem($messageStr){
 if($messageStr){
    return explode("|", $messageStr);
}
return null;
}
