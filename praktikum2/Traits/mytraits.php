<?php

namespace Traits;

trait mytraits
{
    public function mytraits($code, $message, $socialLink, $data = null) 
    {
        return json_encode([
            "code" => $code,
            "pesan"=> $message,
            "social_link" => $socialLink,
             $data
        ]);
    }
}