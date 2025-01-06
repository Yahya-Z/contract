<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;
use Barryvdh\DomPDF\Facade\Pdf;

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
        try {
            $validatedData = $request->validate([
                'contract_name' => 'required|string|max:255',
                'contract_date' => 'required|date_format:Y-m-d',
                'contract_hijri_date' => 'required|date_format:Y-m-d',
                'contract_number' => 'required|string|max:255',
                'contract_location' => 'required|string|max:255',
                'contract_party_a' => 'required|string|max:255',
                'contract_party_a_crn' => 'required|integer',
                'contract_party_a_location' => 'required|string|max:255',
                'contract_party_b' => 'required|string|max:255',
                'contract_party_b_crn' => 'required|integer',
                'contract_party_b_location' => 'required|string|max:255',
                'contract_party_b_detailed_needs' => 'nullable|string|max:1000',
                'contract_value' => 'required|string|max:255',
                'currency' => 'required|string|max:3', 
                'contract_value_words' => 'required|string|max:255',
                // Add other validation rules as needed                           
            ]);
            
            // Save the validated data to the database
            Contract::create($request->input());
    
            // Redirect to contracts page with success message
            return redirect()->route('contracts.index')->with('success', 'Contract saved successfully.');
    
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Display validation errors
            dd($e->errors());
        }
    }

    public function show(Contract $contract)
    {
        return view('contracts.show', compact('contract'));
    }

    public function generatePdf($id)
    {
        $contract = Contract::findOrFail($id);
        $pdf = PDF::loadView('pdf.pdf_layout', compact('contract'))->setPaper('a4', 'portrait');;

        return $pdf->stream('contract_preview.pdf');
    }

    public function downloadPdf($id)
    {
        $contract = Contract::findOrFail($id);
        $pdf = PDF::loadView('pdf.pdf_layout', compact('contract'))->setPaper('a4', 'portrait');;

        return response($pdf->stream('contract_preview.pdf'), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="contract_preview.pdf"',
        ]);
    }
}
