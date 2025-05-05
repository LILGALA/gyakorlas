<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teachers extends Model
{
    protected $fillable=[
        'name',
        'age',
        'phone',
        'class'
    ];

    public function students():HasMany{
        return $this->hasMany(Students::class);
    }
}
