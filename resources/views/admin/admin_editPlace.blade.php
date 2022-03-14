<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer une place') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{route('Place.update', $place->id)}}" method="POST">
                        @csrf
                        @if($place->handicapé)
                            <input type="radio" name="handicapé" value="Handicapé">
                            <input type="radio" name="nonHandicapé" value="Normal">
                        @else
                            <input type="radio" name="handicapé" value="Handicapé">
                            <input type="radio" name="nonHandicapé" value="Normal">
                        @endif

                        <input type="submit" value="Valider"> 
                    </form>








                </div>
            </div>
        </div>
    </div>
</x-app-layout>
