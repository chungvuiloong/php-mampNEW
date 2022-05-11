<?php
include 'includes/sessions.php';
logout();                             // Call logout() to terminate session
header('Location: index.html');         // Redirect to home page