<?php

session_start();
// session_destroy();

unset($_SESSION['MEMBER']);
header('location:index.php?hal=home');
