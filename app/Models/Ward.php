<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'llg_id',
    ];

    /**
     * Get the LLG that owns the Ward.
     */
    public function llg()
    {
        return $this->belongsTo(LLG::class);
    }

    /**
     * Get the projects for the Ward.
     */
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
