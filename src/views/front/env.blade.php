@extends('vendor.winxaito.laravel-installer.layouts.installer')

@section('content')
    @component('vendor.winxaito.laravel-installer.components.installer', [
        'route' => route('installer.env.next'),
        'step_title' => 'Environnements',
        'step_subtitle' => 'Défini les variables d\'environnement',
    ])
        @include('vendor.winxaito.laravel-installer.partials.form-button')
    @endcomponent
@endsection