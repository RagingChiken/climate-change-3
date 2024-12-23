@extends('layouts.app')

@section('content')
    <h1>Support the Cause</h1>
    <p>Your contribution helps fund environmental programs and solutions to combat climate change.</p>
    <form action="{{ route('donate.process') }}" method="POST">
        @csrf
        <label for="amount">Amount to Donate:</label>
        <input type="number" name="amount" id="amount" min="1" required>
        <button type="submit" class="btn btn-success">Donate Now</button>
    </form>
@endsection
