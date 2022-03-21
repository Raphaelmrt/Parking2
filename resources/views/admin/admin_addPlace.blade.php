<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajouter une place') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{route('Place.store')}}" method="POST">
                        @csrf
                        <H4>La place est-elle pour Handicapé ?</H4>
                        <br><label for="nonHandicapé">Non
                            <input type="radio" name="nonHandicapé" value="0" checked><br>
                        <label for="handicapé">Oui    
                            <input type="radio" name="handicapé" value="1"><br>
                        

                        <input type="submit" value="Valider"> 
                    </form>








                </div>
            </div>
        </div>
    </div>
</x-app-layout>
