<x-layout>

<h1>Contract Info</h1>

<a href="{{ route('contracts.create') }}">New Contract</a>

@foreach ($contracts as $contract)
    <h2>{{ $contract->contract_name }}</h2>
    <p>{{ $contract->date }}</p>
    <p>{{ $contract->hijri_date }}</p>
    <p>{{ $contract->location }}</p>
    <p>{{ $contract->party_a }}</p>
    <p>{{ $contract->party_a_crn }}</p>
    <p>{{ $contract->party_a_location }}</p>
    <p>{{ $contract->party_b }}</p>
    <p>{{ $contract->party_b_crn }}</p>
    <p>{{ $contract->party_b_location }}</p>
    <p>{{ $contract->party_b_detailed_needs }}</p>
    <p>{{ $contract->value }}</p>
    <p>{{ $contract->currency }}</p>
    <p>{{ $contract->value_words }}</p>
-
@endforeach

</x-layout>
