@extends('annonce.template')

@section('content')
<h1>Liste des annonces</h1>
<table border="1">
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
            <a href="{{ route('annonces.show', $annonce) }}">Afficher</a>
            <a href="{{ route('annonces.edit', $annonce) }}">Modifier</a>
            <form action="{{ route('annonces.destroy', $annonce) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit" onclick="return confirm('Confirmer la suppression ?')">Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<a href="{{ route('annonces.create') }}">Ajouter une annonce</a>
@endsection