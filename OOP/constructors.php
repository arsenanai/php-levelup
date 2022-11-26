<?php
declare(strict_types=1);

class Car {

    public String $name, $model;

    public function __construct() {
        $args = func_get_args();
        $argsNum = func_num_args();
        if( method_exists( $this, $function = "__construct{$argsNum}") ) {
            call_user_func_array( array($this, $function), $args );
        }
    }

    public function __construct1( String $name ) {
        $this->name = $name;
    }

    public function __construct2( String $name, String $model ) {
        $this->name = $name;
        $this->model = $model;
    }

}

$obj = new Car();
$obj->name = 'Audi';
$obj->model = 'A4';
echo "{$obj->name} {$obj->model}" . PHP_EOL;
if ( array_key_exists( 'REMOTE_ADDR', $_SERVER ) ) 
    echo '<br>';

$obj = new Car( 'Toyota' );
$obj->model = 'Camry';
echo "{$obj->name} {$obj->model}" . PHP_EOL;
if ( array_key_exists( 'REMOTE_ADDR', $_SERVER ) ) 
    echo '<br>';

$obj = new Car( 'Ford', 'Focus' );
echo "{$obj->name} {$obj->model}" . PHP_EOL;
if ( array_key_exists( 'REMOTE_ADDR', $_SERVER ) ) 
    echo '<br>';