<?php

session_start();

if (!isset($_SESSION['flash'])) {
    $_SESSION['flash'] = array();
}

function addFlash($index, $message) {
    $_SESSION['flash'][$index] = $message;
}

function hasFlash($index) {
    return isset($_SESSION['flash'][$index]);
}

function getFlash($index) {
    $message = $_SESSION['flash'][$index];
    unset($_SESSION['flash'][$index]);
    return $message;
}

?>