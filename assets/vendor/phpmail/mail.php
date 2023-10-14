<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $formErorrs = array();
    if(strlen($name) <= 3){
        $formErorrs[] = 'يجب ان يتكون الأسم من اكثر من 3 احرف';
    }
    if(strlen($message) <= 3){
        $formErorrs[] = 'يجب ان تتكون الرسالة من اكثر من 3 احرف';
    }

}


?>