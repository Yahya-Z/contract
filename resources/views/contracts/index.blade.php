<x-layout>

<h1 class="page-title">Contract Info</h1>

<a href="{{ route('contracts.create') }}" class="new-contract-btn">New Contract</a>

<div class="contract-grid mt-4">
    @foreach ($contracts as $contract)
        <div class="contract-card">
            <h2 class="contract-name">{{ $contract->contract_name }}</h2>
            <p class="contract-detail"><strong>Date:</strong> {{ $contract->contract_date }}</p>
            <p class="contract-detail"><strong>Number:</strong> {{ $contract->contract_number }}</p>
            <p class="contract-detail"><strong>Location:</strong> {{ $contract->contract_location }}</p>
            <p class="contract-detail"><strong>Party A:</strong> {{ $contract->contract_party_a }}</p>
            <p class="contract-detail"><strong>Party B:</strong> {{ $contract->contract_party_b }}</p>
            <a href="{{ route('contracts.show', $contract->id) }}" class="view-details-link">View Details</a>
            <a href="{{ route('contracts.pdf', $contract->id) }}" target="_blank" class="btn-primary">Preview PDF</a>
            <a href="{{ route('contracts.download', $contract->id) }}" class="download-button">Download PDF</a>
        </div>
    @endforeach
</div>

</x-layout>
