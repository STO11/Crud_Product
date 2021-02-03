<!-- Stored in resources/views/layouts/app.blade.php -->
@section('head')
    @include('includes.controle.head')

@section('sidebar')
    @include('includes.controle.sidebar')

@section('menu')
    @include('includes.controle.menu')

@show
<div class="content-wrapper p-4">
    <div class="w-50">
        @yield('content')
    </div>
</div>

@section('footer')
@include('includes.controle.footer')
