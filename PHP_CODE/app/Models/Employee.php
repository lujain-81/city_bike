<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    use HasFactory;
    protected $table      = 'employee';
    protected $primaryKey = 'EmployeeID';
    public $timestamps    = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'AdminID',
        'Name',
        'Email',
        'Phone',
        'Password',
        'Salary',
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

}
