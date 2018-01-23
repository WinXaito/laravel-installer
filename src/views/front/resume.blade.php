@extends('vendor.winxaito.laravel-installer.layouts.installer')

@section('content')
    @component('vendor.winxaito.laravel-installer.components.installer', [
        'route' => route('installer.resume.next'),
        'step_title' => 'Résumé de l\'installation',
    ])
        @include('vendor.winxaito.laravel-installer.partials.form-button')
    @endcomponent
@endsection