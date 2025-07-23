<?php

use Livewire\Volt\Component;
use App\Models\Stand;


new class extends Component {
    //
}; 

$stands = Stand::all();

?>

<div>
    <h2 class="text-xl font-bold mb-4">Liste des stands</h2>
    <ul>
        @foreach($stands as $stand)
            <li class="mb-2">
                <a href="{{ route('stands.show', $stand) }}" class="text-blue-600">{{ $stand->nom }}</a>
            </li>
        @endforeach
    </ul>
</div>


