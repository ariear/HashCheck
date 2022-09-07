<?php
    session_start();

    $pwverif = password_verify($_POST['string'], $_POST['hash']);
    if ($pwverif) {
        $_SESSION['status'] = 'Hash suitable';
        header('location: index.php');
    } else {
        $_SESSION['status'] = 'Hash not suitable';
        header('location: index.php');
    }
    
?>