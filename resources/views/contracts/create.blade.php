<x-layout>

<div class="container mx-auto mt-10">
    <div class="max-w-md mx-auto bg-white p-5 rounded-md shadow-sm">
        <h2 class="text-2xl font-bold mb-5">Create Contract</h2>
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('contracts.store') }}" method="POST" class="form">
            @csrf
            <div class="mb-4">
                <label for="contract_name" class="roboto block text-gray-700">Contract Name</label>
                <input type="text" name="contract_name" id="contract_name" class="input-field w-full p-2 border rounded @error('contract_name') border-red-500 @enderror" value="{{ old('contract_name') }}">
                @error('contract_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4 date-field">
                <label for="contract_date" class="roboto block text-gray-700">Contract Date</label>
                <input type="date" name="contract_date" id="contract_date" class="dates input-field w-full p-2 border rounded @error('contract_date') border-red-500 @enderror" value="{{ old('contract_date') }}">
                @error('contract_date')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4 date-field">
                <label for="contract_hijri_date" class="roboto block text-gray-700">Contract Hijri Date</label>
                <input type="date" name="contract_hijri_date" id="contract_hijri_date" class="dates input-field w-full p-2 border rounded @error('contract_hijri_date') border-red-500 @enderror" value="{{ old('contract_hijri_date') }}">
                @error('contract_hijri_date')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="contract_location" class="roboto block text-gray-700">Contract Location</label>
                <input type="text" name="contract_location" id="contract_location" class="input-field w-full p-2 border rounded @error('contract_location') border-red-500 @enderror" value="{{ old('contract_location') }}">
                @error('contract_location')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="contract_party_a" class="roboto block text-gray-700">Contract First Party</label>
                <input type="text" name="contract_party_a" id="contract_party_a" class="input-field w-full p-2 border rounded @error('contract_party_a') border-red-500 @enderror" value="{{ old('contract_party_a') }}">
                @error('contract_party_a')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="contract_party_a_crn" class="roboto block text-gray-700">Contract First Party Commercial Registration Number</label>
                <input type="number" name="contract_party_a_crn" id="contract_party_a_crn" class="input-field w-full p-2 border rounded @error('contract_party_a_crn') border-red-500 @enderror" value="{{ old('contract_party_a_crn') }}">
                @error('contract_party_a_crn')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="contract_party_a_location" class="roboto block text-gray-700">Contract First Party Location</label>
                <input type="text" name="contract_party_a_location" id="contract_party_a_location" class="input-field w-full p-2 border rounded @error('contract_party_a_location') border-red-500 @enderror" value="{{ old('contract_party_a_location') }}">
                @error('contract_party_a_location')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="contract_party_b" class="roboto block text-gray-700">Contract Second Party</label>
                <input type="text" name="contract_party_b" id="contract_party_b" class="input-field w-full p-2 border rounded @error('contract_party_b') border-red-500 @enderror" value="{{ old('contract_party_b') }}">
                @error('contract_party_b')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="contract_party_b_crn" class="roboto block text-gray-700">Contract Second Party Commercial Registration Number</label>
                <input type="number" name="contract_party_b_crn" id="contract_party_b_crn" class="input-field w-full p-2 border rounded @error('contract_party_b_crn') border-red-500 @enderror" value="{{ old('contract_party_b_crn') }}">
                @error('contract_party_b_crn')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="contract_party_b_location" class="roboto block text-gray-700">Contract Second Party Location</label>
                <input type="text" name="contract_party_b_location" id="contract_party_b_location" class="input-field w-full p-2 border rounded @error('contract_party_b_location') border-red-500 @enderror" value="{{ old('contract_party_b_location') }}">
                @error('contract_party_b_location')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="contract_party_b_detailed_needs" class="roboto block text-gray-700">Contract Second Party Detailed Needs</label>
                <textarea name="contract_party_b_detailed_needs" id="contract_party_b_detailed_needs" class="ta input-field w-full p-2 border rounded @error('contract_party_b_detailed_needs') border-red-500 @enderror" value="{{ old('contract_party_b_detailed_needs') }}"></textarea>
                @error('contract_party_b_detailed_needs')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="contract_value" class="roboto block text-gray-700">Contract Value</label>
                <div class="flex-container">
                    <input type="text" name="contract_value" id="contract_value" class="input-field-c w-full p-2 border rounded @error('contract_value') border-red-500 @enderror" value="{{ old('contract_value') }}">
                    <select name="currency" id="currency" class="roboto p-2 border rounded @error('currency') border-red-500 @enderror">
                        <option class="roboto" value="USD" {{ old('currency') == 'USD' ? 'selected' : '' }}>USD</option>
                        <option class="roboto" value="EUR" {{ old('currency') == 'EUR' ? 'selected' : '' }}>EUR</option>
                        <option class="roboto" value="GBP" {{ old('currency') == 'GBP' ? 'selected' : '' }}>GBP</option>
                        <option class="roboto" value="SAR" {{ old('currency') == 'SAR' ? 'selected' : '' }}>SAR</option>
                        <!-- Add more currencies as needed -->
                    </select>
                </div>
                @error('contract_value')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                @error('currency')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="contract_value_words" class="roboto block text-gray-700">Contract Written Value (Words)</label>
                <input type="text" name="contract_value_words" id="contract_value_words" class="input-field w-full p-2 border rounded @error('contract_value_words') border-red-500 @enderror" value="{{ old('contract_value_words') }}">
                @error('contract_value_words')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <!-- Add other fields as needed -->
            <button type="submit" class="w-full p-2 bg-blue-500 text-white rounded"><strong>Save Contract</strong></button>
        </form>
    </div>
</div>

</x-layout>