<?php 
if ( !session_id() ) session_start();

require_once "../app/init.php";

$app = new App();
$controller = new Controller();

// echo "<br>&laquo; Hello MVC, from public/index.php &raquo;";