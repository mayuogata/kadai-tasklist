<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasklist extends Model
{
    protected $fillable = ['content', 'task_id'];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
