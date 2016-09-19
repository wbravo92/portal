<?php

session_start();
session_unset();
session_destroy();

echo "sesion eliminada";

header("location:index.html");


?>