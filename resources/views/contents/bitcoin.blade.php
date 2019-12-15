@extends('index')
@section('title', 'Bitcoin')

@section('content')
    <div class="jumbotron text-center">
        <h1>@yield('title')</h1>
        <p>É considerada a primeira aplicação de blockchain e a primeira criptomoeda, criada em 2008 pelo anônimo Satoshi Nakamoto. Ainda é a criptomoeda mais popular e utilizada, sendo cada vez mais aceita para operações do dia-a-dia.</p>
    </div>

    <div class="row">
        <div class="col">
            <p>Quantidade negociada nas últimas 24 horas</p>
        </div>
        <div class="col">
            <p>Preço unitário da última negociação.</p>
        </div>
    </div>
    <hr><br>

        <div class="row">
            <div class="col">
                <h4>Oferta de Compra:</h4>
            </div>
            <div class="col">
                <h4>Oferta de Venda:</h4>
            </div>
        </div>

        <div class="row align-items-end">
            <div class="col">
                <span>Maior preço unitário de negociação</span>
            </div>
            <div class="col">
                <span>Menor preço unitário de negociação</span>
            </div>
        </div>


@endsection
