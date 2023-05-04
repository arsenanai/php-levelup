<?php

$password = '#Some1@Strong2!Password3';

$hashedBcrypt = password_hash($password, PASSWORD_BCRYPT);

$hashedDefault = password_hash($password, PASSWORD_DEFAULT);

echo (password_verify($password, $hashedBcrypt) ? 'password is valid' : 'password is invalid') . PHP_EOL;

echo (password_verify($password, $hashedDefault) ? 'password is valid' : 'password is invalid') . PHP_EOL;