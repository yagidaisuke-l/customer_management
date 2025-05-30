<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrialCustomer extends Model
{
    // テーブルに保存可能な属性を指定
    protected $fillable = [
        'name',
        'email',
        'phone_area_code',
        'phone_local_code',
        'phone_subscriber',
        'memo',
    ];
}
