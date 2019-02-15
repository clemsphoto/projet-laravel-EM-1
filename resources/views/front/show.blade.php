@extends('layouts.master')

@section('content')

<ol class="breadcrumb">
        <li><a href="index.php" title="Accueil">Boutique ></a></li>
</ol>




<div class="row" style="margin-left:250px"> 

    <div class="col-sm-2">
        <a href ="#">
            <img width="120"height = "120" src="{{asset('images/'.$product->url_image)}}"  class="rounded"></a>
            <img width="120"height = "120" src="{{asset('images/'.$product->url_image)}}"  class="rounded"></a>
            <img width="120"height = "120" src="{{asset('images/'.$product->url_image)}}"  class="rounded"></a>
    </div>


    <div class="col-lg-6">
            <a href="#" class="thumbnail">
            <img width="500"height = "550" src="{{asset('images/'.$product->url_image)}}" class="rounded">
            </a>
    </div>

    



<div class="col-lg-2">
    <h3>{{$product->title}}</h3>
    <p>ref : {{$product->reference}}</p>
    <p>{{$product->price}} euros<p>
    
    <select id="size">
        <option value="size">Taille 36</option> 
        <option value="size">Taille 38</option>
        <option value="size">Taille 40</option>
        <option value="size">Taille 42</option>
        <option value="size">Taille 44</option>
        <option value="size">Taille 46</option>
        <option value="size">Taille 48</option>
        <option value="size">Taille 50</option>
        <option value="size">Taille 52</option>
    </select>
</div> 

</div>


<br>
<div class="description" style="margin-left:250px">
Description : {{$product->description}}   
</div>       





@endsection 

