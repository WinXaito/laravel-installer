@extends('vendor.winxaito.laravel-installer.layouts.installer')

@section('content')
    @component('vendor.winxaito.laravel-installer.components.installer', [
        'route' => route('installer.permissions.next'),
        'step_title' => 'Permissions',
        'step_subtitle' => 'Vérifie si PHP a accès en lecture et en écriture au dossier nécessaire.'
    ])
        @include('vendor.winxaito.laravel-installer.partials.form-button')
    @endcomponent
@endsection