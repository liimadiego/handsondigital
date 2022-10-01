<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar permissões') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="{{route('edit_user_post', ['id' => $user->id])}}" class="container">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}" placeholder="Nome" aria-label="Nome">
                            </div>
                            <div class="col">
                                <label for="email">E-mail</label>
                                <input type="text" class="form-control" name="email" id="email" value="{{$user->email}}" placeholder="E-mail" aria-label="E-mail">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <button type="submit" class="btn btn-outline-dark">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
