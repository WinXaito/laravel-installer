@extends('vendor.winxaito.laravel-installer.layouts.installer')

@section('content')
    <div id="installer">
        <div id="installer-title">
            <h3>Assistant d'installation</h3>
        </div>

        <div>
            <form method="POST" action="">
                @foreach($wizard['steps'] as $step)
                    <div class="step" @if($loop->index != 0)style="display:none"@endif>
                        @if($step['type'] == 'requirements')
                            @include('vendor.winxaito.laravel-installer.partials.requirements')
                        @elseif($step['type'] == 'permissions')

                        @elseif($step['type'] == 'standard')
                            @isset($step['title'])
                                <h3 class="step-title">{{ $step['title'] }}</h3>
                            @endisset
                            @isset($step['subtitle'])
                                <p class="step-subtitle">{{ $step['subtitle'] }}</p>
                            @endisset

                            @foreach($step['groups'] as $group)
                                @switch($group['input_type'])
                                    @case('text')
                                    @include('vendor.winxaito.laravel-installer.partials.form-text', [
                                        'name' => $group['field_name'],
                                        'label_type' => $group['label_type'],
                                        'label' => $group['label'],
                                    ])
                                    @break
                                    @case('button')
                                    @include('vendor.winxaito.laravel-installer.partials.form-button', [
                                        'value' => $group['button_type'],
                                    ])
                                    @break
                                @endswitch
                            @endforeach
                        @elseif($step['type'] == 'finish')

                        @endif
                    </div>
                @endforeach
            </form>
        </div>
    </div>
@endsection