<?php

namespace App\Http\Controllers;

use App\Models\Ecommerce;

class EcommerceController extends Controller
{
    public function index()
    {
        return view('ecommerce.index');
    }

    public function catalog()
    {
        $search = request('search');
        $category = request('category');

        $products = Ecommerce::query()
            ->when($search, function ($query, $search) {
                $query->where('name', 'like', '%' . $search . '%');
            })
            ->when($category, function ($query, $category) {
                $query->where('category', $category);
            })
            ->get();

        $categories = [
            'Kaos',
            'Kemeja',
            'Polo',
            'Sweater & Hoodie',
            'Jaket',
            'Celana',
        ];

        return view('ecommerce.catalog', compact(
            'products',
            'search',
            'category',
            'categories'
        ));
    }

    public function show(int $id)
    {
        $product = Ecommerce::findOrFail($id);

        return view('ecommerce.show', compact('product'));
    }
}
