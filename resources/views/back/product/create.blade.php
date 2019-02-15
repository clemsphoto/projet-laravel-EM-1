@extends('layouts.master')

@section('content')

<br>
<br>
<br>
<br>
<div class="container">
    <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
    {{csrf_field() }}
    <div class="row">
        <div class="col">
            <label for="title">Titre:</label>
            <input type="text" name="title"  value="{{old('title')}}" id="title" class="form-control" placeholder="Titre du Produit">
            @if($errors->has('title'))<span class="error bg-warning">{{$errors->first('title')}}</span>@endif
        </div>

        <div class="col">
            <div class="form-group">
                <label class="col-md-4 control-label" for="status">Statut:</label>
                    <div class="col-md-4">
                    <div class="radio">
                        <label for="status">
                        <input type="radio" @if(old('status')=='publié') checked @endif name="status" value="publié" checked> Publié
                        </label>
                    </div>

                    <div class="radio">
                        <label for="radios-1">
                        <input type="radio" @if(old('status')=='brouillon') checked @endif name="status" value="brouillon" > Brouillon
                        </label>
                    </div>
                </div>
            </div>                                                        
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <label for="description">Description :</label>
            <textarea type="text" name="description"class="form-control">{{old('description')}}</textarea>
            @if($errors->has('description')) <span class="error bg-warning">{{$errors->first('description')}}</span> @endif
        </div>
        <div class="col-md-6">
            <label for="code">Code du Produit:</label>
                <select id="code" name="code" class="form-control" >
                    <option>new</option>
                
                    <option>solde</option>

                </select>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
        <label for="price">Prix:</label>
        <input type="text" class="form-control" name="price"placeholder="Prix du produit " value="{{old('price')}}">
        @if($errors->has('price')) <span class="error bg-warning">{{$errors->first('price')}}</span> @endif
        </div>

        <div class="col">
        <label for="reference">Reference du Produit:</label>
        <input type="text" name="reference" class="form-control" placeholder="Reference">
        @if($errors->has('reference')) <span class="error bg-warning">{{$errors->first('reference')}}</span> @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
        <label for="categorie">Categorie:</label>
            <select class="form-control" id="categorie" name="categorie_id">
                
                @foreach($categories as $id => $title)
                <option value="{{$id}}">{{$title}}</option>
                @endforeach
            </select>
        </div>

    </div>

    <div class="row">
            <div class="col-md-6">
                <label for="size">Taille</label>
                    <select class="form-control" id="size">
                        <option value="36">36</option>
                        <option value="38">38</option>
                        <option value="40">40</option>
                        <option value="42">42</option>
                        <option value="44">44</option>
                        <option value="46">46</option>
                        <option value="48">48</option>
                        <option value="50">50</option>
                        <option value="52">52</option>
                    </select>
            </div>
        </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">        
                <label for="image">Image:</label>
                <input id="image" type="file" class="form-control-file" name="picture" width="200px">
                
            </div>
        </div>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Ajouter un produit</button>
    </div>
    </form>
</div>
@endsection