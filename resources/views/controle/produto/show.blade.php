@extends('layout.layout')

@section('title', 'Page Title')

@section('content')
    <br />
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
                            @if ($produto)
                                <div class="container">
                                    <div class="row">
                                        <div class="col-5"><strong>Categoria: </strong>
                                            {{ $produto->categoria->nome_categoria }}</div>
                                        <div class="w-100"></div>
                                        <div class="col-5"><strong>Nome:</strong> {{ $produto->nome_produto }}</div>
                                        <div class="w-100"></div>
                                        <div class="col-5"><strong>Data de cadastro: </strong>
                                            {{ $produto->data_cadastro_formatada }}</div>
                                        <div class="w-100"></div>
                                        <div class="col-5"><strong>Preço:</strong> R$
                                            {{ number_format($produto->valor_produto, 2, ',', '.') }}</div>
                                        <div class="w-100"></div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    @section('scripts')
    <script>
      alert($('body'))
    </script>
    @endsection
@endsection
