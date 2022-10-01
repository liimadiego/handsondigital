<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuários') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col"># ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td class="d-flex justify-content-end">
                                        <a href="{{route('edit_permissions', ['id' => $user->id])}}" class="btn btn-dark d-inline-block ml-2">Gerenciar Permissões</a>
                                        <a href="{{route('edit_user', ['id' => $user->id])}}" class="btn btn-warning d-inline-block ml-2">Editar</a>
                                        <a href="{{route('delete_user', ['id' => $user->id])}}" class="btn btn-danger d-inline-block ml-2">Exluir</a>
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
