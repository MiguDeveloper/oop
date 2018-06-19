<?php

class Person
{
    private $firsName;
    private $lastName;

    /**
     * Person constructor.
     * @param $firsName
     * @param $lastName
     */
    public function __construct($firsName, $lastName)
    {
        $this->firsName = $firsName;
        $this->lastName = $lastName;
    }

    public function getFirsName()
    {
        return $this->firsName;
    }

    public function setFirsName($firsName)
    {
        $this->firsName = $firsName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    function getNombreCompletos()
    {
        return $this->firsName . " " . $this->lastName;
    }
}

// Instanciamos la clase
$persona1 = new Person("Miguel Angel", "Chinchay");
$persona1->setFirsName("Miguel");

$persona2 = new Person("Steve", "Jobs");

echo "{$persona1->getNombreCompletos()}, es amigo de {$persona2->getNombreCompletos()}";
echo "<br>";
echo "Solo nombre del primero: {$persona1->getFirsName()}";