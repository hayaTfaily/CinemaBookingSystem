<?php
session_start();

if(isset($_SESSION['userid'])) {
   
    echo "authenticated";
} else {
    
    echo "unauthenticated";
}
?>
