@extends('layouts.master')

@section('content')


<div class="container">
{{$products->links()}}
<p class="text-right">
    {{$categorie->title?? ''}} 
    {{$nbproducts}} résultats
</p>



<div class="d-flex justify-content-between flex-wrap">
    
    @foreach($products as $product)
    <div class="p-2 text-center">
        <a href="{{url('product', $product->id)}}" class="thumbnail">
            <img src="{{asset('images/'.$product->url_image)}}" alt="{{$product->url_image}}" style="width:300px;height:300px">
        </a>
        <p>
            <a href="{{url('product', $product->id)}}">{{$product->title}}</a> <br>
            {{$product->price}} euros
        </p>
    </div>  
    @endforeach
            
        
</div>




 






</div>
@endsection