<?php
session_start();
require "vendor/autoload.php";

use myPHPnotes\Microsoft\Auth;

$tenant = "common";
$client_id = "e788ecb1-b86b-4a97-893e-6930a97f1cab";
$client_secret = "s5K1Z0-yXekJ-_99rG_kmr0u~0hck8GoFh";
$callback = "http://localhost:8000/callback.php";
$scopes = ["User.Read"];
$microsoft = new Auth($tenant, $client_id, $client_secret, $callback, $scopes);
header("location: " . $microsoft->getAuthUrl());