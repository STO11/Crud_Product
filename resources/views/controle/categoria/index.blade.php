@extends('layout.layout')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lista de categorias</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                    title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                                    title="Remove">
                                    <i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('includes.controle.mensagem')
                            <a class="btn btn-primary" href="{{ route('controle.categoria.create') }}">Cadastrar nova
                                categoria</a>
                            <br /><br />
                            <div class="card-body table-responsive">
                                @if ($categorias->count())
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <th>Nome</th>
                                            <th>Opções</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($categorias as $categoria)
                                                <tr>
                                                    <td>{{ $categoria->nome_categoria }}</td>
                                                    <td>
                                                        <a class="btn btn-info"
                                                            href="{{ route('controle.categoria.show', $categoria->id_categoria_planejamento) }}"><i
                                                                class="fa fa-eye"></i></a>
                                                        <a class="btn btn-secondary"
                                                            href="{{ route('controle.categoria.edit', $categoria->id_categoria_planejamento) }}"><i
                                                                class="fa fa-edit"></i></a>
                                                        <a class="btn btn-danger"
                                                            href="{{ route('controle.categoria.destroy', $categoria->id_categoria_planejamento) }}"><i
                                                                class="fa fa-window-close"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <h5>Sem registros</h5>
                                @endif
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <!-- Footer -->
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>

@endsection
