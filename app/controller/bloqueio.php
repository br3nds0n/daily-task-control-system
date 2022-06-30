<?php
require_once("../../infra/database/connection.php");

session_start();

if(!isset($_SESSION['email']) and !isset($_SESSION['perfil'])){
    header("Location:../views/login.php?msg=1");
}

?>