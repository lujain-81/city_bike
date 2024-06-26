<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;
        
    protected $table      = 'Spots';
    protected $primaryKey = 'SpotID';
    public $timestamps    = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'AdminID',
        'Location',
    ];

    public function vehicles(){
        return $this->hasMany(Vehicle::class, 'SpotID');
    }

}
