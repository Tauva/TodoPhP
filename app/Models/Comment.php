<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'text'
    ];


    public function create()
    {
        return $this->hasOne('App/Models/User','foreign_key');
    }

    public function belongsTo()
    {
        return $this->hasOne('App/Models/Task','foreign_key');
    }
}
