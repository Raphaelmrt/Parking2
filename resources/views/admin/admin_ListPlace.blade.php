<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Place') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Liste des places

                    <table>
                        <tr>
                            <td>Numéro place</td>
                            <td>Handicapé</td>
                            <td>Occupé par</td>
                        </tr>
                        @foreach ($Places as $Place)
                            <tr>
                                <td>{{$Place->id}}</td>
                                @if($Place->Handicapé)
                                    <td>oui</td>
                                @else
                                    <td>non</td>
                                @endif
                                @if($Place->Statut)
                                    
                                    <td>{{$Place->reservation[0]->user->name}}</td>
                                    
                                @else
                                    <td>libre</td>
                                @endif
                            </tr>
                        @endforeach

                                        
                    </table>  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
