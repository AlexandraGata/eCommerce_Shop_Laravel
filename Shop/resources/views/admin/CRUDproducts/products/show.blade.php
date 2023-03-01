@extends('admin.CRUDproducts.layouts.app-master')
@section('content')
 <div class="bg-light p-4 rounded">
 <h1>Show product</h1>
 <div class="lead">

 </div>

 <div class="container mt-4">
 <div>
 Name: {{ $product->name }}
 </div>
 <div>
 Description: {{ $product->description }}
 </div>
 <div>
 Image: {{ $product->image }}
 </div>
 <div>
 Price: {{ $product->price }}
 </div>
 </div>
 </div>
 <div class="mt-4">
 <a href="{{ route('admin.CRUDproducts.products.edit', $product->id) }}" class="btn btn-info">Edit</a>
 <a href="{{ route('admin.CRUDproducts.products.index') }}" class="btn btn-default">Back</a>
 </div>
@endsection
