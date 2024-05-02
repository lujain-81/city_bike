<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    use HasFactory;
    
    protected $table      = 'Availability';
    protected $primaryKey = 'AvailabilityID';
    public $timestamps    = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'DateTime',
        'VehicleID',
        'Status'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'VehicleID');    
    }
}
