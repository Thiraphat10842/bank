<?php
$user_name=$_POST["user_name"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$marry_status=$_POST["marry_status"];

// check gender, age, marry_status
if($gender=="M"){
    if($age>=15){
        print("นาย$user_name");
    }else{
        print("ด.ช.$user_name");
    }
}else{
    if($age>=15){
        if($marry_status=="M"){
            print("นาง$user_name");
        }else{
            print("น.ส.$user_name");
        }
    }else{
        print("ด.ญ.$user_name");
    }
}
?>
