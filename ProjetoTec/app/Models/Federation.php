<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Enterprise;

class Federation extends Model
{
    use HasFactory;

    public function enterprise(){
        return $this->hasMany(Enterprise::class);
    }
}
