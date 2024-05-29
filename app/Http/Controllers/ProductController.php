<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->query('per_page', 10);
        $query = Product::query();
        /*$categoryId = $request->query('category_id');
        if ($categoryId) {
            $query->where('category_id', $categoryId);
        }*/
        $products = $query->paginate($perPage);
        return response()->json($products);
    }

    public function show(Product $product)
    {
        return response()->json($product);
    }

    public function store(ProductRequest $request) // Use the ProductRequest for validation
    {
        $product = Product::create($request->validated());
        // ... further logic to handle product creation
        return response()->json($product, 201); // Created status code
    }

    public function update(ProductRequest $request, Product $product) // Use the ProductRequest and existing product
    {
        $product->update($request->validated());
        // ... further logic to handle product update
        return response()->json($product);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(null, 204); // No Content status code
    }
}
