<?php

class Person {
    private $first = "cajdsf";
    private $last = "uuion";
    private $age = "20";

    public function owner() {
        $a = $this->first;
        return $a;
    }
}

class Pet extends Person {
    public function owner() {
        $a = $this->first;
        return $a;
    }
}