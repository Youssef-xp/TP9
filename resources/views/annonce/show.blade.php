@extends('annonce.template')
@section('content')
<h1>Détails de l'annonce</h1>

<p>Titre : {{ $annonce->titre }}</p>
<p>Description : {{ $annonce->description }}</p>
<p>Type : {{ $annonce->type }}</p>
<p>Ville : {{ $annonce->ville }}</p>
<p>Superficie : {{ $annonce->superficie }} m²</p>
<p>Neuf : {{ $annonce->neuf ? 'Oui' : 'Non' }}</p>
<p>Prix : {{ number_format($annonce->prix, 2) }} DH</p>
<p>Ajouté le : {{ $annonce->created_at->format('d/m/Y H:i') }}</p>

<a href="{{ route('annonces.index') }}">Retour à la liste</a>
<a href="{{ route('annonces.edit', $annonce) }}">Modifier</a>

<form action="{{ route('annonces.destroy', $annonce) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Confirmer la suppression ?')" class="btn btn-danger">Supprimer</button>
</form>
@endsection