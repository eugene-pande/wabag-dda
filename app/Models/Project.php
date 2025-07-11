<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'project_code',
        'location',
        'coordinates',
        'budget',
        'amount_spent',
        'currency',
        'start_date',
        'end_date',
        'actual_end_date',
        'status',
        'progress_percentage',
        'project_document',
        'ward_id',
    ];

    /**
     * Get the Ward that the Project is for.
     */
    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }
}
