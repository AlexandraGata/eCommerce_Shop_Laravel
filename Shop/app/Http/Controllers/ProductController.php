<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
class ProductController extends Controller
{
  //
 public function index()
 {
 $products = Product::all();
 return view('products', compact('products'));
 }

 public function indexCRUD()
 {
 $products = Product::latest()->paginate(10);
 return view('admin.CRUDproducts.products.index', compact('products'));
 }
//afisare date produs
 public function show(Product $product)
 {
 return view('admin.CRUDproducts.products.show', [
 'product' => $product
 ]);
 }
//afisare formular pt create products
 public function create()
 {
 return view('admin.CRUDproducts.products.create');
 }

//memorare date produs creat
public function store(Product $product, StoreProductRequest $request)
{
//Numai în scopuri demonstrative. La crearea unui utilizator sau la invitarea unui utilizator
// ar trebui să creați o parolă aleatorie generată și să o trimiteți prin e-mail utilizatorului
$product->create(array_merge($request->validated(), [
'password' => 'test'
]));
return redirect()->route('admin.CRUDproducts.products.index')
->withSuccess(__('Product created successfully.'));
}

//afisare formulare edit product
public function edit(Product $product)
 {
 return view('admin.CRUDproducts.products.edit', [
 'product' => $product
 ]);
 }

//update produs
public function updateProduct(Product $product, UpdateProductRequest $request)
 {
 $product->update($request->validated());
 return redirect()->route('admin.CRUDproducts.products.index')
 ->withSuccess(__('Product updated successfully.'));
 }

//stergere produs
public function destroy(Product $product)
{
$product->delete();
return redirect()->route('admin.CRUDproducts.products.index')
->withSuccess(__('Product deleted successfully.'));
}
 //
 public function cart()
 {
 return view('cart');
 }

 //
 public function addToCart($id)
 {
 $product = Product::findOrFail($id);

 $cart = session()->get('cart', []);

 if(isset($cart[$id])) {
 $cart[$id]['quantity']++;
 } else {
 $cart[$id] = [
 "name" => $product->name,
 "quantity" => 1,
 "price" => $product->price,
 "image" => $product->image
 ];
 }

 session()->put('cart', $cart);
 return redirect()->back()->with('success', 'Product added to cart successfully!');
 }

 //
 public function update(Request $request)
 {
 if($request->id && $request->quantity){
 $cart = session()->get('cart');
 $cart[$request->id]["quantity"] = $request->quantity;
 session()->put('cart', $cart);
 session()->flash('success', 'Cart updated successfully');
 }
 }

 //
 public function remove(Request $request)
 {
 if($request->id) {
 $cart = session()->get('cart');
 if(isset($cart[$request->id])) {
 unset($cart[$request->id]);
 session()->put('cart', $cart);
 }
 session()->flash('success', 'Product removed successfully');
 }
 }

}