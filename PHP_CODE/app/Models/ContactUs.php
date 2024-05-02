<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $table      = 'Contact_Us';
    protected $primaryKey = 'ContactID';
    public $timestamps    = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'AdminID',
        'EmployeeID',
        'CustomerID',
        'Subject',
        'Message',
        'Replay',
    ];

    public function replies()
    {
        return $this->hasMany(ContactUs::class, 'Replay');    
    }

    public function replay()
    {
        return $this->belongsTo(ContactUs::class, 'Replay');    
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'CustomerID');    
    }
}
