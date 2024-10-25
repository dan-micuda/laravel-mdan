<!-- resources/views/stire/StireForm.blade.php -->
<!--@include('Stire.StireForm', ['stire' => $stire, 'readonly' => 'readonly']) -->
<div class="border p-4 rounded">
    <div>
        <label for="created_dt">Created Date:</label>
        <input type="text" id="created_dt" name="created_dt" value="{{ $stire->created_dt }}" {{ $readonly }}>
    </div>
    <div>
        <label for="hour">Hour:</label>
        <input type="number" id="hour" name="hour" value="{{ $stire->hour }}" {{ $readonly }}>
    </div>
    <div>
        <label for="created_dt">Sursa:</label>
        <input type="text" id="sursa" name="sursa" value="{{ $stire->sursa }}" {{ $readonly }}>
    </div>
    <div>
        <label for="created_dt">Tape:</label>
        <input type="text" id="srs_tape" name="srs_tape" value="{{ $stire->srs_tape }}" {{ $readonly }}>
    </div>
    <div>
        <label for="TC">Time Code:</label>
        <input type="text" id="srs_TC" name="srs_TC" value="{{ $stire->srs_TC }}" {{ $readonly }}>
    </div>
    <div>
        <label for="TC">Durata:</label>
        <input type="text" id="srs_durata" name="srs_durata" value="{{ $stire->srs_durata }}" {{ $readonly }}>
    </div>
    <div>
        <label for="TC">Domeniu general:</label>
        <input type="text" id="dom_gen" name="dom_gen" value="{{ $stire->dom_gen }}" {{ $readonly }}>
    </div>
    <div>
        <label for="TC">Donmeniu special</label>
        <input type="text" id="dom_spc" name="dom_spc" value="{{ $stire->dom_spc }}" {{ $readonly }}>
    </div>
    <div>
        <label for="TC">Denumire text:</label>
        <input type="text" id="denunmire_text" name="denumire_text" value="{{ $stire->denumire_text }}" {{ $readonly }}>
    </div>
    <div>
        <label for="TC">Denumire cod:</label>
        <input type="text" id="denumire_cod" name="denumire_cod" value="{{ $stire->denumire_cod }}" {{ $readonly }}>
    </div>
    <div>
        <label for="TC">Titlu:</label>
        <input type="text" id="titlu" name="titlu" value="{{ $stire->titlu }}" {{ $readonly }}>
    </div>
    <div>
        <label for="TC">Stire:</label>
        <input type="text" id="stire" name="stire" value="{{ $stire->stire }}" {{ $readonly }}>
    </div>
    <!-- Add more fields here -->
    @if (!$readonly)
        <button type="submit" class="bg-blue-500 text-white">Update</button>
    @endif
</div>
