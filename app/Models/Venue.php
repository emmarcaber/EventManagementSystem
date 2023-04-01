<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $table = 'venues';
    protected $primaryKey = 'VenueID';
    protected $fillable = ['VenueName', 'Address', 'Capacity', 'Availability'];
    use HasFactory;
}
