<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id';
    
    public $incrementing = false;

    protected $table = 'navigations';

    public $timestamps = false;

    public function children() {
        return $this->hasMany(Navigation::class, 'parent_id');
    }
}
