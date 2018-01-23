<div id="installer">
    <div id="installer-title">
        <h1>Assistant d'installation</h1>
    </div>

    <div class="step">
        @isset($step_title)
        <h3 class="step-title">{{ $step_title }}</h3>
        @endisset

        @isset($step_subtitle)
            <p class="step-subtitle">{{ $step_subtitle }}</p>
        @endisset

        <form method="POST" action="{{ $route }}">
            {{ csrf_field() }}

            {{ $slot }}
        </form>
    </div>
</div>