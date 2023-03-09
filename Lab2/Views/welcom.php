<?php 

require_once("config.php");
require_once("clear_button_handle.php");
require_once("users.php");


// $error="";
//$date = ("F J, Y, g:i a");
//$today = date("F j Y g:i a");
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
        // $error = "<strong>". WELCOME_MESSAGE ."</strong>";
        //     save_to_file();
        //     "<strong>date: </strong>" .$today . "</br>".
        //     "<strong>Name: </strong>" .$_POST["name"] . "</br>".
        //     "<strong>Email: </strong>" .$_POST["email"] . "</br>".
        //     "<strong>Message: </strong>" .$_POST["message"];*******************************************
        save_to_file();
        
        $error = "<strong>". WELCOME_MESSAGE ."</strong> </br></br>
            <strong>Name: </strong>" .$_POST["name"] . "</br>".
            "<strong>Email: </strong>" .$_POST["email"] . "</br>".
            //"<strong>date: </strong>" .$today . "</br>".
            "<strong>Message: </strong>" .$_POST["message"];
    
        die("<center><h3>$error</h3></center>");
    }
}


// function remember_variable($var){
//     if(isset($var) && !empty($var)){
//         return $_POST[$var];
//     }
// }

$parameter = isset($_GET["page"]) ? $_GET["page"] : "";
if (!$parameter === "contact")
    require_once("Views/form.php");
else
    require_once("Views/users.php");






require_once("form.php");


?>