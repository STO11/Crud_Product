@extends('layout.layout')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lista de produtos</h3>
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
                            <a class="btn btn-primary" href="{{ route('controle.produto.create') }}">Cadastrar novo
                                produto</a>
                            <br /><br />
                            <div class="card-body table-responsive">
                                @if ($produtos->count())
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <th>Categoria</th>
                                            <th>Nome</th>
                                            <th>Preço</th>
                                            <th>Data cadastro</th>
                                            <th>Opções</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($produtos as $produto)
                                                <tr>
                                                    <td>
                                                        {{ $produto->categoria->nome_categoria }}
                                                    </td>
                                                    <td>
                                                        {{ $produto->nome_produto }}
                                                    </td>
                                                    <td>
                                                        R$ {{ number_format($produto->valor_produto, 2, ',', '.') }}
                                                    </td>
                                                    <td>
                                                        {{ $produto->data_cadastro_formatada }}
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-info"
                                                            href="{{ route('controle.produto.show', $produto->id_produto) }}"><i
                                                                class="fa fa-eye"></i></a>
                                                        <a class="btn btn-secondary"
                                                            href="{{ route('controle.produto.edit', $produto->id_produto) }}"><i
                                                                class="fa fa-edit"></i></a>
                                                        <a class="btn btn-danger"
                                                            href="{{ route('controle.produto.destroy', $produto->id_produto) }}"><i
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
