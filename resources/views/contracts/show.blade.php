<x-layout>

<div class="container mt-5 contract-details-container">
  <!-- Header Section -->
  <header class="contract-header mb-4">
    <h1 class="contract-title"><strong>{{ $contract->contract_name }}</strong></h1>
    <div class="contract-meta">
      <p><strong>Date:</strong> {{ $contract->contract_date }}</p>
      <p><strong>Hijri Date:</strong> {{ $contract->contract_hijri_date }}</p>
      <p><strong>Location:</strong> {{ $contract->contract_location }}</p>
      <p><strong>Number:</strong> {{ $contract->contract_number }}</p>
    </div>
  </header>

  <!-- Parties Section -->
  <section class="contract-parties row mb-4">
    <div class="party party-a col-md-6">
      <h2><strong>Party A</strong></h2>
      <p><strong>Name:</strong> {{ $contract->contract_party_a }}</p>
      <p><strong>CRN:</strong> {{ $contract->contract_party_a_crn }}</p>
      <p><strong>Location:</strong> {{ $contract->contract_party_a_location }}</p>
    </div>
    <div class="party party-b col-md-6">
      <h2><strong>Party B</strong></h2>
      <p><strong>Name:</strong> {{ $contract->contract_party_b }}</p>
      <p><strong>CRN:</strong> {{ $contract->contract_party_b_crn }}</p>
      <p><strong>Location:</strong> {{ $contract->contract_party_b_location }}</p>
    </div>
  </section>

  <!-- Details Section -->
  <section class="contract-details mb-4">
    <h3><strong>Contract Details</strong></h3>
    <p>{{ $contract->contract_party_b_detailed_needs }}</p>
  </section>

  <!-- Financial Section -->
  <section class="contract-financial mb-4">
    <div class="financial-row row">
      <div class="col-md-6">
        <p><strong>Contract Value:</strong> {{ $contract->contract_value }}</p>
      </div>
      <div class="col-md-6">
        <p><strong>Currency:</strong> {{ $contract->currency }}</p>
      </div>
    </div>
    <p><strong>Contract Value in Words:</strong> {{ $contract->contract_value_words }}</p>
  </section>

  <!-- Action Buttons -->
  <footer class="contract-footer">
    <a href="{{ route('contracts.index') }}" class="btn btn-secondary">Back to Contracts</a>
    <a href="{{ route('contracts.pdf', $contract->id) }}" target="_blank" class="btn btn-primary">Preview PDF</a>
    <a href="{{ route('contracts.download', $contract->id) }}" class="btn btn-success">Download PDF</a>
  </footer>
</div>

</x-layout>
