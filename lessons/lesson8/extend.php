<?php

class A {
    // свойтво | property
    protected int $a;
    private int $b;
    
    // метод | method
    public function greating() {
        echo "Hello!";
    }
}

class B extends A {
    public function setA(int $a) {
        $this->a = $a;
    }

    public function getA() {
        echo $this->a;
    }

    #[Override]
    public function greating() {
        echo "Assalawma aleykum";
    }
}

$objectA = new A;
$objectB = new B;

$objectB->setA(10);
$objectB->getA();

echo "<br>";

$objectA->greating();

echo "<br>";

$objectB->greating();

echo "<br>";

