<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Task extends Model
{

    use HasFactory, Notifiable;

    protected $fillable = [
        'title',
        'description',
        'due_date',
        'state',
    ];

    public function testDatabase()
    {
        $task = Task::factory()->make();
    }

    public function comments()
    {
        return $this->hasMany('App/Models/Comment');
    }

    public function attachment()
    {
        return $this->hasMany('App/Models/Attachment');
    }

    public function category()
    {
        return $this->hasOne('App/Models/Category','foreign_key');
    }

    public function user()
    {
        $this->belongsTo('App/Models/User','foreign_key');
    }

    public function create()
    {
        return $this->hasOne('App/Models/User','foreign_key');
    }

    public function takingPart()
    {
        return $this->hasMany('App/Models/User');
    }

    public function put()
    {
        return $this->hasMany("App/Models/Attachment");
    }

    public function board_task()
    {
        return $this->belongsTo("/App/Models/Board");
    }
}
