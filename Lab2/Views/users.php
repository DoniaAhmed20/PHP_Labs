<?php
//$site_map = read_from_external_site("https://www.foxnews.com/");
//echo $site_map;
//$test_parameter = isset($_GET["name"])?$_GET["name"]:"";
//$_SESSION["name"] = $test_parameter;
//do_array_example();
$users = convert_file_to_array();
$words = array( "Visit Date:","IP Address:","Name:", "Email:", "Message:");
//$users = read_from_file();
//echo $users;
"<strong> Visitors </strong>";
foreach($users as $user){
      $user_details = explode(",",$user);
      echo "New User <br/>";
      echo str_repeat("-", 53);
      
      echo "<Div>";
      $w=0;
          foreach($user_details as $value ){
            echo "<h5> $words[$w] $value </h5>";
            $w = $w +1;
      
          }
      echo "</div>";
}

