@extends('layouts.app')

@section('content')
<table>
<tr>
    <th>nom</th>
    <th>prenom</th>
    <th>dateNaissance</th>
    <th>ageDepistageSurdite</th>
    <th>agePremierImplant</th>
    <th>ageDeuxiemeImplant</th>
    <th>origineSurdite</th>
</tr>
@forelse ($patients as $patient)

    <tr>
        <td>{{$patient->nom}}</td>
        <td>{{$patient->prenom}}</td>
        <td>{{$patient->dateNaissance}}</td>
        <td>{{$patient->ageDepistageSurdite}}</td>
        <td>{{$patient->agePremierImplant}}</td>
        <td>{{$patient->ageDeuxiemeImplant}}</td>
        <td>{{$patient->getOrigineSurdite->natureSurdite ?? 'Non renseigné'}}</td>
    </tr>
@empty
    <tr>
        <td colspan="6">Aucun patient</td>
    </tr>
@endforelse
</table>
@endsection
