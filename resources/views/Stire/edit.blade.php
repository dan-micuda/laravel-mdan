<!-- resources/views/Stire/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Stire Record</h1>
    <form method="POST" action="{{ route('Stire.update', $stire->mv_id) }}">
        @csrf
        @method('PUT')
        @include('Stire.Stireform', ['stire' => $stire, 'readonly' => ''])
    </form>
@endsection
