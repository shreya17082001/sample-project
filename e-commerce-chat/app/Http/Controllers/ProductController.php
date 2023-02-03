<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /*
    |---------------------------------------------------------------
    |getproduct function
    |---------------------------------------------------------------
    |@return the all product data in json format.
     */

    public function getProduct()
    {
        Log::channel('loginfo')->info("successfully get product details");
        return response()->json(["product_list" => Product::all()], 200);
    }

    /*
    |---------------------------------------------------------------
    |getProductbyId function
    |---------------------------------------------------------------
    |@param $id is the id of product table id (primary key)
    |@return the product details in json format data
    */

    public function getProductById($id)
    {
        Log::channel('loginfo')->info("searching product details for id");

        $product = Product::find($id);
        if (is_null($product)) {
            Log::channel('loginfo')->info("$id id not found in product table");
            return response()->json(['message' => 'Product Not Found'], 404);
        }
        Log::channel('loginfo')->info("successfully get product details for id");

        return response()->json($product::find($id), 200);
    }

}
