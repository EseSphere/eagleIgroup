<?php
session_start();

if (isset($_SESSION['usr_specialId'])) {
    session_destroy();
    unset($_SESSION['usr_id']);
    unset($_SESSION['usr_email']);
    unset($_SESSION['usr_specialId']);
    header("Location: ../");
} else {
    header("Location: ../");
}

session_destroy();
