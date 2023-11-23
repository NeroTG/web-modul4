<?php

namespace Sega;

include "Controller/sega.php";

class karakter extends Sega 
{
public function __toString() 
    {
        return "Karakter saya adalah {$this->segaCharacter} dan gerakan saya adalah {$this->personaMove}.";
    }
}