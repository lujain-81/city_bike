<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    
    protected $table      = 'rental';
    protected $primaryKey = 'RentalID';
    public $timestamps    = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'VehicleID',
        'CustomerID',
        'Date',
        'Status',
        'TimeFrom',
        'TimeTo',
        'FullDateTimeFrom',
        'FullDateTimeTo',
        'WithHelmet',
        'Deposit',
        'Amount',
        'RentalDateTime',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'CustomerID');    
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'VehicleID');    
    }

    public function vehicles()
    {
        return $this->belongsToMany(Vehicle::class, 'vehiclerental', 'RentalID', 'VehicleID');    
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'RentalID');    
    }
    
    public function invoice()
    {
        return $this->hasOne(Invoice::class, 'RentalID');    
    }

    public function canecllation()
    {
        return $this->hasOne(Canecllation::class, 'RentalID');    
    }
}
