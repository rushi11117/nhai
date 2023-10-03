<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_name',
        'project_location',
        'start_of_timeline'
    ];

    protected $table = 'projects';
    protected $id = 'project_id';
}
