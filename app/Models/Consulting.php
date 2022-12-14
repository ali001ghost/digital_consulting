<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulting extends Model
{
    use HasFactory;
    protected $fillable=['Consulting_name','Other_consulting'];

    public function consulting_expert()
    {
        return $this->belongsToMany(Exp_Consulting::class);
    }
}
