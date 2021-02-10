<?php 

class Person{
    public $firstname, $lastname;

    public function sayHello() 
    {
        return "Hallo ".$this->firstname . $this->lastname;
    }
}
// $arif = new Person();
// $arif->firstname="Arif";
// $arif->lastname=" Muchiyar Rahman";
// echo $arif->sayHello();

class Mobil{
    public $nama, $brand;

    public function startEngine(){
        return "Mobil " . $this->nama . $this->brand . " Telah Menyala";
    }

    public function stopEngine(){
        return "Mobil " . $this->nama . $this->brand . " Telah Dimatikan";
    }
}

$mobil1 = new Mobil();
$mobil1->nama = "Avanza";
$mobil1->brand = " Toyota ";
echo $mobil1->startEngine() . "<br>";
echo $mobil1->stopEngine();


?>