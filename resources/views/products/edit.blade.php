@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>
    {!!Form::open(['action'=>['ProductsController@update',$product->id],'method' => 'POST'])!!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name',$product->name,['class' => 'form-control','placeholder'=> 'item name'])}}
        </div>
        <div class="form-group">
                {{Form::label('price','Price')}}
                {{Form::text('price',$product->price,['class' => 'form-control','placeholder'=> 'item price'])}}
        </div>
        <div class = 'form-group'>
                {{Form::label('description','Description')}}
                {{Form::textarea('description',$product->description,['id'=> 'article-ckeditor','class' => 'form-control','placeholder'=> 'item description'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection    