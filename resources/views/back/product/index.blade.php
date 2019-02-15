@extends('layouts.master')
@section('content')
{{$products->links()}}
@include('back.product.partials.flash')

<div>
<p><a href="{{route('admin.create')}}"><button type="button" class="btn btn-warning btn-lg">Ajouter un produit</button></a></p>   
</div>    

<table class="table table-striped">
    <thead>
        <tr>
            <th>Title</th>
            <th>Categorie</th>
	        <th>Prix</th>
            <th>Status</th>
            <th>Mettre à jour</th>
            <th>Supprimer</th>
            
        </tr>
    </thead>
    <tbody>
    @forelse($products as $product)
        <tr>
            <td>{{$product->title}}</td>
            <td>{{$product->categorie->title}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->status}}</td>
            <td><a class="btn btn-secondary" href="{{route('admin.edit', $product->id)}}" type="submit" value="delete">Mettre à jour</a></td>
            <td>
            <form class="delete" method="POST" action="{{route('admin.destroy', $product->id)}}">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <input class="btn btn-danger" type="submit" value="delete" >
            </form>
            </td>
        
        </tr>
        
    @empty
        aucun titre ...
    @endforelse
    </tbody>
</table>
{{$products->links()}}
@endsection 