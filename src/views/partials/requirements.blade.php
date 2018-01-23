<h3 class="step-title">Logiciels requis</h3>
<p class="step-subtitle">Vérifie si les logiciels nécessaires au bon fonctionnement de l'application sont présent et s'ils sont dans une version assez récente.</p>

<div id="requirements">
    <ul>
        <li>{{ $requirements['core'] }}<small>{{ $requirement['core_minversion'] }}</small></li>
        @foreach($requirements['libs'] as $lib)
            <li>{{ $lib['name'] }} - {{ $lib['result'] }}</li>
        @endforeach
    </ul>
</div>