<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Product;
use App\Models\Register;
use App\Models\Season;
use Illuminate\Support\Facades\Date;
use Symfony\Component\HttpFoundation\StreamedResponse;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products', compact('products') );
    }

    public function register()
    {
    return view('register');
    }


    public function confirm(RegisterRequest $request)
    {
        $register = $request->only(['name',
            'price',
            'image',
            'seasons_id',
            'description',]);
        return view('confirm', compact('register','seasons'));

    }

    public function store(RegisterRequest $request)
    {

        $register = $request->only
            ([
            'name',
            'price',
            'image',
            'seasons_id',
            'description',
            ]);
        Product::create($product);

        return redirect('/confirm');
    }

}

