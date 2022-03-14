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

                    <form action="{{route('UserManagement.update',$user->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" name="name" id="name"value="{{$user->name}}">
                        <input type="text" name="surname" id="surname" value="{{$user->surname}}">
                        <input type="mail" name="email" id="email" value="{{$user->email}}">
                        <input type="submit" value="Valider"> 
                    </form>








                </div>
            </div>
        </div>
    </div>
</x-app-layout>
