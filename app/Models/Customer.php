<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id';
    
    public $incrementing = true;
    
    protected $fillable = ['name', 'last_name', 'first_name', 'phone_number', 'city_id'];
}
