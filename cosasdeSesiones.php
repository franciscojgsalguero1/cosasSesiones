<?php
    // Iniciamos sesion
    session_start();
    
    $_SESSION['username'] = "admin";
    
    // ubicacion de los archivos temporales
    echo ini_get("session.save_path");
    
    // destruir sesion
    session_destroy();
    
    // destruir completamente la sesion
    $_SESSION = array();
    session_destroy();
    
    // destruir completamente la sesion y también la sesion del navegador
    
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), "", time()-3600, "/");
        unset($_COOKIE[session_name()]);
    }
    
    session_unset(); // o bien $_SESSION = array();
    session_destroy();
    
?>