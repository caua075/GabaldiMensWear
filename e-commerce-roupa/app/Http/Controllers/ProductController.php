<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;

use function Laravel\Prompts\search;

class ProductController extends Controller
{
    public function index()
    {
        $search = request('search');
        if ($search) {
            $products = Product::where('name', 'like', '%' . $search . '%')->get();
        } else {
            $seed = Carbon::now()->format('Ymd');
            $products = Product::inRandomOrder($seed)->take(12)->get();
        }

        return view('welcome', compact('products', 'search'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $product = new Product();

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->size = $request->size;
        $product->category_id = $request->category_id;

        // Image upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;

            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/products'), $imageName);
            $product->image = $imageName;
        }
        $product->save();

        return redirect('/')->with('msg', 'Produto cadastrado com sucesso!');
    }

    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);
        return view('products.show', ['product' => $product]);
    }
}
