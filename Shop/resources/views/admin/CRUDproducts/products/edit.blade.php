@extends('admin.CRUDproducts.layouts.app-master')
@section('content')
 <div class="bg-light p-4 rounded">
 <h1>Update product</h1>
 <div class="lead">

 </div>

 <div class="container mt-4">
 <form method="post" action="{{ route('admin.CRUDproducts.products.update', $product->id) }}">
 @method('patch')
 @csrf
 <div class="mb-3">
 <label for="name" class="form-label">Name</label>
 <input value="{{ $product->name }}"
 type="text"
 class="form-control"
 name="name"
 placeholder="Name" required>
 @if ($errors->has('name'))
 <span class="text-danger text-left">{{ $errors->first('name') }}</span>
 @endif
 </div>
 
 <div class="mb-3">
 <label for="description" class="form-label">Description</label>
 <input value="{{ $product->description }}"
 type="text"
 class="form-control"
 name="description"
 placeholder="Description address" required>
 @if ($errors->has('description'))
 <span class="text-danger text-left">{{ $errors->first('description') }}</span>
 @endif
 </div>

 <div class="mb-3">
 <label for="image" class="form-label">Image</label>
 <input value="{{ $product->image }}"
 type="text"
 class="form-control"
 name="image"
 placeholder="Image" required>
 @if ($errors->has('image'))
 <span class="text-danger text-left">{{ $errors->first('image') }}</span>
 @endif
 </div>

 <div class="mb-3">
 <label for="price" class="form-label">Price</label>
 <input value="{{ $product->price }}"
 type="number"
 class="form-control"
 name="price"
 placeholder="Price address" required>
 @if ($errors->has('price'))
 <span class="text-danger text-left">{{ $errors->first('price') }}</span>
 @endif
 </div>

 <button type="submit" class="btn btn-primary">Update product</button>
 <a href="{{ route('admin.CRUDproducts.products.index') }}" class="btn btn-light">Cancel</button>
 </form>
 </div>
 </div>
@endsection
