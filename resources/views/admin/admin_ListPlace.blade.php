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
                        <thead>
                            <th>Numéro place</th>
                            <th>Handicapé</th>
                            <th>Occupé par</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </thead>
                        <tbody>
                        @foreach ($Places as $Place)
                            <tr>
                                <td>{{$Place->id}}</td>
                                @if($Place->Handicapé)
                                    <td>oui</td>
                                @else
                                    <td>non</td>
                                @endif
                                @if($Place->estOccupe())
                                    
                                    <td>{{$Place->reservation[0]->user->name}} {{$Place->reservation[0]->user->surname}}</td>
                                    
                                @else
                                    <td>libre</td>
                                @endif
                                <td><a href="{{route('Place.edit', $Place->id)}}">modifier</a></td>
                                <td>
                                    <form method ='POST' action="{{route('Place.destroy', $Place)}}">
                                        @method('DELETE')
                                        @csrf
                                        <input type='submit' value='supprimer'>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                                        
                    </table>  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
