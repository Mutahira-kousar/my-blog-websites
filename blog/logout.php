<?php
require 'config/constants.php';
// destroy all session and redirect the user to home page
session_destroy();
header('location:' .ROOT_URL);
die();
