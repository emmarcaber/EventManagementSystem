<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'TaskID';
    protected $fillable = ['TaskName', 'Description', 'DueDate'];
    use HasFactory;
}
