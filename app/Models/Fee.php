<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Fee extends Model
{
    use HasFactory;

    protected $table = 'fees';

    protected $fillable = [
        'user_id',
        'date',
        'amount'
    ];

    // Search function 
    public function scopeSearch($query, $value)
{
    return $query->whereHas('user', function ($query) use ($value) {
        $query->where('name', 'like', "%{$value}%");
    })->orWhere('date', 'like', "%{$value}%");
}


    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    
}
