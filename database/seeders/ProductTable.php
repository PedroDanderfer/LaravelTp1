<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Product;
use App\Models\ProductsHasPhotos;

class ProductTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $products = [
            [
                "name" => "Apple Watch",
                "description" => "El apple watch es el nuevo reloj inteligente lanzado por Apple. Posee un procesador Kure i4 con 3000 Kh/b de Ram! Tambien cuenta con el nuevo sensor facial que permite el desbloqueo y uso, solo con un vistazo!",
                "price" => 99999,
                "discount" => 89999,
                "brand" => "Apple",
                "model" => "Watch",
                "gender" => "Unisex",
                "photo" => ["apple_watch_uno.jpg", "apple_watch_dos.jpg"]
            ],
            [
                "name" => "Lena Paul",
                "description" => "Lena Paul es un fino reloj creado para un porte suave y formal. De bateria y materiales resistentes conforma un reloj duradero y bueno para el dia a dia. Por otro lado cuenta con tiras de cuero vegano.",
                "price" => 24999,
                "discount" => NULL,
                "brand" => "Lena",
                "model" => "Paul",
                "gender" => "Mujer",
                "photo" => ["lena_uno.jpg","lena_dos.jpg"]
            ],
            [
                "name" => "Rolex Silver",
                "description" => "El Rolex Silver es el reloj de gama de entrada de la marca Rolex. Hecho sobre aluminio y con pequeños detalles en titanio. Tiene un mecanismo sueco y sus agujas estan bañadas en oro.",
                "price" => 99999,
                "discount" => NULL,
                "brand" => "Rolex",
                "model" => "Silver",
                "gender" => "Hombre",
                "photo" => ["rolex_uno.jpg", "rolex_dos.jpg"]
            ]
        ];

        for ($i=0; $i < count($products); $i++) { 
            $product = new Product();

            $product->name = $products[$i]["name"];
            $product->description = $products[$i]["description"];
            $product->price = $products[$i]["price"];
            $product->discount = $products[$i]["discount"];
            $product->brand = $products[$i]["brand"];
            $product->model = $products[$i]["model"];
            $product->gender = $products[$i]["gender"];
            $product->created_at = now();
            $product->updated_at = now();

            $product->save();

            for ($j=0; $j < count($products[$i]["photo"]); $j++) { 
                $productHasphotos = new ProductsHasPhotos();
                $productHasphotos->photo = 'products/'.$products[$i]["photo"][$j];
                $productHasphotos->product_id = $product->id;

                $productHasphotos ->save();
            }
        }
        
    }
}
