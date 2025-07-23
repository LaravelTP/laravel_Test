@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-bold mb-6">Nos exposants</h1>

        @if ($stands->isEmpty())
            <p class="text-gray-600">Aucun stand disponible pour le moment.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($stands as $stand)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-xl transition">
                        <a href="{{ route('stands.show', $stand) }}" class="block p-4">
                            <h2 class="text-xl font-semibold text-indigo-600">{{ $stand->nom }}</h2>
                            <p class="text-gray-700 mt-2">{{ Str::limit($stand->description, 100) }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
