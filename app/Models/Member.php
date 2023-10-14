<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'gender', 'registration_date', 'method', 'phone_number', 'email'
    ];

    // Additional properties, methods, and relationships can be defined here
}
