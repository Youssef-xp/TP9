@extends('annonce.template')

@section('content')
<h1>Liste des annonces</h1>
<table class="table table-stripped">
    <tr>
        <th>Titre</th>
        <th>Type</th>
        <th>Ville</th>
        <th>Prix</th>
        <th>Actions</th>
    </tr>
    @foreach($annonces as $annonce)
    <tr>
        <td>{{ $annonce->titre }}</td>
        <td>{{ $annonce->type }}</td>
        <td>{{ $annonce->ville }}</td>
        <td>{{ number_format($annonce->prix, 2) }} DH</td>
        <td>
            <a href="{{ route('annonces.show', $annonce) }}" class="btn btn-success m-2">Afficher</a>
            <a href="{{ route('annonces.edit', $annonce) }}" class="btn btn-primary m-2">Modifier</a>
            <form action="{{ route('annonces.destroy', $annonce) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit" onclick="return confirm('Confirmer la suppression ?')" class="btn btn-danger m-2">Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<a href="{{ route('annonces.create') }}" class="btn btn-info">Ajouter une annonce</a>
@endsection