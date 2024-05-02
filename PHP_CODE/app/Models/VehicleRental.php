<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleRental extends Model
{
    use HasFactory;
    
    protected $table      = 'VehicleRental';
    protected $primaryKey = 'VehicleRentalID';
    public $timestamps    = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'RentalID',
        'VehicleID',
    ];

    public function rental()
    {
        return $this->belongsTo(Rental::class, 'RentalID');    
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'VehicleID');    
    }
}
