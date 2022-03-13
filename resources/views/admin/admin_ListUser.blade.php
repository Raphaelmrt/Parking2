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
                    Liste des utilisateurs

                    <table>
                        <thead>
                            <th>nom</th>
                            <th>prénom</th>
                            <th>email</th>
                            <th>modification</th>
                        </thead>
                        <tbody
                        @foreach ($users as $user)
                        
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->surname}}</td>
                                <td>{{$user->email}}</td>
                                <td><a href="{{route('UserManagement.edit', $user->id)}}">modifier</a></td>
                            </tr>
                        
                        @endforeach
                        </tbody>

                                        
                    </table>  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
