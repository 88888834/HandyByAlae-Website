<?php


try{
        $bdd=new PDO('mysql:host=127.0.0.1;dbname=client;charset=utf8','root','');
    // if(isset($bdd)){
    //     echo"connected";}
    //     else {
    //     echo"not connected";}
    
}
catch(Exception $e){
    // die('erreur:'.$e->getMessage('CONNECTED'));
}
?>
