@extends('layouts.app')

<h1>Elenco Vestiti</h1>

<ol>
    @foreach ($dresses as $dress)
        <li>
            <ul>
                <li>{{ $dress->Tipo}}</li>
                <li>{{ $dress->Marca}}</li>
                <li>{{ $dress->Modello}}</li>
                <li>{{ $dress->Colore}}</li>
                <li>{{ $dress->Taglia}}</li>
                <li>{{ $dress->Genere}}</li>
                <li>
                    @if ($dress->Note=='')
                        <span>nessuna nota</span>
                    @else
                    {{ $dress->Note}}
                    @endif
                </li>
            </ul>
        </li>
    @endforeach
</ul>
