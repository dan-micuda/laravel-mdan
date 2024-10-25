<!-- resources/views/Stire/show.blade.php -->
@extends('layouts.app')
@section('content')
    <h1 class="text-2xl font-bold mb-4">Stire Record</h1>
    <form>
        @include('Stire.StireForm', ['stire' => $stire, 'readonly' => 'readonly'])
    </form>
    <a href="{{ route('Stire.edit', $stire->mv_id) }}" class="text-blue-500">Edit</a>
@endsection

