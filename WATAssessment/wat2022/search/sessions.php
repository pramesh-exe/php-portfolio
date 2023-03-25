<?php

include_once("init.php");

if(isset($_SESSION['user'])){
    $user=$_SESSION['user'];
    
    include("search.php");

}else{
    include("loginform.php");
    if(isset($_SESSION['error'])){
        echo ("<br>".$_SESSION['error']);
    }
}	
?>
