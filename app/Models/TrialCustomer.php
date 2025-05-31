<?php

namespace App\Models;

use App\Models\NegotiationMemo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        'postal_code',
        'prefecture',
        'city',
        'street',
        'building',
        'company_name',
        'department',
    ];

    public function negotiationMemos(): HasMany
    {
        return $this->hasMany(NegotiationMemo::class);
    }
}
