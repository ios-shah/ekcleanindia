<?php

$to='shahaayush4u@gmail.com';
$subject='Your One Time Password';
$body='Your one time password is :';
$header='support@ekcleanindia.com';

$result=mail($to,$subject,$body,$header);
if(!$result){
    echo 'Email not Send';
}
else
{
    echo 'Email Send Sucess';
}
?>