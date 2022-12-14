<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exp_Days extends Model
{
    use HasFactory;

    public function Costumer_date()
    {

        return $this->hasMany(Costumer_date::class);
    }
}
