<?php

namespace Sega;

include "Traits/mytraits.php"; 
include "Controller/sega.php";

use Traits\mytraits;
class Atlus extends Sega 
{
    use mytraits;    
    public function getAsset()
    {
        $PersonaData = [
            "Izanago no Ookami",
            "Yoshitsune",
            "Loki",
            "King Frost",
            "Lucifer"
        ];
        $socialData = [
            "Fool",
            "Magician",
            "Lovers",
            "Hiero",
            "Chariot"
        ];
        $itemData = [
            "Peach Seed",
            "Medicine",
            "Ointment"
        ];
        $response = [
        "Sega_Attribute" => $this->getSega(),
        "Persona" => $PersonaData,
        "SocialLink" => $socialData,
        "ItemData"=> $itemData
        ];

        return $this->mytraits (001, "Investigation Team", "Fool", $response);
    }
    public function __construct()
    {
        $this->segaCharacter = "Yu Narukami";
        $this->personaMove = "Hasou Tobi";
        $this->characterStatus = "Perfect";
        $this->personaDmg1 =""; 
        $this->personaDmg1 ="";
    
    }
    
    // //  menampilkan detail karakter
    // public function showCharacterDetail() {
    //     echo "Character: " . $this->controllerCharacter . "\n";
    //     echo "Move: " . $this->controllerMove . "\n";
    //     echo "Status: " . $this->controllerStatus . "\n";
    // }
}
