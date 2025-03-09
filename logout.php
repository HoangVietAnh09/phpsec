<?php
session_start();

session_destroy();
header('Location: /phpsec/session.php');