<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // 下記を記述する。
    protected $fillable = [
        'user_id',
        'name',
        'phone_number',
        'email'
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

}
