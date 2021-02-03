@extends('layout.layout')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Produto</h3>
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
                            {!! Form::model(isset($produto) ? $produto : null, ['route' => isset($produto->id_produto) ?
                            ['controle.produto.update', $produto->id_produto] : 'controle.produto.store', 'files' => true])
                            !!}
                            <div class="form-group">
                                <label for="id_categoria_produto">Categoria *</label>
                                {!! Form::select('id_categoria_produto', ['' => 'Selecione'] + $categorias, null, ['class'
                                => 'form-control', 'required']) !!}
                            </div>
                            <div class="form-group">
                                <label for="nome_produto">Nome *</label>
                                {!! Form::text('nome_produto', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                            <div class="form-group">
                                <label for="valor_produto">Preço *</label>
                                {!! Form::text('valor_produto', null, ['class' => 'form-control money', 'required']) !!}
                            </div>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            {!! Form::close() !!}
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
