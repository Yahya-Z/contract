<x-layout>

<h1 class="page-title text-center my-4">Contract Info</h1>

<div class="text-center mb-4">
    <a href="{{ route('contracts.create') }}" class="btn btn-primary">New Contract</a>
</div>

<div class="container">
    <div class="row">
        @foreach ($contracts as $contract)
            <div class="col-md-4 mb-4">
                <div class="card" style="border: 1px rgb(0, 0, 0); border-radius: 12px !important;">
                    <div class="card-body" style="background-color: #2E3B4E; color: rgb(223, 223, 223); border-radius: 12px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);">
                        <h5 class="card-title">{{ $contract->contract_name }}</h5>
                        <p class="card-text"><strong>Date:</strong> {{ $contract->contract_date }}</p>
                        <p class="card-text"><strong>Number:</strong> {{ $contract->contract_number }}</p>
                        <p class="card-text"><strong>Location:</strong> {{ $contract->contract_location }}</p>
                        <p class="card-text"><strong>Party A:</strong> {{ $contract->contract_party_a }}</p>
                        <p class="card-text"><strong>Party B:</strong> {{ $contract->contract_party_b }}</p>
                        <a href="{{ route('contracts.show', $contract->id) }}" class="btn btn-secondary">View Details</a>
                        <a href="{{ route('contracts.pdf', $contract->id) }}" target="_blank" class="btn btn-primary">Preview PDF</a>
                        <a href="{{ route('contracts.download', $contract->id) }}" class="btn btn-success">Download PDF</a>
                        <form action="{{ route('contracts.destroy', $contract->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this contract?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</x-layout>
