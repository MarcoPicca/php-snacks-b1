<?php


class Person {
    public $age;

    public function setAge($age) {
        if (!is_int($age)) {
            throw new Exception('Inserire un numero valido');
        } else {
            $this->age = $age;
        }
    }
}

$person = new Person();


try {
    $person->setAge('ciao');
} catch ( Exception $e){
    echo 'Età non corretta' . $e->getMessage();
}

?>