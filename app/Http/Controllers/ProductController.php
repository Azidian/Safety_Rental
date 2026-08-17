<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Products - Online Store';
        $viewData['subtitle'] = 'List of products';
        $viewData['products'] = Product::all();

        return view('product.index')->with('viewData', $viewData);
    }

    public function show(string $id): View
    {
        $viewData = [];
        $product = Product::findOrFail($id);

        $viewData['title'] = $product['name'].' - Online Store';
        $viewData['subtitle'] = $product['name'].' - Product information';
        $viewData['product'] = $product;

        return view('product.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        return view('product.create');
    }

    public function save(ProductRequest $request): RedirectResponse
    {
        Product::create($request->only(['name', 'price'])); // Save the product using mass assignment

        return redirect()->route('product.index'); // Redirect to the product index page after saving
    }
}
