<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    public function owner() {
        return $this->hasOne('App/Models/User','foreign_key');
    }

    public function  board_user() {
        return $this->hasMany('App/Models/User');
    }

    public function board_task() {
        return $this->hasMany('App/Models/Task');
    }


}
