<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model
{
    const Fundamental   = 1;
    const Medio         = 2;
    const Superior      = 3;
    const Mestrado      = 4;
    const Doutorado     = 5;

    const LEVEL = [
        self::Fundamental,
        self::Medio,
        self::Superior,
        self::Mestrado,
        self::Doutorado
    ];
}
