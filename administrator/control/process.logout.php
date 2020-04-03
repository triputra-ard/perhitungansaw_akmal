<?php
session_start();
@$_SESSION[fullname];
session_destroy();

header('location:../../home');

 ?>
