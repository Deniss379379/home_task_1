<html>

<head>
    <title>YLAB</title>
</head>

<body>
    <div>
        <h2> Шук Денис. Домашнее задание 1. Задача 3.<h2>
    </div>
</body>

</html>

<?php

abstract class USER
{
    abstract public function new();
    abstract public function save();

    function getName($name)
    {
        return "$name, ";
    }
}

class Person extends User
{
    function new()
    {
        return 1;
    }

    function save()
    {
        return 0;
    }

    public function getName($name)
    {
        return parent::getName($name) . "Здорово!";
    }
}

$newUser = new Person();
echo $newUser->getName("Денис");
