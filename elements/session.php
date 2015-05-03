<?php
	session_start();
	if(isset($_GET['login'])) {
        $_SESSION['login'] = $_GET['login'];
    }
    if(isset($_GET['logout'])) {
    	session_unset();
        session_destroy();
    }	

    if(isset($_GET['unregister'])) {
        unset($_SESSION['join']);
    } 
    
    if(isset($_GET['join'])) {
        $_SESSION['join'] = $_GET['join'];
    }        
?>