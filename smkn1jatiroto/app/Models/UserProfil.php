<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;


#[Fillable([
    'user_id',
    'nisn_nip',
    'gender',
    'phone',
    'address',
    'bio',
    'avatar'
])]

class UserProfil extends Model
{
    protected $table = 'user_profils';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
