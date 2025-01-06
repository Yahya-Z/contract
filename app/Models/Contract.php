<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table = 'contracts';

    protected $fillable = [
        'contract_name',
        'contract_date',
        'contract_hijri_date',
        'contract_number',
        'contract_location',
        'contract_party_a',
        'contract_party_a_crn',
        'contract_party_a_location',
        'contract_party_b',
        'contract_party_b_crn',
        'contract_party_b_location',
        'contract_party_b_detailed_needs',
        'contract_value',
        'currency',
        'contract_value_words',
        // Add other fields as needed
    ];
}
