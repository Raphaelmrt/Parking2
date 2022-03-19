<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un utilisateur') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{route('UserManagement.store')}}" method="POST">
                        @csrf
                        <label for="name">Nom : </label><br>
                            <input type="text" name="name" id="name" value="">
                        <br><label for="surname">Prénom : </label><br>    
                            <input type="text" name="surname" id="surname" value="">
                        <br><label for="email">Courriel : </label><br>    
                            <input type="mail" name="email" id="email" placeholder=" Ex : VotreEmail@mail.mail">
                        <br><label for="password">Mot de passe : </label><br>    
                            <input type="password" name="password" value="">
                        <input type="submit" value="Valider"> 
                    </form>








                </div>
            </div>
        </div>
    </div>
</x-app-layout>
