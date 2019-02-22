<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{   
    protected $primaryKey = 'id';
    protected $table = 'task';
    protected $fillable = ['title'];
}
