<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    
    protected $table      = 'payment';
    protected $primaryKey = 'PaymentID';
    public $timestamps    = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'RentalID',
        'CVV',
        'CardNumber',
        'ExpireDate',
        'Amount',
        'Block',
        'PaymentStatus',
    ];

    public function rental()
    {
        return $this->belongsTo(Rental::class, 'RentalID');    
    }
}
