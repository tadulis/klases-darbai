<?php

namespace users;

class Users
{
    public $name = '';
    public $surname = '';
    public $age = '';

    public function __construct($name, $surname, $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }

    public function changeAge($age)
    {
        $this->age = $age;
    }

    public  function unsetProperty($object, $key){
        unset($object->$key);
    }
}

$user = New Users('Mantas', 'Petruskevicius', 22);
$user->changeAge(1);

$user->unsetProperty($user, 'age');
var_dump($user);

