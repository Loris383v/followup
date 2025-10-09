@extends('layouts.app')

@section('content')
    <h2>Enregistrer un nouveau patient</h2>
<form action='{{ route('patients.store') }}' method='POST'>
    @csrf
    <label for='nom'>Nom:*</label>
    <input type='text' name='nom' required>

    <label for='prenom'>Prénom:*</label>
    <input type='text' name='prenom' required>

    <label for='dateNaissance'>Date de naissance:*</label>
    <input type='date' name='dateNaissance' required>

    <label for='idOrigineSurdite'>Origine de la surdité</label>
    <select name='idOrigineSurdite'>
        <option value="">-- origine de la surdité --</option>
        @foreach($origines as $origine)
            <option value="{{ $origine->id }}">
                {{ $origine->natureSurdite }}
            </option>
        @endforeach
    </select>

    <button type='submit'>Ajouter le patient</button>

    @if ($errors->any())
        <strong>Erreur(s) :</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

</form>
@endsection
