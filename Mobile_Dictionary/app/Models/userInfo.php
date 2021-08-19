<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = 'user_infos';
    protected $column = [
        'name',
        'mobile_number',
        'email'
    ];
    use HasFactory;
}
