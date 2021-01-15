<?php 
session_start();
unset($_SESSION['auth']);
header('location: /TP2-Turismo/index.php'); 