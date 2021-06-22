<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductsHasPhotos;
use App\Models\User;
use Auth;

class ProductController extends Controller
{

    public function createView(){
        return view('createPost');
    }

    public function getView(){
        return view('home');
    }

    public function delete(string $id){
      

        try {
            $product = Product::findOrFail(intval($id));

            try{

                $product->delete();

                return redirect(route('product.getAll'))->withSuccessMessage('Producto eliminado');

            }catch(Exception $e){
                return redirect(route('product.getAll'))->withErrorMessage("El producto solicitado (id: $id) no pudo ser eliminado.");
            }
    
        } catch (ModelNotFoundException $e) {
            return redirect(route('product.getAll'))->withErrorMessage("El producto solicitado (id: $id) no pudo ser encontrado.");
        }
        
    }

    public function create(Request $request){

        $validation = $request->validate([
            'images' => 'required',
            'images.*' => 'image|mimes:png,jpg|max:2048',
            'name' => 'string|required|max:60',
            'description' => 'string|required|max:255',
            'price' => 'digits_between:1,8',
            'discount' => 'digits_between:1,8|nullable',
            'brand' => 'string|required|max:60',
            'model' => 'string|required|max:60',
            'gender' => 'string|required|max:60',
        ]);

        try{

            $product = new Product;
            $product->name = $request->get('name');
            $product->description = $request->get('description');
            $product->price = $request->get('price');
            $product->discount = $request->get('discount');
            $product->brand = $request->get('brand');
            $product->model = $request->get('model');
            $product->gender = $request->get('gender');

            $product->save();

            for ($i=0; $i < count($request->file('images')); $i++) { 

                $path = $request->file('images')[$i]->store('products', 'public');
                
                $productHasPhoto = new ProductsHasPhotos;
                $productHasPhoto->photo = $path;
                $productHasPhoto->product_id = $product->id;

                $productHasPhoto->save();

            }


            return redirect(route('product.getAll'))->withSuccessMessage('Producto creado con éxito.');

        }catch(Exception $e){

            return redirect(route('product.getAll'))->withSuccessMessage('No se pudo crear el producto.');

        }
    }

    public function getAll(Request $request){
        
        try{

            
            $products = Product::with('images')->get();
            
            return view('products')->with([
                'products' => $products
            ]);
            

        }catch(Exception $e){
            return redirect(route('product.getAll'))->withErrorMessage("Ocurrio un problema");
        }

    }

    public function getId(string $id){
        
        try {
            $product = Product::findOrFail(intval($id));

            try{

                $productHasPhotos = ProductsHasPhotos::where('product_id', $id)->get();

                return view('product')->with([
                    'photos' => $productHasPhotos,
                    'product' => $product
                ]);

            }catch(Exception $e){
                return redirect(route('product.getAll'))->withErrorMessage("El producto solicitado (id: $id) no pudo ser encontrado.");
            }
    
        } catch (ModelNotFoundException $e) {
            return redirect(route('product.getAll'))->withErrorMessage("El producto solicitado (id: $id) no pudo ser encontrado.");
        }
    }

    public function getOffers(){

        try{

            $offers = Product::all()->whereNotNull('discount');

            return view('products')->with([
                'products' => $offers
            ]);
        }catch(Exception $e){
            return redirect(route('product.getAll'))->withErrorMessage('Ocurrio un problema');
        }
    }
}
