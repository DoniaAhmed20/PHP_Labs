<?php 

require_once("config.php");
require_once("clear_button_handle.php");
//require_once("welcome.php");


// $error="";

if(!empty($_POST)){
    if(empty($_POST["name"]) ||empty($_POST["email"]) || empty($_POST["message"]) ){
        $error = "Please, Enter All Fields";
    }elseif(strlen($_POST["name"]) > MAX_NAME_LENGTH){
        $error = "Name must be less than less than 100 charachters";
    }elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
        $error = "Email is not valid";
    }elseif(strlen($_POST["message"]) > MAX_MESSAGE_LENGTH){
        $error = "Message must be less than less than 255 charachters";
    }
    else{
        $error = "<strong>". WELCOME_MESSAGE ."</strong> </br></br>
            <strong>Name: </strong>" .$_POST["name"] . "</br>".
            "<strong>Email: </strong>" .$_POST["email"] . "</br>".
            "<strong>Message: </strong>" .$_POST["message"];
        
        die("<center><h3>$error</h3></center>");
    }
}


// function remember_variable($var){
//     if(isset($var) && !empty($var)){
//         return $_POST[$var];
//     }
// }



require_once("form.php");


?>