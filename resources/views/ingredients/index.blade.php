@extends('template.main')

@section('content')
    <h1>Bienvenue sur notre site d'ingredients pas cher</h1>
    <a href="/ingredient/create" class="btn btn-success btn-sm">Ajouter un ingrédient</a>
    
    @if (empty($ingredients))
        <h4>Il n'y a pas d'ingrédients :(</h4>
    @else
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Color</th>
                <th scope="col">Weight</th>
                <th scope="col">Quantity</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ingredients as $ingredient)
                    <tr>
                        <th scope="row">{{$ingredient->id}}</th>
                        <td>{{$ingredient->name}}</td>
                        <td>{{$ingredient->price}}</td>
                        <td>{{$ingredient->details_ingredient->color}}</td>
                        <td>{{$ingredient->details_ingredient->weight}}</td>
                        <td>{{$ingredient->details_ingredient->quantity}}</td>
                        <td><a href="/ingredient/{{$ingredient->id}}/delete" class="btn btn-danger btn-sm"> Del</a></td>
                    </tr>
            @endforeach
                   
                </tbody>
            </table>
    @endif

@endsection