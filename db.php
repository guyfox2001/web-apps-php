<?php

$cfg_array = parse_ini_file("cfg/props.ini", true);

try {
    $pdo = new PDO("mysql:host=$cfg_array[host];dbname=$cfg_array[name]", $cfg_array['user'], $cfg_array['password']);
} catch (PDOException $e) {
    print "Has errors: " . $e->getMessage();
    die();
}