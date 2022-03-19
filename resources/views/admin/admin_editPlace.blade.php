<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier le statut de la place') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Handicapé :
                    <form action="{{route('Place.update', $Place->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        @if($Place->handicapé)
                            <label for="nonHandicapé"> Non :<input type="radio" name="nonHandicapé" value="Normal"><br>
                            <label for="handicapé"> Oui :<input type="radio" name="handicapé" value="Handicapé" checked>
                            
                        @else
                            <label for="nonHandicapé"> Non :<input type="radio" name="nonHandicapé" value="Normal" checked><br>
                            <label for="handicapé"> Oui :<input type="radio" name="handicapé" value="Handicapé">
                            
                        @endif

                        <input type="submit" value="Valider"> 
                    </form>








                </div>
            </div>
        </div>
    </div>
</x-app-layout>
