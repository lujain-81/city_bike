<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table      = 'feedback';
    protected $primaryKey = 'FeedbackID';
    public $timestamps    = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'AdminID',
        'CustomerID',
        'Rate',
        'Status',
        'Comment',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'CustomerID');    
    }

}
