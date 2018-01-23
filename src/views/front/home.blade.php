@extends('vendor.winxaito.laravel-installer.layouts.installer')

@section('content')
    @component('vendor.winxaito.laravel-installer.components.installer', [
        'route' => route('installer.home.next'),
    ])
        <p>Bienvenur dans le programme d'installation de {{ config('app.name') }}. Vous serez guidé tout au long de ce processus d'installation.</p>

        @include('vendor.winxaito.laravel-installer.partials.form-button')
    @endcomponent
@endsection