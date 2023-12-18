<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterCollege extends Model
{
    use HasFactory;

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function regency()
    {
        return $this->belongsTo(Regency::class);
    }

    public function religion()
    {
        return $this->belongsTo(Religion::class);
    }
}
