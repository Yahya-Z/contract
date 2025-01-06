<x-layout>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="card-title mb-4 text-center">Create Contract</h2>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('contracts.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="contract_name" class="form-label">Contract Name</label>
                            <input type="text" name="contract_name" id="contract_name" class="form-control @error('contract_name') is-invalid @enderror" value="{{ old('contract_name') }}">
                            @error('contract_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="contract_date" class="form-label">Contract Date</label>
                            <input type="date" name="contract_date" id="contract_date" class="form-control @error('contract_date') is-invalid @enderror" value="{{ old('contract_date') }}">
                            @error('contract_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="contract_hijri_date" class="form-label">Contract Hijri Date</label>
                            <input type="date" name="contract_hijri_date" id="contract_hijri_date" class="form-control @error('contract_hijri_date') is-invalid @enderror" value="{{ old('contract_hijri_date') }}">
                            @error('contract_hijri_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="contract_location" class="form-label">Contract Location</label>
                            <input type="text" name="contract_location" id="contract_location" class="form-control @error('contract_location') is-invalid @enderror" value="{{ old('contract_location') }}">
                            @error('contract_location')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="contract_number" class="form-label">Contract Number</label>
                            <input type="text" name="contract_number" id="contract_number" class="form-control @error('contract_number') is-invalid @enderror" value="{{ old('contract_number') }}">
                            @error('contract_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="contract_party_a" class="form-label">Contract First Party</label>
                            <input type="text" name="contract_party_a" id="contract_party_a" class="form-control @error('contract_party_a') is-invalid @enderror" value="{{ old('contract_party_a') }}">
                            @error('contract_party_a')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="contract_party_a_crn" class="form-label">Contract First Party CRN</label>
                            <input type="number" name="contract_party_a_crn" id="contract_party_a_crn" class="form-control @error('contract_party_a_crn') is-invalid @enderror" value="{{ old('contract_party_a_crn') }}">
                            @error('contract_party_a_crn')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="contract_party_a_location" class="form-label">Contract First Party Location</label>
                            <input type="text" name="contract_party_a_location" id="contract_party_a_location" class="form-control @error('contract_party_a_location') is-invalid @enderror" value="{{ old('contract_party_a_location') }}">
                            @error('contract_party_a_location')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="contract_party_b" class="form-label">Contract Second Party</label>
                            <input type="text" name="contract_party_b" id="contract_party_b" class="form-control @error('contract_party_b') is-invalid @enderror" value="{{ old('contract_party_b') }}">
                            @error('contract_party_b')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="contract_party_b_crn" class="form-label">Contract Second Party CRN</label>
                            <input type="number" name="contract_party_b_crn" id="contract_party_b_crn" class="form-control @error('contract_party_b_crn') is-invalid @enderror" value="{{ old('contract_party_b_crn') }}">
                            @error('contract_party_b_crn')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="contract_party_b_location" class="form-label">Contract Second Party Location</label>
                            <input type="text" name="contract_party_b_location" id="contract_party_b_location" class="form-control @error('contract_party_b_location') is-invalid @enderror" value="{{ old('contract_party_b_location') }}">
                            @error('contract_party_b_location')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="contract_party_b_detailed_needs" class="form-label">Contract Second Party Detailed Needs</label>
                            <textarea name="contract_party_b_detailed_needs" id="contract_party_b_detailed_needs" class="form-control @error('contract_party_b_detailed_needs') is-invalid @enderror">{{ old('contract_party_b_detailed_needs') }}</textarea>
                            @error('contract_party_b_detailed_needs')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="contract_value" class="form-label">Contract Value</label>
                            <div class="input-group">
                                <input type="text" name="contract_value" id="contract_value" class="form-control @error('contract_value') is-invalid @enderror" value="{{ old('contract_value') }}">
                                <select name="currency" id="currency" class="form-select @error('currency') is-invalid @enderror">
                                    <option value="USD" {{ old('currency') == 'USD' ? 'selected' : '' }}>USD</option>
                                    <option value="EUR" {{ old('currency') == 'EUR' ? 'selected' : '' }}>EUR</option>
                                    <option value="GBP" {{ old('currency') == 'GBP' ? 'selected' : '' }}>GBP</option>
                                    <option value="SAR" {{ old('currency') == 'SAR' ? 'selected' : '' }}>SAR</option>
                                </select>
                            </div>
                            @error('contract_value')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            @error('currency')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="contract_value_words" class="form-label">Contract Value in Words</label>
                            <input type="text" name="contract_value_words" id="contract_value_words" class="form-control @error('contract_value_words') is-invalid @enderror" value="{{ old('contract_value_words') }}">
                            @error('contract_value_words')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Save Contract</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</x-layout>
