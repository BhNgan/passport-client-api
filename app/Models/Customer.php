<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;

    protected $primaryKey = 'code';

    public $incrementing = false;

    protected $fillable = ['code','name', 'last_name', 'first_name', 'phone_number', 'city_code'];


     /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['city'];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_code');
    }

}
