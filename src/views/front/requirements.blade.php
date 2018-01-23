@extends('vendor.winxaito.laravel-installer.layouts.installer')

@section('content')
    @component('vendor.winxaito.laravel-installer.components.installer', [
        'route' => route('installer.requirements.next'),
        'step_title' => 'Logiciels requis',
        'step_subtitle' => 'Vérifie si les logiciels nécessaires au bon fonctionnement de l\'application sont présent et s\'ils sont dans une version assez récente.'
    ])
        <div id="requirements">
            <ul>
                <li>{{ $requirements['core']['name'] }}<small>{{ $requirements['core']['min_version'] }}</small></li>
                @foreach($requirements['libs'] as $lib)
                    <li>{{ $lib }}</li>
                @endforeach
            </ul>
        </div>

        @include('vendor.winxaito.laravel-installer.partials.form-button')
    @endcomponent
@endsection