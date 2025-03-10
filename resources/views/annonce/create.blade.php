@extends('annonce/template')

@section('content')
<h1>Ajouter une annonce</h1>

<form action="{{ route('annonces.store') }}" method="POST">
    @csrf
    <label>Titre: <input type="text" name="titre" required></label><br>
    <label>Description: <textarea name="description" required></textarea></label><br>
    <label>Type: 
        <select name="type">
            <option>Appartement</option>
            <option>Maison</option>
            <option>Villa</option>
            <option>Magasin</option>
            <option>Terrain</option>
        </select>
    </label><br>
    <label>Ville: <input type="text" name="ville" required></label><br>
    <label>Superficie: <input type="number" name="superficie" required></label><br>
    <label>Neuf: <input type="checkbox" name="neuf" value="1"></label><br>
    <label>Prix: <input type="number" step="0.01" name="prix" required></label><br>
    <button type="submit">Créer</button>
</form>
@endsection