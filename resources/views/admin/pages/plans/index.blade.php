@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Planos <a href="{{ route('plans.create') }}" class="btn btn-dark">ADD</a></h1>
@stop

@section('content')
    <h5>Listagem de Planos</h5>
    <div class="card shadow-lg">
        <div class="card-header">
            #filtros
        </div>
        <div class="card-body">
            <div class="responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Preço</th>
                            <th width="100">Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($plans as $plan)
                        <tr>
                            <td>{{ $plan->name }}</td>
                            <td>{{ $plan->price }}</td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm">VER</a>
                            </td>
                        @empty
                            <div class="alert alert-secondary">
                                Nenhum registro encontrado.
                            </div>
                        @endforelse
                        </tr>
                    </tbody>

                </table>

            </div>
        </div>
        <div class="card-footer">
            {{ $plans->links() }}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
