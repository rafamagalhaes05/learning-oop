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
            return "$name still needs to eat $breads_remaining breads";
        } elseif ($breads_eaten == $min_bread) {
            return "$name ate enough bread";
        } else {
            return "$name ate too much bread";
        }
    }
}

$person1 = new Person("Rafael", 19, "Male", 12);
$person2 = new Person("Sofia", 15, "Female", 5);
$person3 = new Person("Maria", 50, "Female", 10);
echo $person1->walk();
echo $person1->eat();
echo $person2->walk();
echo $person2->eat();
echo $person3->walk();
echo $person3->eat();
