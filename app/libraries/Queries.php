<?php

use Aracademia\Hadiths\Hadith;

class Queries {
    public static function hadiths()
    {
        $hadiths = Hadith::all()->random();
            echo $hadiths->hadith;
    }
} 