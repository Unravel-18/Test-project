<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Role extends Model
{
    use HasFactory;

    protected $fillable = [
            'title',
    ];

    public const ADMIN_ROLE = 'admin';
    public const USER_ROLE = 'user';
    public const ROLES = [self::ADMIN_ROLE,self::USER_ROLE];


    public function users ()
    {
        return $this->hasMany(User::class);
    }
}
