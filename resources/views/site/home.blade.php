@extends('site.layout')
@section('title', 'Essa é a página Home')
@section('conteudo')

<div class="row container">

@foreach ($produtos as $produto)

<div class="col s12 m4">
    <div class="card">
        <div class="card-image">
            <img src="{{$produto->imagem}}">
            <a href="{{ route('site.details', $produto->slug) }}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
        </div>
        <div class="card-content">
            <span class="card-title">{{ Str::limit ($produto->nome, 30) }}</span>
            <p>{{ Str::limit($produto->descricao, 30) }}</p>
        </div>
    </div>
</div>
@endforeach
</div>

<div class="row center">
    {{ $produtos->links('custom.pagination') }}
</div>
{{-- @include('includes.mensagem', ['titulo' => 'Mensagem de sucesso!']) --}}

{{-- @component('components.sidebar')
    @slot('paragrafo')
        Texto qualquer vindo do Slot
    @endslot
@endcomponent

@push('style')
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
@endpush

@push('script')
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>         
@endpush --}}
    


{{-- ESTRUTURAS DE CONTROLE --}}

{{-- isset($nome) ? 'existe' : 'não existe' --}}
{{-- {{ $teste ?? 'padrão'}} --}}

{{-- @if ($nome == 'Miguel')
    true
@else
    false
@endif --}}

{{-- @unless ($nome == 'Miguel')
    true
@else
    false
@endunless --}}

{{-- @switch($idade)
    @case(17)
        idade está correta
        @break
    @case(18)
        idade está errada
        @break
    @default
        default
@endswitch --}}

{{-- @isset($nome)
    existe
@endisset --}}

{{-- @empty($nome)
    está vazia
@endempty --}}

{{-- @auth
    está autenticado
@endauth --}}

{{-- @guest
    não está autenticado
@endguest --}}



{{-- ESTRUTURAS DE REPETIÇÃO --}}

{{-- @for ($aux = 0; $aux <= 10; $aux++)
    valor atual é {{ $aux }} <br>
@endfor --}}

{{-- @php $aux = 0; @endphp
@while ($aux <= 10)
    valor atual é {{ $aux }} <br>
    @php $aux++ @endphp
@endwhile --}}

{{-- @foreach ($frutas as $fruta)
    {{ $fruta }} <br>
@endforeach --}}

{{-- @forelse ($frutas as $fruta)
    {{ $fruta }} <br>
@empty
    Array está vazio
@endforelse --}}

@endsection