<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        @if(auth()->user()->admin)
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header text-center">
                                        Permissões de usuários
                                    </div>
                                    <div class="card-body">
                                        <div class="block text-center">
                                            <a href="{{route('users')}}" class="btn btn-outline-dark">Gerenciar Usuários</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center">
                                        Categorias
                                    </div>
                                    <div class="card-body">
                                        <div class="block text-center">
                                            <a href="{{route('categories')}}" class="btn btn-outline-dark">Gerenciar Categorias</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center">
                                        Arquivos
                                    </div>
                                    <div class="card-body">
                                        <div class="block text-center">
                                            <a href="{{route('files')}}" class="btn btn-outline-dark">Gerenciar Arquivos</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center">
                                        Cursos
                                    </div>
                                    <div class="card-body">
                                        <div class="block text-center">
                                            <a href="{{route('courses')}}" class="btn btn-outline-dark">Gerenciar Cursos</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
