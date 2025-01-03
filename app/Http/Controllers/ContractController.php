<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;

class ContractController extends Controller
{
    public function index()
    {
        return view('contracts/index', [
            'contracts' => Contract::all()
        ]);
    }

    public function create()
    {
        return view('contracts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
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
            'contract_party_b_detailde_needs' => 'required|string|max:1000',
            'contract_value' => 'required|string|max:255',
            'currency' => 'required|string|max:3', 
            'contract_value_words' => 'required|string|max:255',
            // Add other validation rules as needed
        ]);

        Contract::create($request->input());

        return redirect()->route('contracts.index')->with('success', 'Contract saved successfully.');
    }
}
