<x-layout>

<div class="contract-details-container">
  <!-- Header Section -->
  <header class="contract-header">
    <h1 class="contract-title">{{ $contract->contract_name }}</h1>
    <div class="contract-meta">
      <p><strong>Date:</strong> {{ $contract->contract_date }}</p>
      <p><strong>Hijri Date:</strong> {{ $contract->contract_hijri_date }}</p>
      <p><strong>Location:</strong> {{ $contract->contract_location }}</p>
    </div>
  </header>

  <!-- Parties Section -->
  <section class="contract-parties">
    <div class="party party-a">
      <h2>Party A</h2>
      <p><strong>Name:</strong> {{ $contract->contract_party_a }}</p>
      <p><strong>CRN:</strong> {{ $contract->contract_party_a_crn }}</p>
      <p><strong>Location:</strong> {{ $contract->contract_party_a_location }}</p>
    </div>
    <div class="party party-b">
      <h2>Party B</h2>
      <p><strong>Name:</strong> {{ $contract->contract_party_b }}</p>
      <p><strong>CRN:</strong> {{ $contract->contract_party_b_crn }}</p>
      <p><strong>Location:</strong> {{ $contract->contract_party_b_location }}</p>
    </div>
  </section>

  <!-- Details Section -->
  <section class="contract-details">
    <h3>Party B's Detailed Needs</h3>
    <p>{{ $contract->contract_party_b_detailed_needs }}</p>
  </section>

  <!-- Financial Section -->
  <section class="contract-financial">
    <div class="financial-row">
      <p><strong>Contract Value:</strong> {{ $contract->contract_value }}</p>
      <p><strong>Currency:</strong> {{ $contract->currency }}</p>
    </div>
    <p><strong>Contract Value in Words:</strong> {{ $contract->contract_value_words }}</p>
  </section>

  <!-- Back Button -->
  <footer class="contract-footer">
    <a href="{{ route('contracts.index') }}" class="back-button">Back to Contracts</a>
  </footer>
</div>

</x-layout>

