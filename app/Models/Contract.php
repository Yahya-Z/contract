<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table = 'contracts';

    protected $fillable = [
        'contract_name' => 'required|string|max:255',
        'contract_date' => 'required|date_format:Y-m-d',
        'contract_hijri_date' => 'required|date_format:Y-m-d',
        'contract_location' => 'required|string|max:255',
        'contract_party_a' => 'required|string|max:255',
        'contract_party_a_crn' => 'required|integer|max:10',
        'contract_party_a_location' => 'required|string|max:255',
        'contract_party_b' => 'required|string|max:255',
        'contract_party_b_crn' => 'required|integer|max:10',
        'contract_party_b_location' => 'required|string|max:255',
        'contract_party_b_detalide_needs' => 'required|string|max:300',
        'contract_value' => 'required|string|max:255',
        'contract_value_words' => 'required|string|max:255',
        // Add other fields as needed
    ];
}
