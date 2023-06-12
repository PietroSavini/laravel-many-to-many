<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tecnology extends Model
{
    use HasFactory;
    protected $fillable =[
        'name'
    ];

    public function projects(){
        return $this->belongsToMany(Project::class);
    }
}
