@extends('admin.CRUDproducts.layouts.app-master')
@section('content')
 <div class="bg-light p-4 rounded">
 <h1>Add new product</h1>
 <div class="lead">
 Add new product and assign role.
 </div>
 <div class="container mt-4">
 <form method="POST" action="">
 @csrf
 <div class="mb-3">
 <label for="name" class="form-label">Name</label>
 <input value="{{ old('name') }}"
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
 <input value="{{ old('description') }}"
 type="text"
 class="form-control"
 name="description" 
 placeholder="Description address" required>
 @if ($errors->has('description'))
 <span class="text-danger text-left">{{ $errors->first('description') }}</span>
 @endif
 </div>
 <div class="mb-3">
 <label for="image" class="form-label">image</label>
 <input value="{{ old('image') }}"
 type="text"
 class="form-control"
 name="image"
 placeholder="image" required>
 @if ($errors->has('image'))
 <span class="text-danger text-left">{{ $errors->first('image') }}</span>
 @endif
 </div>
 <div class="mb-3">
 <label for="price" class="form-label">price</label>
 <input value="{{ old('price') }}"
 type="number"
 class="form-control"
 name="price"
 placeholder="price" required>
 @if ($errors->has('price'))
 <span class="text-danger text-left">{{ $errors->first('price') }}</span>
 @endif
 </div>
 <button type="submit" class="btn btn-primary">Save product</button>
 <a href="{{ route('admin.CRUDproducts.products.index') }}" class="btn btn-default">Back</a>
 </form>
 </div>
 </div>
@endsection
