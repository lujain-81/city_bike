<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $table      = 'Vehicle';
    protected $primaryKey = 'VehicleID';
    public $timestamps    = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'AdminID',
        'EmployeeID',
        'SpotID',
        'CodNumber',
        'Model',
        'Type',
        'Manufacturer',
        'Image',
        'QRCode',
        'Price'
    ];

    public function spot(){
        return $this->belongsTo(Spot::class, 'SpotID');
    }

    public function availabilities()
    {
        return $this->hasMany(Availability::class, 'VehicleID');    
    }

    public function rentals()
    {
        return $this->belongsToMany(Rental::class, 'vehiclerental', 'VehicleID', 'RentalID');    
    }
}
