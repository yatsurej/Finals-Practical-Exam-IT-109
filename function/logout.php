<?php
    session_unset();
    session_destroy();
    header("Location: ../pages/login-page.php");
    exit;