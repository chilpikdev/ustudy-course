<?php

session_start(); // sid
// session_regenerate_id(true);

$_SESSION['name'] = "O'lmas";
$_SESSION["user_id"] = session_id();

echo $_SESSION['name'] . '<br>';
echo $_SESSION['user_id'] . '<br>';


session_destroy();

echo session_id();
