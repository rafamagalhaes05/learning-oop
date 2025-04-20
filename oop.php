<?php

class Person
{

    public function __construct(
        public String $name,
        public Int $age,
        public String $gender,
        public int $breads_eaten,
        private int $min_bread = 10
    ) {}
    public function walk(): string
    {

        $name = $this->name;
        return "$name is walking" . PHP_EOL;
    }

    public function eat(): string
    {
        $name = $this->name;
        $min_bread = $this->min_bread;
        $breads_eaten = $this->breads_eaten;
        if ($breads_eaten < $min_bread) {
            $breads_remaining = $min_bread - $breads_eaten;
            return "$name still needs to eat $breads_remaining";
        } elseif ($breads_eaten == $min_bread) {
            return "$name ate enough bread";
        } else {
            return "$name ate too much bread";
        }
    }
}

$person = new Person("Rafael", 19, "Male", 12);
echo $person->walk();
echo $person->eat();
