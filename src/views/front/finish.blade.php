@extends('vendor.winxaito.laravel-installer.layouts.installer')

@section('content')
    @component('vendor.winxaito.laravel-installer.components.installer', [
        'route' => route('installer.finish.next'),
        'step_title' => 'Installation terminé',
    ])
        @include('vendor.winxaito.laravel-installer.partials.form-button')
    @endcomponent
@endsection