<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canecllation extends Model
{
    use HasFactory;
    
    protected $table      = 'Canecllation';
    protected $primaryKey = 'CanecllationID';
    public $timestamps    = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'RentalID',
        'Reasons',
        'DateTime'
    ];

    public function rental()
    {
        return $this->belongsTo(Rental::class, 'RentalID');    
    }
}
