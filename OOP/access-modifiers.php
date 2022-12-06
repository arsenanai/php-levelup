<?php
declare(strict_types=1);

class Plant {
    public String $name;
    protected String $color;
    private String $weight;
}

class Fruit extends Plant {
    public function getColor(): String {
        return $this->color;
    }
    public function setColor(String $value): void {
        $this->color = $value;
    }
    public function getWeight(): String {
        return $this->weight;
    }
    public function setWeight(String $value): void {
        $this->weight = $value;
    }
}

$mango = new Fruit();
$mango->name = 'Mango'; // Ok
$mango->setColor('Yellow'); // Ok
$mango->setWeight('300');
echo "Fruit with name: $mango->name, color: {$mango->getColor()}, weight: {$mango->getWeight()}";