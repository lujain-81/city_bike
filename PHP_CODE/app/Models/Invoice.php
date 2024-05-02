<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table      = 'Invoice';
    protected $primaryKey = 'InvoiceID';
    public $timestamps    = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'RentalID',
        'TotalAmount',
        'TotalAfterTax',
        'DateTime'
    ];

    public function rental()
    {
        return $this->belongsTo(Rental::class, 'RentalID');    
    }
}
