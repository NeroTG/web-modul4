<?php

namespace Sega;


abstract class Sega
{
    // VARIABLE ATRIBUT 
    var $segaCharacter; 
    var $personaMove;
    var $characterStatus;
    var $personaDmg1 = 10;
    var $personaDmg2 = 20;

    // METHOD UNTUK MENGAMBIL SEMUA ATRIBUT
    
    public function getSega() 
    {
        return [ 
            "Character" => $this -> segaCharacter,
            "Move" => $this -> personaMove,
            "Status" => $this -> characterStatus,
            "Demage 1" => $this -> personaDmg1 = 10,
            "Demage 2" => $this -> personaDmg1 = 20

        ];
    }
    // METHOD __toString()
    
}