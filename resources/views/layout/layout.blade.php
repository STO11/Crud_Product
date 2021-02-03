<!-- Stored in resources/views/layouts/app.blade.php -->
@section('head')
    @include('includes.controle.head')

@section('sidebar')
    @include('includes.controle.sidebar')

@section('menu')
    @include('includes.controle.menu')
    
@show
<div class="content-wrapper">
    @yield('content')
</div>

@section('footer')
@include('includes.controle.footer')
   