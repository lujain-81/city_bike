<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;
    
    protected $table      = 'customer';
    protected $primaryKey = 'CustomerID';
    public $timestamps    = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Name',
        'Email',
        'Phone',
        'Password',
        'NationalID'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'Password',
    ];

    public function getAuthPassword()
    {
        return $this->attributes['Password'];
    }

    public function rentals()
    {
        return $this->hasMany(Rental::class, 'CustomerID');    
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class, 'CustomerID');    
    }

    public function contacts()
    {
        return $this->hasMany(ContactUs::class, 'CustomerID');    
    }

}
