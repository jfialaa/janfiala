<?php

abstract class ustrednyFIALA
//abstraktní třída ustrednyFIALA s protected $napeti uvnitř 
{

    protected $napetiFIALA;

//nastavení napětí
    public function setNapetiFIALA($napetiFIALA) :float {
        $this -> napetiFIALA = $napetiFIALA;
    }
//pouze reálné číslo psané číslicí pomocí :float
//přečtení napětí
    public function getNapetiFIALA() :float{
        return $this -> napetiFIALA;
    }
//pouze reálné číslo psané číslicí pomocí :float
}

class ustrednaFIALA extends ustrednyFIALA
//třída ustrednaFIALA dědí od ustrednyFIALA
{

    public $napetiFIALA = 12;

    const TYPE = "5";

//nastavení konstanty TYPE
}

var_dump(ustrednaFIALA::TYPE);
var_dump($napetiFIALA);
//výpis hodnoty TYPE a $napetiFIALA přes var_dump 