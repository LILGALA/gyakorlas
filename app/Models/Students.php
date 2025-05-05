<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Students extends Model
{
    protected $fillable=[
        'name',
        'age',
        'email'
    ];

    public function teachers():BelongsTo{
        return $this->belongsTo(Teachers::class);
    }
}
