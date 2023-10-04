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
        'project_shapefile',
        'developer_authority',
        'date_to_start_timeline',
        'project_description'
    ];

    protected $table = 'projects';
    protected $id = 'project_id';
}
