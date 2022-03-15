<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier utilisateur') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{route('UserManagement.store')}}" method="POST">
                        @csrf
                        <input type="text" name="name" id="name">
                        <input type="text" name="surname" id="surname">
                        <input type="mail" name="email" id="email">
                        <input type="password" name="password">
                        <input type="submit" value="Valider"> 
                    </form>








                </div>
            </div>
        </div>
    </div>
</x-app-layout>
