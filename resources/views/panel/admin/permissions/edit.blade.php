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
                    <form method="post" action="{{route('edit_permissions_post', ['id' => $user->id])}}" class="container">
                        @csrf
                        <div class="row">
                            @foreach($permissions as $each_permission)
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">
                                            {{$each_permission['name']}}
                                        </div>
                                        <div class="card-body">
                                            <div class="block">
                                                <label for="{{$each_permission['name']}}" class="inline-flex items-center">
                                                    <input id="{{$each_permission['name']}}" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="permission[]" value="{{$each_permission['name']}}" {{$each_permission['has_permission'] ? 'checked' : ''}}>
                                                    <span class="ml-2 text-sm text-gray-600">Permitir que o usuário gerencie {{$each_permission['name']}}</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <button type="submit" class="btn btn-outline-dark">Salvar permissões</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
