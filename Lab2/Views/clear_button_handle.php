<?php
function validate_form($var){
    //if(isset($_POST[$var]) && !empty($_POST[$var])){
        //return $_POST[$var];
        if(isset($var) && !empty($var)){
            return $_POST[$var];
        }
    }


function save_to_file(){
    $fp = fopen(_Saving_file_,"a+");
    $date = date("F j Y g:i a");
    $date.= ",";
    $ip = $_SERVER['REMOTE_ADDR'];
    $ip.= ",";
    $written_string = implode(" , " , $_POST);
    fwrite($fp,$date);
    fwrite($fp,$ip);
    fwrite($fp,$written_string.PHP_EOL);
    fclose($fp);
}



function read_from_file() {
    $fp = fopen(_Saving_file_, "r+");
    $readed_string = fread($fp, filesize(_Saving_file_));
    fclose($fp);
    return $readed_string;
}

function convert_file_to_array() {
    return file(_Saving_file_);
}
?>