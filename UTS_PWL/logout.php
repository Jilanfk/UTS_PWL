<?php
session_start();
//session_destroy();
unset($_SESSION['MEMBER']);
//landing page
header('location:http://localhost/UTS_PWL/index.php?hal=home');