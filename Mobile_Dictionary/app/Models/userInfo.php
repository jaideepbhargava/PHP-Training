<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserInfo extends Model
{
    use SoftDeletes;

    protected $table = 'user_infos';
    protected $fillable = [
        'name',
        'mobile_number',
        'email'
    ];
    use HasFactory;
}
