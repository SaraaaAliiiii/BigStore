@extends('layouts.app')

@section('content')
        <a href="/products" class="btn btn-default">Go Back</a> 
         <h1> {{$product->name}} </h1>
        <small>Added on {{$product->created_at}}</small>
        <div>
                {!!$product->description!!}
        </div>
        <hr>
        <a href="/products/{{$product->id}}/edit" class="btn btn-default">Edit product </a>
        {!!Form::open(['action'=> ['ProductsController@destroy',$product->id], 'method'=> 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
        {!!Form::close()!!}


        @endsection    