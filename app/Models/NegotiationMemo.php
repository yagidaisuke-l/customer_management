<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class NegotiationMemo extends Model
{
    use HasFactory;

    protected $fillable = [
        'trial_customer_id',
        'company_name',
        'meeting_date',
        'meeting_place',
        'contact_name',
        'position',
        'budget',
        'authority',
        'needs',
        'timing',
        'competitor',
        'decision_maker',
        'influence',
        'relationship',
        'discussion_summary',
        'accepted_proposal',
        'reconsider_proposal',
        'customer_issues',
        'solutions',
        'others',
        'good_reactions',
        'next_meeting_date',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(TrialCustomer::class, 'trial_customer_id');
    }

    
}
