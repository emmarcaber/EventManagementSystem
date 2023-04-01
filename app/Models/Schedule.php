<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';
    //protected $primaryKey = 'ScheduleID';
    protected $fillable = ['StartTime', 'EndTime', 'Description'];
    use HasFactory;
}
