<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Historique des réservations personnelles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    historique des réservations personnelles

                    <table>
                        <thead>
                            <th>numero place</th>
                            <th>date début</th>
                        </thead>
                        <tbody>
                        @foreach ($reservations as $reservation)
                        
                            <tr>
                                <td>{{$reservation->place_id}}</td>
 
                                <td>{{$reservation->DateDébut}}</td>
                                
                            </tr>
                        
                        @endforeach
                        </tbody>

                                        
                    </table>  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
