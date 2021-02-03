@extends('layout.layout')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                {{ isset($categoria->id_categoria_planejamento) ? 'Atualizar' : 'Cadastrar' }} categoria
                            </h3>
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
                            {!! Form::model(isset($categoria) ? $categoria : null, ['route' =>
                            isset($categoria->id_categoria_planejamento) ? ['controle.categoria.update',
                            $categoria->id_categoria_planejamento] : 'controle.categoria.store', 'files' => true]) !!}
                            <div class="form-group">
                                <label for="nome_categoria">Nome *</label>
                                {!! Form::text('nome_categoria', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
