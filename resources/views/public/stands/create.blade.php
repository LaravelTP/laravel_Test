@extends('layouts.app') {{-- Adapte si ton layout est différent --}}

@section('content')
<div class="container">
    <h2>Créer un nouveau stand</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('stands.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="nom">Nom du stand :</label>
            <input type="text" name="nom" required>
        </div>

        <div>
            <label for="description">Description :</label>
            <textarea name="description" required></textarea>
        </div>

        <div>
            <label for="image">Image :</label>
            <input type="file" name="image">
        </div>

        <button type="submit">Créer</button>
    </form>
</div>
@endsection
