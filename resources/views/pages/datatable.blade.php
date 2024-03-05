@extends('layout.app')

@section('content')
    <div class="text-center">
        <h3>DataTable Laravel - Livewire</h3>
    </div>

    <p class="bg-blue-500 hover:bg-blue-700"></p>
    <p class="bg-green-500 hover:bg-green-700"></p>
    <p class="bg-yellow-500 hover:bg-yellow-700"></p>
    <p class="bg-red-500 hover:bg-red-700"></p>

    <livewire:mymodal />
    <livewire:aplicaciones-table />
@endsection
