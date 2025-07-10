<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;


    /**
     * Get the Ward that the Project is for.
     */
    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }
}
