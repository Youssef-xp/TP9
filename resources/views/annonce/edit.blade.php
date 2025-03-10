@extends('annonce/template')

@section('content')
<h1>Modifier l'annonce</h1>

<form action="{{ route('annonces.update', $annonce) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Titre: <input type="text" name="titre" value="{{ $annonce->titre }}" required></label><br>
    <label>Description: <textarea name="description" required>{{ $annonce->description }}</textarea></label><br>
    <label>Type: 
        <select name="type">
            <option value="Appartement" {{ $annonce->type == 'Appartement' ? 'selected' : '' }}>Appartement</option>
            <option value="Maison" {{ $annonce->type == 'Maison' ? 'selected' : '' }}>Maison</option>
            <option value="Villa" {{ $annonce->type == 'Villa' ? 'selected' : '' }}>Villa</option>
            <option value="Magasin" {{ $annonce->type == 'Magasin' ? 'selected' : '' }}>Magasin</option>
            <option value="Terrain" {{ $annonce->type == 'Terrain' ? 'selected' : '' }}>Terrain</option>
        </select>
    </label><br>
    <label>Ville: <input type="text" name="ville" value="{{ $annonce->ville }}" required></label><br>
    <label>Superficie: <input type="number" name="superficie" value="{{ $annonce->superficie }}" required></label><br>
    <label>Neuf: 
        <input type="checkbox" name="neuf" value="1" {{ $annonce->neuf ? 'checked' : '' }}>
    </label><br>
    <label>Prix: <input type="number" step="0.01" name="prix" value="{{ $annonce->prix }}" required></label><br>
    <button type="submit">Mettre à jour</button>
</form>

<a href="{{ route('annonces.index') }}">Retour à la liste</a>
@endsection