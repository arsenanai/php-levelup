<?php

error_reporting( E_ALL );

try {
    undefinedMethod();
} catch (Throwable $t) {
    var_dump($t);
}