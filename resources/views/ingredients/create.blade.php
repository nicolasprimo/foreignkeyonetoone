@extends('template.main')

@section('content')

<form action="/ingredient/store" method="POST">
    @csrf
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" id="nom" aria-describedby="nom"
            placeholder="Enter name" name="nom">       
    </div>   
    <div class="form-group">
        <label for="prix">Prix</label>
        <input step="0.01" type="number" class="form-control" id="prix" aria-describedby="prix" placeholder="Enter prix" name="prix">
    </div>
    <div class="form-group">
        <label for="couleur">Couleur</label>
        <input type="text" class="form-control" id="couleur" aria-describedby="couleur" placeholder="Enter color" name="couleur">
    </div>
    <div class="form-group">
        <label for="quantite">Quantite</label>
        <input type="number" class="form-control" id="quantite" aria-describedby="quantite" placeholder="Enter quantite" name="quantite">
    </div>
    <div class="form-group">
        <label for="poids">Poids</label>
        <input type="number" class="form-control" id="poids" aria-describedby="poids" placeholder="Enter poids" name="poids">
    </div>
    <button type="submit" class="btn btn-success">Créer</button>
</form>

@endsection